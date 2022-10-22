@extends('layouts.signup.layout')

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
        <div class="col-md-6 border-right m-auto">
            <div id="signup-info" class="text-center">
                <img class="mb-4" src="{{ asset('images/code_64.png') }}" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Create new account</h1>
                <div class="form-group">
                    <p>By sigining up, you agree with our <a href="{{ get_route('web.tosPage') }}" target="_blank">TOS <i class="fa-solid fa-arrow-up-right-from-square"></i></a>.</p>
                    <p>You can check your <a href="{{ get_route('web.privacyPage') }}" target="_blank">privacy policy <i class="fa-solid fa-arrow-up-right-from-square"></i></a> as well.</p>
                    <div class="form-group mt-3 d-none d-sm-none d-md-block">
                        <br />
                        <a class="btn btn-secondary" href="{{ get_route('web.loginPage') }}">Login</a>
                        &nbsp;
                        <a class="btn btn-secondary" href="{{ get_route('web.homePage') }}">Go Home</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 m-auto text-center">
            <form id="signup-form" class="auth-form text-center" action="{{ get_route('api.signup') }}">
                @csrf
                <div class="group">
                    <div class="form-group">
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email address"
                               autofocus/>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <div class="input-group append-inside-input append-after">
                            <input type="password" id="inputPassword" name="password" class="form-control reveal"
                                   placeholder="Password"/>
                            <div class="input-group-append">
                                <button class="btn reveal-password" type="button">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirmInputPassword" class="sr-only">Retype Password</label>
                        <input type="password" id="confirmInputPassword" name="password_confirmation"
                               class="form-control reveal" placeholder="Retype Password"/>
                    </div>

                    <div class="form-group">
                        <label for="genderInput" class="sr-only">Gender</label>
                        <select class="form-control" name="gender">
                            <option selected>Gender</option>
                            @foreach(\App\Enums\GendersEnum::getGendersWithLabels() as $gender => $label)
                                <option value="{{ $gender }}">{{ $label }}</option>
                            @endforeach
                        </select>
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
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sing Up</button>
            </form>
            <div class="form-group mt-4 pt-5 border-top d-sm-block d-md-none">
                <a class="btn btn-secondary" href="{{ get_route('web.loginPage') }}">Login</a>
                &nbsp;
                <a class="btn btn-secondary" href="{{ get_route('web.homePage') }}">Go Home</a>
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

@include('layouts.signup.signup-scripts')
