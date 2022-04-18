<?php

namespace App\Exceptions;


use App\Http\Responses\HtmlResponse;
use App\Http\Responses\JsonResponse;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

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

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->renderable(function (\Throwable $exception, Request $request) {
            Log::alert($exception->getMessage(), array_merge($request->all(), $request->json()->all()));
            if ($exception instanceof \Illuminate\Validation\ValidationException) {
                $description = $exception->getMessage();
                foreach ($exception->errors() as $field => $errorMessages) {
                    $errors[$field] = implode("\n", $errorMessages);
                }
            }
            if ($request->isJson()) {
                return new JsonResponse([
                    'main' => 'something went wrong',
                    'description' => __(
                        strtolower($description ?? 'something went wrong'),
                        $errors ?? []
                    )], Response::HTTP_UNPROCESSABLE_ENTITY);
            } else {
                return new HtmlResponse(__('something went wrong'), Response::HTTP_UNPROCESSABLE_ENTITY, HtmlResponse::ALERT_TYPE_DANGER);
            }
        });
    }
}
