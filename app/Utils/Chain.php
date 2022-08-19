<?php

namespace App\Utils;


/**
 * Execute commands in chaining mode
 */
class Chain
{
    /**
     * @var array
     */
    private static $queue = [];

    /**
     * @var int
     */
    private static $index = 0;

    /**
     * Start a new chain
     *
     * @return Chain
     */
    public static function start()
    {
        return new self;
    }

    /**
     * Invoke a chaining command
     *
     * @param callable $invokable
     * @param array $args
     * @return Chain
     */
    public function invoke(callable $invokable, array $args = [])
    {
        self::$queue[self::$index] = [
            $invokable, $args, call_user_func_array($invokable, $args)
        ];

        self::$index++;

        return $this;
    }

    /**
     * Get result of chaining command
     *
     * @param int $index
     * @return mixed
     */
    public static function getResultOf(int $index)
    {
        return self::$queue[$index][2];
    }
}