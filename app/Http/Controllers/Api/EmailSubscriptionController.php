<?php

namespace App\Http\Controllers\Api;


use App\Http\Requests\EmailSubscriptionRequest;
use App\Repositories\EmailSubscriptionRepository;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmailSubscriptionController extends ApiController
{
    /**
     * @var EmailSubscriptionRepository
     */
    private $repository;

    /**
     * @param EmailSubscriptionRepository $repository
     */
    public function __construct(EmailSubscriptionRepository $repository)
    {
        $this->repository = $repository;
    }

    public function subscribe(EmailSubscriptionRequest $request)
    {
//        $this->withExceptionHandling(function () use ($request) {
//            $this->repository->create([
//                'email' => $request->get('email'),
//                'notify' => true
//            ]);
//
//            return $this->response(null, Response::HTTP_NO_CONTENT);
//        });

        $this->repository->create([
            'email' => $request->get('email'),
            'notify' => true
        ]);

        return $this->response(null, Response::HTTP_NO_CONTENT);
    }

    public function unsubscribe(Request $request)
    {

    }
}
