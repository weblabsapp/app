<?php

namespace App\Notifications;

interface LessonNotificationInterface
{
    public function formatLessonTitle($lessonTitle);
}