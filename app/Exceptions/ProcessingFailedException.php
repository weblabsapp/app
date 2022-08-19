<?php

namespace App\Exceptions;

use App\Exceptions\Interfaces\ApiExceptionInterface;
use App\Exceptions\Interfaces\HtmlExceptionInterface;
use App\Http\Responses\HtmlResponse;
use App\Http\Responses\JsonResponse;
use Illuminate\Http\Response;

class ProcessingFailedException extends AbstractException implements ApiExceptionInterface, HtmlExceptionInterface
{
    const ALERT_TYPE = HtmlResponse::ALERT_TYPE_DANGER;
    const MESSAGE = "processing failed";
    const STATUS_CODE = Response::HTTP_BAD_REQUEST;
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