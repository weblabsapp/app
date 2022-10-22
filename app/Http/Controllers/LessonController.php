<?php

namespace App\Http\Controllers;

use App\Enums\CoursesTagsEnum;
use App\Exceptions\NotFoundException;
use App\Factories\Sandbox\Sandbox;
use App\Repositories\EnrollRepository;
use App\Repositories\LessonProgressRepository;
use App\Repositories\LessonRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    private LessonRepository $lessonRepository;
    private LessonProgressRepository $lessonProgressRepository;
    private EnrollRepository $enrollRepository;

    /**
     * @param LessonRepository $lessonRepository
     * @param LessonProgressRepository $lessonProgressRepository
     * @param EnrollRepository $enrollRepository
     */
    public function __construct(
        LessonRepository $lessonRepository,
        LessonProgressRepository $lessonProgressRepository,
        EnrollRepository $enrollRepository
    ) {
        $this->lessonRepository = $lessonRepository;
        $this->lessonProgressRepository = $lessonProgressRepository;
        $this->enrollRepository = $enrollRepository;
    }

    /**
     * @param $courseTag
     * @param $lessonTag
     * @param Request $request
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     * @throws NotFoundException
     */
    public function getLesson($courseTag, $lessonTag, Request $request)
    {
        $this->enrollRepository->enroll(Auth::id(), $request->attributes->get('course')->id);

        if (!Sandbox::factory()->isContainerReady($courseTag)) {
            return redirect()->route('web.enrollPage', ['courseTag' => $courseTag])
                ->with('messages', ['warning' => 'You still have not created a sandbox. Start by click on "Create Sandbox".']);
        }

        $lesson = $request->attributes->get('lesson');
        $nextAndPreviousLessons = $this->lessonRepository->getNextAndPreviousLessons($lesson);

        $progress = $this->lessonProgressRepository->createProgress([
            'account_id' => Auth::id(),
            'lesson_id' => $lesson->id
        ]);

        $lesson->setRelation('progress', $progress);

        $course = $request->attributes->get('course');

        return view('lesson', [
            'courseTag' => $courseTag,
            'courseFileExt' => CoursesTagsEnum::getCourseTypeExtension($courseTag),
            'courseLogo' => $course->logo,
            'lesson' => $lesson,
            'lessonTag' => $lessonTag,
            'nextAndPreviousLessons' => $nextAndPreviousLessons,
        ]);
    }

    /**
     * Get full path of lesson's view
     *
     * @param $course
     * @param $lessonId
     * @return string|null
     */
    private function getLessonViewPath($course, $lessonId)
    {
        return sprintf('lessons.%s.%s', $course, $lessonId);
    }
}
