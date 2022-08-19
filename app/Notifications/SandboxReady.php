<?php

namespace App\Notifications;

class SandboxReady extends AbstractNotification implements CourseNotificationInterface, LessonNotificationInterface
{
    public function getActionButtons()
    {
        return [
            'start_learning' => [
                'link' => function ($courseTag, $lessonTag) {
                    return get_route('web.getLesson', [
                        'courseTag' => $courseTag,
                        'lessonTag' => $lessonTag
                    ]);
                },
                'classes' => 'btn btn-primary btn-sm',
                'text' => __('start learning button text')
            ],
        ];
    }

    /**
     * Format course tag
     *
     * @param $courseTag
     * @return string
     */
    public function formatCourseTag($courseTag)
    {
        return strtoupper($courseTag);
    }

    /**
     * Format lesson title
     *
     * @param $lessonTitle
     * @return string
     */
    public function formatLessonTitle($lessonTitle)
    {
        return ucwords($lessonTitle);
    }

    /**
     * Get notification icon
     *
     * @return string
     */
    public function getIcon()
    {
//        $courseTag = $this->notification->placeholders['course_tag'] ?? null;
//
//        if ($courseTag) {
//            return asset(sprintf('images/%s_logo_32.png', $courseTag));
//        }

        return asset('images/code_64.png');
    }

    public function getTitle()
    {
        return 'YOUR SANDBOX IS READY!';
    }

    public function getText()
    {
        if (array_key_exists('course_tag', $this->notification->placeholders)) {
            $link = sprintf(' for <a href="%s">%s course</a>',
                get_route('web.enrollPage', ['courseTag' => $this->notification->placeholders['course_tag']]),
                strtoupper($this->notification->placeholders['course_tag'])
            );
        } else {
            $link = null;
        }

        return sprintf('We have finished setting up your virtual environment%s.', $link);
    }
}