@extends('layouts.coming-soon.layout')

@section('body')
<div id="cspio-page">
    <div id="cspio-content">

        <img id="cspio-logo" src="{{ asset('images/logo.png') }}">

        <h1 id="cspio-headline">Coming Soon</h1>

        <div id="cspio-description"><h6 class="text-light">Get ready! Something really cool is coming!</h6></div>

        <form id="subscribe-unsubscribe-form" action="{{ route('api.subscribe') }}" method="post">
            {{ csrf_field() }}
            <div class="input-group mb-3 col-md-12 justify-content-center">
                <input type="email" name="email" class="form-control" placeholder="email@domain.com" required>
                <div class="input-group-append">
                    <button class="btn btn-outline-light btn-outline-primary" type="submit">Subscribe</button>
                </div>
            </div>
        </form>

        <h6 class="text-light attribute p-3">We promise to never spam you.</h6>

        <div id="cspio-socialprofiles">
            <a href="https://fb.com/weblabsapp" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="https://www.linkedin.com/company/84129479" target="_blank"><i class="fab fa-linkedin-in fa-2x"></i></a>
            <a href="mailto:info@weblabs.app" target="_blank"><i class="fa fa-envelope fa-2x"></i></a>
        </div>

    </div><!-- end of #cspio-content -->
</div>

@endsection

@section('footer')

@endsection

@include('layouts.coming-soon.scripts')
