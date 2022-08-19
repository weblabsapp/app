<?php

namespace App\Exceptions;


use App\Exceptions\Interfaces\ApiExceptionInterface;
use App\Exceptions\Interfaces\HtmlExceptionInterface;
use App\Http\Responses\HtmlResponse;
use App\Http\Responses\JsonResponse;
use Illuminate\Http\Response;

class DuplicateEntityException extends AbstractException implements HtmlExceptionInterface, ApiExceptionInterface
{
    const MESSAGE = "duplicate entity";
    const STATUS_CODE = Response::HTTP_BAD_REQUEST;
    const ALERT_TYPE = HtmlResponse::ALERT_TYPE_WARNING;
    const SHOW_TOAST = true;

    /**
     * @param $request
     * @return Response
     */
    public function renderHtml($request): Response
    {
        return new HtmlResponse($this->getHtmlData(), self::STATUS_CODE, self::ALERT_TYPE);
    }

    /**
     * @param $request
     * @return JsonResponse
     */
    public function renderJson($request): JsonResponse
    {
        return new JsonResponse($this->getJsonData(), self::STATUS_CODE);
    }
}
