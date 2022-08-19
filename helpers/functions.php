<?php

if (!function_exists('tap_if')) {
    /**
     * Call a function and return its value if condition is true, else, do nothing
     *
     * @param $condition
     * @param $value
     * @param callable $function
     * @return \Illuminate\Support\HigherOrderTapProxy|mixed|void
     */
    function tap_if($condition, $value, callable $function)
    {
        if ($condition) {
            return tap($value, $function);
        }
    }
}

if (!function_exists('md5_to_uuid')) {
    /**
     * Create UUID from existing md5 hash
     *
     * @param $string
     * @return string
     */
    function uuid_make($string){
        return substr($string, 0, 8 ) .'-'.
            substr($string, 8, 4) .'-'.
            substr($string, 12, 4) .'-'.
            substr($string, 16, 4) .'-'.
            substr($string, 20);
    }
}

if (!function_exists('either_of')) {
    /**
     * Select first occurring non-empty value
     *
     * @param mixed ...$values
     * @return void
     */
    function either_of(...$values) {
        foreach ($values as $value) {
            if (!blank($value)) {
                return $value;
            }
        }

        return null;
    }
}
