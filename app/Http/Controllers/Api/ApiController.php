<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Http\Responses\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

abstract class ApiController extends Controller
{
    /**
     * @var array
     */
    private $responseData = [];

    /**
     * @param int $status
     * @param array $headers
     * @return JsonResponse
     */
    public function response(int $status = Response::HTTP_OK, array $headers = [])
    {
        return new JsonResponse($this->responseData, $status, $headers);
    }

    /**
     * @param array $data
     * @return void
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    protected function setResponseData(array $data)
    {
        if (!isset($data['is_recaptcha_required'])) {
            $data['is_recaptcha_required'] = request()->get('recaptcha_required', false);
        }

        $this->responseData = $data;
    }

    /**
     * Validate request inputs
     *
     * @param Request $request
     * @param RulesInterface $rules
     * @return void
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validation(Request $request, RulesInterface $rules)
    {
        $this->validate($request, $rules->getRules(), $rules->getMessages());
    }
}
