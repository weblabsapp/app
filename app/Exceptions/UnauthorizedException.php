<?php

namespace App\Exceptions;


use App\Exceptions\Interfaces\ApiExceptionInterface;
use App\Exceptions\Interfaces\HtmlExceptionInterface;
use App\Http\Responses\HtmlResponse;
use App\Http\Responses\JsonResponse;
use Illuminate\Http\Response;

class UnauthorizedException extends AbstractException implements ApiExceptionInterface, HtmlExceptionInterface
{
    const MESSAGE = 'unauthorized';
    const STATUS_CODE = Response::HTTP_UNAUTHORIZED;
    const ALERT_TYPE = HtmlResponse::ALERT_TYPE_DANGER;
    const SHOW_TOAST = true;

    /**
     * @param $request
     * @return JsonResponse
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function renderJson($request): JsonResponse
    {
        return new JsonResponse($this->getJsonData(), self::STATUS_CODE);
    }

    /**
     * @param $request
     * @return Response
     */
    public function renderHtml($request): Response
    {
        return new HtmlResponse($this->getHtmlData(), self::STATUS_CODE, self::ALERT_TYPE);
    }
}
