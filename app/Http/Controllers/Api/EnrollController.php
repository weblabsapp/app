<?php

namespace App\Http\Controllers\Api;

use App\Repositories\EnrollRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class EnrollController extends ApiController
{
    private EnrollRepository $repository;

    public function __construct(EnrollRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Dis-enroll a course
     *
     * @param $courseId
     * @param Request $request
     * @return \App\Http\Responses\JsonResponse
     */
    public function disEnroll($courseId, Request $request)
    {
        $this->repository->disEnroll(Auth::id(), $request->attributes->get('course')->id);

        return $this->response(Response::HTTP_NO_CONTENT);
    }
}