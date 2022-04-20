<?php

if (!function_exists('get_route')) {
    /**
     * Return route without port (Dev usage only)
     *
     * @param string $name
     * @param array $parameters
     * @param bool $absolute
     * @return string
     */
    function get_route($name, $parameters = [], $absolute = true)
    {

        $route = route($name, $parameters, $absolute);

        if (env('APP_ENV') == 'prod' || !$absolute) {
            return $route;
        }

        $route = parse_url($route);

        return sprintf(
            '%s://%s/%s%s',
            $route['scheme'],
            $route['host'],
            ltrim($route['path'], '/'),
            !empty($route['query']) ? $route['query'] : ''
        );
    }
}
