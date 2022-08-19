@extends('layouts.coming-soon.layout')

@section('body')
<div id="cspio-page">
    <div id="cspio-content">

        <img id="cspio-logo" src="{{ asset('images/logo.png') }}">

        <h1 id="cspio-headline">Coming Soon</h1>

        <div id="cspio-description"><h6 class="text-light">Get ready! Something really cool is coming!</h6></div>

        @if(env('NEWSLETTER_SUBSCRIPTION_ENABLED', false))
            <form id="subscribe-unsubscribe-form" action="{{ get_route('api.subscribe') }}" method="post">
                @csrf
                <div class="form-group">
                    <div class="input-group mb-3 col-md-12 justify-content-center">
                        <input type="text" name="email" class="form-control" placeholder="email@domain.com" autocomplete="off"/>
                        <div class="input-group-append">
                            <button class="btn btn-outline-light btn-outline-primary" type="submit">Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div id="recaptcha" style="text-align: center; display: none;"></div>
                    {!!  GoogleReCaptchaV2::render('recaptcha') !!}
                </div>
            </form>
            <h6 class="text-light attribute p-3">We promise to never spam you.</h6>
            @include('layouts.coming-soon.scripts')
        @endif


        <div id="cspio-socialprofiles">
            <a href="https://fb.com/weblabsapp" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="https://www.linkedin.com/company/84129479" target="_blank"><i class="fab fa-linkedin-in fa-2x"></i></a>
            <a href="mailto:info@weblabs.app" target="_blank"><i class="fa fa-envelope fa-2x"></i></a>
        </div>

    </div><!-- end of #cspio-content -->
</div>
@endsection


@section('footer')
    <footer class="text-center">
        <p class="mt-5 mb-3 text-muted">&copy; 2021-2022 - weblabs.app</p>
    </footer>
@endsection

