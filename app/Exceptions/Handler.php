<?php

namespace App\Exceptions;


use App\Exceptions\Interfaces\ApiExceptionInterface;
use App\Exceptions\Interfaces\HtmlExceptionInterface;
use App\Http\Responses\HtmlResponse;
use App\Http\Responses\JsonResponse;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
                $description = str_replace(' ', '_', $exception->getMessage());
                foreach ($exception->errors() as $field => $errorMessages) {
                    $errors[$field] = implode("\n", $errorMessages);
                }
            }
            if ($exception instanceof ThrottleRequestsException) {
                $httpCode = Response::HTTP_TOO_MANY_REQUESTS;
                $description = 'api_rate_limit_exceeded';
            }
            if ($exception instanceof NotFoundHttpException || $exception instanceof MethodNotAllowedHttpException) {
                $httpCode = Response::HTTP_NOT_FOUND;
                $description = 'page_or_api_not_found';
            }

            if ($exception instanceof ApiExceptionInterface || $exception instanceof HtmlExceptionInterface) {
                $httpCode = $exception->getCode();
            }

            // Save request session before killing the app
            $request->session()->save();

            if ($request->isJson()) {
                return new JsonResponse([
                    'main' => 'something_went_wrong',
                    'description' => strtolower($description ?? 'something_went_wrong'),
                    'show_toast' => true,
                    'errors' => $errors ?? [],
                    'is_recaptcha_required' => $request->get('recaptcha_required')
                ], $httpCode ?? Response::HTTP_UNPROCESSABLE_ENTITY);
            } else {
                return new HtmlResponse(
                    __($description ?? 'something went wrong'),
                    $httpCode ?? Response::HTTP_UNPROCESSABLE_ENTITY,
                    HtmlResponse::ALERT_TYPE_DANGER
                );
            }
        });
    }
}
