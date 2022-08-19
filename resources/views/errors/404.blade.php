@extends('layouts.404.layout')

@section('body')
    <div id="cspio-page">
        <div id="cspio-content">

            <img id="cspio-logo" src="{{ asset('images/logo.png') }}">

            <h1 id="cspio-headline">404</h1>

            <div id="cspio-description"><h6 class="text-light">We cannot find what you are looking for!</h6></div>

            <div id="cspio-socialprofiles">
                <a href="https://fb.com/weblabsapp" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="https://www.linkedin.com/company/84129479" target="_blank"><i class="fab fa-linkedin-in fa-2x"></i></a>
                <a href="mailto:info@weblabs.app" target="_blank"><i class="fa fa-envelope fa-2x"></i></a>
            </div>

            <h6 class="text-light attribute p-3">
                <a class="btn btn-outline-light btn-outline-primary" href="javascript:history.go(-1);">Go back</a>
            </h6>

        </div><!-- end of #cspio-content -->
    </div>
@endsection

@section('footer')
    <footer class="fixed-bottom text-center">
        <p class="mt-5 mb-3 text-muted">&copy; 2021-2022</p>
    </footer>
@endsection
