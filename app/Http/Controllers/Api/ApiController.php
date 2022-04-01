<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Http\Responses\JsonResponse;

abstract class ApiController extends Controller
{
    /**
     * @param null $content
     * @param int $status
     * @param array $headers
     * @return JsonResponse
     */
    public function response($content = null, int $status = 200, array $headers = [])
    {
        return new JsonResponse($content, $status, $headers);
    }

    protected function withExceptionHandling(\Closure $closure)
    {
        try {
            return call_user_func($closure);
        } catch (\Throwable $exception) {
            return response()->withException($exception);
        }
    }
}
