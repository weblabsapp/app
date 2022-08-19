<?php

namespace App\Enums;


class NotificationTypesEnum
{
    const TYPE_SANDBOX_READY = 'sandbox_ready';
    const TYPE_NEW_LESSON_ADDED = 'new_lesson_added';

    /**
     * Get notification skeleton
     *
     * @param string $type
     * @return array
     */
    public static function placeholders(string $type)
    {
        $notifications = [
            self::TYPE_SANDBOX_READY => [
                'title' => 'sandbox ready notification title',
                'text' => 'sandbox ready notification text',
                'placeholders' => [
                    'receiver_name' => function ($receiverName) {
                        return ucwords($receiverName);
                    },
                    'course_tag' => function ($courseTag) {
                        return strtoupper($courseTag);
                    },
                    'action_buttons' => []
                ],
            ],
            self::TYPE_NEW_LESSON_ADDED => [
                'title' => 'new lesson added notification title',
                'text' => 'new lesson added notification text',
                'placeholders' => [
                    'course_tag' => function ($courseTag) {
                        return strtoupper($courseTag);
                    },
                    'lesson_title' => function ($lessonTitle) {
                        return ucwords($lessonTitle);
                    },
                    'action_buttons' => [
                        'check_it_out' => [
                            'link' => function ($courseTag, $lessonTag) {
                                return get_route('web.getLesson', [
                                    'courseTag' => $courseTag,
                                    'lessonTag' => $lessonTag
                                ]);
                            },
                            'classes' => ['btn', 'btn-outline-secondary'],
                            'text' => __('new lesson added button text')
                        ]
                    ]
                ],
            ]
        ];

        return $notifications[$type];
    }
}