@extends('layouts.login.layout')

@section('body')
    @if($isLoggedIn)
        <div class="row text-center m-0 p-5">
            <div class="col-md-12">
                <img class="mb-4" src="{{ asset('images/code_64_account.png') }}" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">You are already logged in!</h1>
                <p><small>To go to your account, please click here: <a href="{{ get_route('web.myAccountPage') }}">My Account</a></small></p>
                <p><small>If you are about to log out, please click here: <a href="{{ get_route('web.logoutPage') }}">Logout</a></small></p>
            </div>
        </div>
    @else
        <form id="login-form" class="auth-form text-center" action="{{ get_route('api.login') }}" method="post">
            {{ csrf_field() }}
            <img class="mb-4" src="{{ asset('images/code_64.png') }}" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <div class="group">
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" autofocus>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="checkbox mb-1">
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="remember_me" value="1"> Remember me
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div id="recaptcha" class="mb-2" style="text-align: center; display: none;"></div>
                {!!  GoogleReCaptchaV2::render('recaptcha') !!}
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <a href="{{ get_route('web.signupPage') }}" class="btn btn-lg btn-secondary btn-block">Sign Up</a>

{{--            <a href="{{ get_route('web.socialLogin', ['provider' => 'github']) }}">Github</a>--}}
{{--            <a href="{{ get_route('web.socialLogin', ['provider' => 'facebook']) }}">Facebook</a>--}}
{{--            <a href="{{ get_route('web.socialLogin', ['provider' => 'google']) }}">Google</a>--}}
        </form>
    @endif
@endsection

@section('footer')
    <footer class="text-center">
        <p class="mt-5 mb-3 text-muted">&copy; 2022-2023 - weblabs.app</p>
    </footer>
@endsection

@include('layouts.login.login-scripts')
