<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('get_route')) {
    /**
     * Return route without port (Dev usage only)
     *
     * @param string $name
     * @param array $parameters
     * @param bool $absolute
     * @param bool $isEmail
     * @param bool $prependLoginRoute
     * @return string
     */
    function get_route($name, $parameters = [], $absolute = true, $isEmail = false, $prependLoginRoute = false)
    {
        $route = route($name, $parameters, $absolute);

        if (env('APP_ENV') == 'prod' || !$absolute) {
            return $route;
        }

        $parsedRoute = $route = parse_url($route);

        if ($isEmail) {
            $route['host'] = str_replace('weblabs.local', 'weblabs.app', $route['host']);
        }

        $route = sprintf(
            '%s://%s/%s%s',
            $route['scheme'],
            $route['host'],
            ltrim($route['path'] ?? '', '/'),
            !empty($route['query']) ? '?'.$route['query'] : ''
        );

        if (!Auth::user() && $prependLoginRoute) {
            $redirectUri = sprintf('%s%s', $parsedRoute['path'], !empty($parsedRoute['query']) ? '?'. $parsedRoute['query'] : '');
            $route = sprintf('%s?redirect_uri=%s', route('web.loginPage'), urlencode($redirectUri));
        }

        return $route;
    }
}
