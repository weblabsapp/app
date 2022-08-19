<?php

namespace App\Http\Controllers;


use App\Exceptions\NotFoundException;
use App\Repositories\EnrollRepository;
use App\Repositories\LessonProgressRepository;
use App\Repositories\LessonRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnrollController extends Controller
{
    private EnrollRepository $enrollRepository;
    private LessonRepository $lessonRepository;
    private LessonProgressRepository $lessonProgressRepository;

    /**
     * @param EnrollRepository $enrollRepository
     * @param LessonRepository $lessonRepository
     * @param LessonProgressRepository $lessonProgressRepository
     */
    public function __construct(
        EnrollRepository $enrollRepository,
        LessonRepository $lessonRepository,
        LessonProgressRepository $lessonProgressRepository
    ) {
        $this->enrollRepository = $enrollRepository;
        $this->lessonProgressRepository = $lessonProgressRepository;
        $this->lessonRepository = $lessonRepository;
    }

    /**
     * Enroll in course
     *
     * @param $courseTag
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     * @throws \App\Exceptions\AbstractException
     */
    public function enroll($courseTag, Request $request)
    {
        $course = $request->attributes->get('course');

        if (!$this->lessonRepository->findBy('course_id', $course->id)) {
            NotFoundException::throw();
        }

        $course = $request->attributes->get('course');

        return view('enroll', [
            'courseTag' => strtolower($courseTag),
            'course' => $course,
            'lastLessonTag' =>  $this->lessonProgressRepository->getLastEnrolledLessonTag(
                Auth::id(), $course->id
            )
        ]);
    }

    /**
     * Render enrollment step
     *
     * @param $courseTag
     * @param $step
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function step($courseTag, $step, Request $request)
    {
        return view('enroll-steps', [
            'courseTag' => $courseTag,
            'step' => $step
        ]);
    }
}
