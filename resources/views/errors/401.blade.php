@extends('layouts.401.layout')

@section('body')
    <div id="cspio-page">
        <div id="cspio-content">

            <img id="cspio-logo" src="{{ asset('images/logo.png') }}">

            <h1 id="cspio-headline">401</h1>

            <div id="cspio-description">
                <h5 class="text-light">{{ __('please login') }}</h5>
                @foreach ([
                        \App\Http\Responses\HtmlResponse::ALERT_TYPE_DANGER,
                        \App\Http\Responses\HtmlResponse::ALERT_TYPE_WARNING
                    ] as $key)
                    @if(session()->has($key))
                        <div class="alert alert-{{ $key }}"><strong>Reason:</strong> {{ session()->get($key) }}</div>
                    @endif
                @endforeach
            </div>

            <div id="cspio-socialprofiles">
                <a href="https://fb.com/weblabsapp" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="https://www.linkedin.com/company/84129479" target="_blank"><i class="fab fa-linkedin-in fa-2x"></i></a>
                <a href="mailto:info@weblabs.app" target="_blank"><i class="fa fa-envelope fa-2x"></i></a>
            </div>

            <h6 class="text-light attribute p-3">
                <a class="btn btn-outline-light btn-outline-primary" href="{{ get_route('web.loginPage') }}">Login</a>
            </h6>

        </div><!-- end of #cspio-content -->
    </div>

@endsection

@section('footer')
    <footer class="fixed-bottom text-center">
        <p class="mt-5 mb-3 text-muted">&copy; 2021-2022</p>
    </footer>
@endsection
