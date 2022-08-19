<?php

namespace App\Http\Middleware;


use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('web.loginPage');
        }
    }

    /**
     * Override unauthenticated user behavior
     *
     * @param $request
     * @param array $guards
     * @return void
     * @throws \Exception
     */
    protected function unauthenticated($request, array $guards)
    {
        try {
            parent::unauthenticated($request, $guards);
        } catch (AuthenticationException $exception) {
            throw new AccessDeniedHttpException('unauthorized_request_access');
        }
    }
}
