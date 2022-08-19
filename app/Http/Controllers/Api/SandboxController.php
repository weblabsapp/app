<?php

namespace App\Http\Controllers\Api;


use App\Events\SandboxCreatedEvent;
use App\Factories\Sandbox\Sandbox;
use App\Http\Requests\CreateSandboxRequest;
use App\Http\Requests\RunCodeRequest;
use App\Repositories\SandboxRepository;
use App\Utils\Chain;
use Illuminate\Http\Request;

class SandboxController extends ApiController
{
    private SandboxRepository $repository;

    /**
     * @param SandboxRepository $repository
     */
    public function __construct(SandboxRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Create new sandbox and,or container
     *
     * @param $courseTag
     * @param CreateSandboxRequest $request
     * @return \App\Http\Responses\JsonResponse
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function create($courseTag, CreateSandboxRequest $request)
    {
        Chain::start()
            ->invoke([Sandbox::getFactory(), 'make'], [strtolower($courseTag)])
            ->invoke([$this->repository, 'createOrUpdate'], [
                array_combine(['sandbox_id', 'volume_id'], Chain::getResultOf(0))
            ])
            ->invoke([SandboxCreatedEvent::class, 'dispatch'], [[
                'course_tag' => $courseTag,
                'course_id' => $request->attributes->get('course')->id
            ]]);

        $sandbox = Chain::getResultOf(1);

        $this->setResponseData([
            'message' => 'sandbox_created_successfully',
            'show_toast' => true,
            'sandbox_id' => $sandbox->sandbox_id,
        ]);

        return $this->response();
    }

    /**
     * Execute a command in sandbox
     *
     * @param $sandboxId
     * @param RunCodeRequest $request
     * @return \App\Http\Responses\JsonResponse
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function runCode($sandboxId, RunCodeRequest $request)
    {
        // Validate request
        $request->validated();

        $courseTag = $request->json('courseTag');
        $code = $request->json('code');
        $options = $request->json('options');

        Chain::start()
            ->invoke([$this->repository, 'findBy'], ['sandbox_id', $sandboxId])
            ->invoke([Sandbox::getFactory(), 'executeCommand'], [$sandboxId, $courseTag, $code, $options]);

        $this->setResponseData([
            'output' => Chain::getResultOf(1)
        ]);

        return $this->response();
    }

    /**
     * Get SandBox ID
     *
     * @return \App\Http\Responses\JsonResponse
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function getId()
    {
        $this->setResponseData([
            'sandbox_id' => Sandbox::getFactory()->getPodName()
        ]);

        return $this->response();
    }
}