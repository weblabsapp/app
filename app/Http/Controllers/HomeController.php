<?php

namespace App\Http\Controllers;

use App\Repositories\CourseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    private CourseRepository $coursesRepository;

    /**
     * @param CourseRepository $coursesRepository
     */
    public function __construct(CourseRepository $coursesRepository)
    {
        $this->coursesRepository = $coursesRepository;
    }

    /**
     * Display coming soon page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function comingSoon()
    {
        return view('coming-soon');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function home(Request $request)
    {
        $courses = $this->coursesRepository->all(['*'], true);

        $courses->map(function ($course) {
            $course->logo = Storage::disk('s3assets')->url($course->logo);
        });

        return view('home', [
            'courses' => $courses
        ]);
    }

    /**
     * Display privacy policy page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function privacy()
    {
        return view('privacy');
    }

    /**
     * Display terms of service page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function terms()
    {
        return view('terms-of-service');
    }

    /**
     * Display data deletion policy page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function dataDeletion()
    {
        return view('data-deletion');
    }
}


