@extends('layouts.main')

@section('body')
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark top-center bg-dark">
        <a class="navbar-brand" href="#"><img src="{{ asset('images/code_32.png') }}" alt="logo" /> Web Labs</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item @yield('is-home-nav')">
                    <a class="nav-link" href="{{ get_route('web.homePage') }}">Home</a>
                </li>
                @if(\Illuminate\Support\Facades\Auth::user())
                <li class="nav-item @yield('is-account-nav')">
                    <a class="nav-link" href="{{ get_route('web.myAccountPage') }}">Account</a>
                </li>
                @endif
                <li class="nav-item @yield('is-courses-nav')">
                    <a class="nav-link" href="{{ get_route('web.getEnrolls') }}">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Live (Soon)</a>
                </li>
                @if(\Illuminate\Support\Facades\Auth::user())
                <li class="nav-item d-block d-sm-block d-md-none">
                    <a href="#" class="nav-link">Sign out</a>
                </li>
                @else
                    <li class="nav-item d-block d-sm-block d-md-none">
                        <a href="{{ get_route('web.loginPage') }}" class="nav-link">Sign In</a>
                    </li>
                @endif
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                @if(\Illuminate\Support\Facades\Auth::user())
                <a class="btn btn-outline-secondary pl-3 pr-3 d-none d-md-block dm-sm-none text-white" href="{{ get_route('web.notificationsPage') }}" title="Notifications">
                    @if(!empty(session()->get('new_notifications')))
                        <i class="fa-solid fa-bell fa-bounce" aria-hidden="true"></i>
                        <span class="badge badge-light ml-2">{{ session()->get('new_notifications') }}</span>
                    @else
                        <i class="fa-solid fa-bell" aria-hidden="true"></i>
                    @endif
                </a>
                <a class="pl-3 pr-3 d-none d-md-block dm-sm-none text-white" href="{{ get_route('web.logoutPage') }}" title="Sign out">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                </a>
                @else
                    <a class="btn btn-outline-light pl-3 pr-3 d-none d-md-block dm-sm-none" href="{{ get_route('web.loginPage') }}" title="Sign In">
                        <i class="fa-solid fa-user"></i>
                    </a>
                @endif
            </form>
        </div>
    </nav>
</header>
@yield('content')

@endsection