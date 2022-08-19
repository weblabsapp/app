<?php

namespace App\Http\Middleware;

use App\Exceptions\AbstractException;
use App\Exceptions\NotFoundException;
use App\Repositories\CourseRepository;
use App\Repositories\LessonRepository;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ResolveEntities
{
    private CourseRepository $courseRepository;
    private LessonRepository $lessonRepository;

    /**
     * @param CourseRepository $courseRepository
     * @param LessonRepository $lessonRepository
     */
    public function __construct(CourseRepository $courseRepository, LessonRepository $lessonRepository)
    {
        $this->courseRepository = $courseRepository;
        $this->lessonRepository = $lessonRepository;
    }

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return Response|RedirectResponse
     * @throws AbstractException
     */
    public function handle(Request $request, Closure $next)
    {
        $routeParameters = $request->route()->parameters() ?? [];

        if (isset($routeParameters['courseTag']) || !empty($request->attributes->get('course_tag'))) {
            $courseTag = strtolower($routeParameters['courseTag'] ?? $request->attributes->get('course_tag'));
            $course = $this->courseRepository->findBy('tag', $courseTag);

            if (!$course) {
                NotFoundException::throw(__('course not found'));
            }

            $request->attributes->set('course', $course);
        }

        if (isset($course) && (isset($routeParameters['lessonTag']) || !empty($request->attributes->get('lesson_tag')))) {
            $lessonTag = strtolower($routeParameters['lessonTag'] ?? $request->attributes->get('lesson_tag'));
            $lesson = $this->lessonRepository->findWhere([
                'course_id' => $course->id,
                'tag' => $lessonTag
            ])->first();

            if (!$lesson) {
                NotFoundException::throw(__('lesson not found'));
            }

            $request->attributes->set('lesson', $lesson);
        }

        return $next($request);
    }
}
