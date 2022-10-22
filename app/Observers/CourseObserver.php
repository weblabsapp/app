<?php

namespace App\Observers;

use App\Models\Course;
use Illuminate\Support\Facades\Storage;

class CourseObserver
{
    /**
     * Trigger after deleting a course
     *
     * @param Course $course
     * @return void
     */
    public static function deleted(Course $course)
    {
        if ($course->isForceDeleting()) {
            $course->lessons()->forceDelete();
            Storage::disk('s3assets')->delete($course->logo);
        } else {
            $course->lessons()->delete();
        }
    }
}
