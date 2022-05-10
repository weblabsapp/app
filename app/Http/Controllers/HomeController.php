<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Display coming soon page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('coming-soon');
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


