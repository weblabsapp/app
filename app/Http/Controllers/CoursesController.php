<?php

namespace App\Http\Controllers;

use App\Exceptions\NotFoundException;
use App\Repositories\CourseRepository;
use App\Repositories\EnrollRepository;
use App\Repositories\LessonProgressRepository;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    private EnrollRepository $enrollRepository;
    private LessonProgressRepository $lessonProgressRepository;
    private CourseRepository $courseRepository;

    /**
     * @param EnrollRepository $repository
     * @param LessonProgressRepository $lessonProgressRepository
     * @param CourseRepository $courseRepository
     */
    public function __construct(
        EnrollRepository $repository, 
        LessonProgressRepository $lessonProgressRepository,
        CourseRepository $courseRepository
    ) {
        $this->enrollRepository = $repository;
        $this->lessonProgressRepository = $lessonProgressRepository;
        $this->courseRepository = $courseRepository;
    }

    /**
     * Get courses the user enrolled in
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function listCourses(Request $request)
    {
        $enrolls = $this->enrollRepository->getEnrollments(Auth::id(), true);

        foreach ($enrolls as $enroll) {
            $enroll->course->last_enrolled_lesson_tag = $this->lessonProgressRepository->getLastEnrolledLessonTag(Auth::id(), $enroll->course->id);
            $enroll->course->progress_count = $this->courseRepository->getProgressCount(Auth::id(), $enroll->course->id);
        }

        return view('courses', [
            'enrollments' => $enrolls,
        ]);
    }

    /**
     * Explore course topics and lessons
     *
     * @param $courseTag
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     * @throws \App\Exceptions\AbstractException
     */
    public function explore($courseTag, Request $request)
    {
        $course = $this->courseRepository->query()
            ->with([
                'topics',
                'topics.lessons' => fn ($query) => $query->withInactive()
            ])
            ->where('tag', $courseTag)
            ->first();

        if (!$course) {
            NotFoundException::throw();
        }

        return view('explore-course', [
            'course' => $course
        ]);
    }
}