<?php

namespace App\Enums;

class CoursesTagsEnum
{
    const PHP_COURSE_TAG = 'php';
    const PYTHON_COURSE_TAG = 'python';
    const JAVASCRIPT_COURSE_TAG = 'javascript';

    public static function getCourseTypeExtension($courseTag)
    {
        $coursesExtensions = [
            self::PHP_COURSE_TAG => 'php',
            self::JAVASCRIPT_COURSE_TAG => 'js',
            self::PYTHON_COURSE_TAG => 'py'
        ];

        return $coursesExtensions[$courseTag];
    }

    /**
     * @return string[]
     */
    public static function getAllTags()
    {
        return [
            self::PYTHON_COURSE_TAG,
            self::PHP_COURSE_TAG,
            self::JAVASCRIPT_COURSE_TAG
        ];
    }
}