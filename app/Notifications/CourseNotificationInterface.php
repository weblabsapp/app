<?php

namespace App\Notifications;

interface CourseNotificationInterface
{
    public function formatCourseTag($courseTag);
}