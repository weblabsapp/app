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
        $checkedItems = $request->post('checked_items');

        $isCompleted = $this->lessonProgressRepository->markAsCompleted(Auth::id(), $lesson, $checkedItems);

        $this->setResponseData([
            'is_completed' => $isCompleted
        ]);

        return $this->response();
    }
}