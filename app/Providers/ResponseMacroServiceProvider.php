<?php

namespace App\Providers;

use Illuminate\Http\Response;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        ResponseFactory::macro('withException', function ($exception) {
//            throw $exception;
//        });
    }
}
