<?php

namespace App\Http\Controllers\Api;

use App\Repositories\LessonProgressRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class LessonController extends ApiController
{
    private LessonProgressRepository $lessonProgressRepository;

    public function __construct(LessonProgressRepository $lessonProgressRepository)
    {
        $this->lessonProgressRepository = $lessonProgressRepository;
    }

    /**
     * Mark lesson as completed
     *
     * @param $lessonId
     * @param Request $request
     * @return \App\Http\Responses\JsonResponse
     */
    public function markAsCompleted($lessonId, Request $request)
    {
        $lesson = $request->attributes->get('lesson');

        $this->lessonProgressRepository->markAsCompleted(Auth::id(), $lesson->id);

        return $this->response(Response::HTTP_NO_CONTENT);
    }
}