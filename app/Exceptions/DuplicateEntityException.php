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
    const STATUS_CODE = 422;
    const ALERT_TYPE = HtmlResponse::ALERT_TYPE_WARNING;
    const SHOW_TOAST = true;

    /**
     * @param $request
     * @return Response
     */
    public function renderHtml($request): Response
    {
        return new HtmlResponse($this->getHtmlData(), $this->code, self::ALERT_TYPE);
    }

    /**
     * @param $request
     * @return JsonResponse
     */
    public function renderJson($request): JsonResponse
    {
        return new JsonResponse($this->getJsonData(), $this->code);
    }
}
