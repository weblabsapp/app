<?php

namespace App\Exceptions;


use App\Http\Responses\JsonResponse;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    private function getJsonResponseData(\Throwable $exception, $request): array
    {
        if ($exception->getCode() == "23000") { // Duplicate entry
            return [__($request->getError()), Response::HTTP_BAD_REQUEST];
        }

        return [];
    }

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->renderable(function (QueryException $exception, $request) {
            return new JsonResponse(...$this->getJsonResponseData($exception, $request));
        });
    }
}
