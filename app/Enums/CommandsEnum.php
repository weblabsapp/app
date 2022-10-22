<?php

namespace App\Enums;

class CommandsEnum
{
    const PHP = 'php';
    const PYTHON = 'python';
    const JAVASCRIPT = 'node';

    const COMMANDS_OPTIONS = [
        self::PHP => [
            'basic-syntax' => [
                'short_open_tag' => [
                    'value' => 1,
                    'label' => 'Short Open Tags'
                ]
            ],
            'types' => []
        ]
    ];

    /**
     * Get container appropriate command
     *
     * @param $courseTag
     * @return mixed
     */
    public static function getCommand($courseTag)
    {
        return (new \ReflectionClassConstant(new self, strtoupper($courseTag)))->getValue();
    }

    public static function getOptions($courseTag, $lessonTag)
    {
        return self::COMMANDS_OPTIONS[$courseTag][$lessonTag];
    }
}