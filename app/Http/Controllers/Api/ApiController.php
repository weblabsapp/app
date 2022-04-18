<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Http\Responses\JsonResponse;
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
     */
    protected function setResponseData(array $data)
    {
        $this->responseData = $data;
    }
}
