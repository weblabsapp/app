<?php

namespace App\Exceptions\Interfaces;

use Illuminate\Http\Response;

interface HtmlExceptionInterface
{
    public function renderHtml($request): Response;
}
