<?php

namespace App\Observers;

use App\Models\Lesson;
use Illuminate\Support\Str;

class LessonObserver
{
    public static function creating(Lesson $lesson)
    {
        $lesson->tag = Str::slug($lesson->title);
    }
}
