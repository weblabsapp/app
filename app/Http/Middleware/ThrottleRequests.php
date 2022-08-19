<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Routing\Middleware\ThrottleRequests as ThrottleMiddleware;

class ThrottleRequests extends ThrottleMiddleware
{
    /**
     * @param $request
     * @param Closure $next
     * @param $maxAttempts
     * @param $decayMinutes
     * @param $prefix
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle($request, Closure $next, $maxAttempts = 60, $decayMinutes = 1, $prefix = '')
    {
        if (env('APP_ENV') !== "prod") {
            return $next($request);
        }

        return parent::handle($request, $next, $maxAttempts, $decayMinutes, $prefix);
    }
}
