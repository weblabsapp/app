<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [];

    /**
     * @param $request
     * @param \Closure $next
     * @return mixed
     * @throws \Illuminate\Session\TokenMismatchException
     */
    public function handle($request, \Closure $next)
    {
        // Exclude OPTIONS requests
        if ($request->isMethod('OPTIONS') || $request->getHost() == env('REST_API_DOMAIN')) {
            return $next($request);
        }

        return parent::handle($request, $next);
    }
}
