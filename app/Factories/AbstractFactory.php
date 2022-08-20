<?php

namespace App\Factories;

abstract class AbstractFactory
{
    /**
     * Get instance of factory class
     *
     * @return static
     */
    public static function factory()
    {
        return new static();
    }
}