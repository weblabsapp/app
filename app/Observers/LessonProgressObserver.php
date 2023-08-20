<?php

namespace App\Observers;

use App\Models\LessonProgress;

class LessonProgressObserver
{
    public static function creating(LessonProgress $lessonProgress)
    {
        $lessonProgress->checklist_completeness = [];
    }
}
