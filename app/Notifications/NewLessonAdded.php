<?php

namespace App\Notifications;

class NewLessonAdded extends AbstractNotification implements CourseNotificationInterface, LessonNotificationInterface
{

    public function getActionButtons()
    {
        // TODO: Implement getActionButtons() method.
    }

    public function formatCourseTag()
    {
        // TODO: Implement getCourseTag() method.
    }

    public function formatLessonTitle()
    {
        // TODO: Implement getLessonTag() method.
    }
}