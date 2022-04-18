<?php

namespace App\Exceptions\Interfaces;

use App\Http\Responses\JsonResponse;

interface ApiExceptionInterface
{
    public function renderJson($request): JsonResponse;
}
