@extends('layouts.login.layout')

@section('body')
    @if($isLoggedIn)
        <div class="row text-center m-0 p-5">
            <div class="col-md-12">
                <img class="mb-4" src="{{ asset('images/code_64_account.png') }}" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">You are already logged in!</h1>
                <p><small>To go to your account, please click here: <a href="{{ get_route('web.accountPage') }}">My
                            Account</a></small></p>
                <p><small>If you are about to log out, please click here: <a href="{{ get_route('web.logoutPage') }}">Logout</a></small>
                </p>
            </div>
        </div>
    @else
        <div id="main-page" class="row w-100 h-100 m-0">
            <div class="col-md-6 col-sm-6 m-auto">
                <div id="login-info" class="text-center">
                    <div class="d-block d-sm-none mb-5">
                        <img class="mb-4" src="{{ asset('images/code_64.png') }}" alt="" width="72" height="72">
                        <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
                    </div>
                    <div class="mb-2 pb-3 border-bottom">
                        <div id="quotes">
                            @quote
                        </div>
                    </div>
                    <div class="form-group mt-3 d-none d-sm-block">
                        <p>
                            <a class="btn btn-secondary btn-md" href="{{ get_route('web.signupPage') }}">Create Account</a>
                            &nbsp;
                            <a class="btn btn-secondary btn-md" href="{{ get_route('web.homePage') }}">Go Home</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 text-center m-auto">
                <form id="login-form" class="auth-form text-center" action="{{ get_route('api.login') }}" method="post">
                    <div class="d-none d-sm-block">
                        <img class="mb-4" src="{{ asset('images/code_64.png') }}" alt="" width="72" height="72">
                        <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
                    </div>
                    @csrf
                    <div class="group">
                        <div class="form-group">
                            <label for="inputEmail" class="sr-only">Email address</label>
                            <input type="email" id="inputEmail" name="email" class="form-control"
                                   placeholder="Email address" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="sr-only">Password</label>
                            <div class="input-group append-inside-input append-after">
                                <input type="password" id="inputPassword" name="password" class="form-control reveal"
                                       placeholder="Password">
                                <div class="input-group-append">
                                    <button class="btn reveal-password" type="button">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </div>
                            </div>
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
                        <div id="recaptcha" class="mb-2 text-center hidden"></div>
                        {!!  GoogleReCaptchaV2::render('recaptcha') !!}
                    </div>

                    <button class="btn btn-md btn-primary btn-block" type="submit">Sign in</button>
                    <div class="mt-3">
                        <a class="btn btn-outline-secondary" href="{{ get_route('web.socialLogin', ['provider' => 'github']) }}">
                            <i class="fa-brands fa-github"></i>
                        </a>
                        <a class="btn btn-outline-secondary" href="{{ get_route('web.socialLogin', ['provider' => 'facebook']) }}">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a class="btn btn-outline-secondary" href="{{ get_route('web.socialLogin', ['provider' => 'google']) }}">
                            <i class="fa-brands fa-google"></i>
                        </a>
                    </div>
                </form>

                <div class="form-group mt-4 pt-5 border-top d-block d-sm-none">
                    <p>
                        <a class="btn btn-secondary btn-md" href="{{ get_route('web.signupPage') }}">Create Account</a>
                        &nbsp;
                        <a class="btn btn-secondary btn-md" href="{{ get_route('web.homePage') }}">Go Home</a>
                    </p>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('footer')
    <footer class="text-center">
        <p class="mt-5 mb-3 text-muted">&copy; 2022-2023 - weblabs.app</p>
    </footer>
@endsection

@include('layouts.login.login-scripts')
