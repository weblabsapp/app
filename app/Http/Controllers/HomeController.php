<?php

namespace App\Http\Controllers;

use App\Repositories\CourseRepository;
use Illuminate\Http\Request;

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
        return view('home', [
            'courses' => $this->coursesRepository->all(['*'], true)
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
}


