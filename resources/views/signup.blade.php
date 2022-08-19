@extends('layouts.signup.layout')

@section('body')
    <form id="signup-form" class="auth-form text-center" action="{{ get_route('api.signup') }}">
        @csrf
        <img class="mb-4" src="{{ asset('images/code_64.png') }}" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Create new account</h1>

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
            <div id="recaptcha" class="mb-2" style="text-align: center;"></div>
            {!!  GoogleReCaptchaV2::render('recaptcha') !!}
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sing Up</button>
        <button class="btn btn-lg btn-secondary btn-block" type="button"
                onclick="location.href='{{ get_route('web.loginPage') }}'">Login
        </button>
    </form>
@endsection

@section('footer')
    <footer class="text-center">
        <p class="mt-5 mb-3 text-muted">&copy; 2021-2022 - weblabs.app</p>
    </footer>
@endsection

@include('layouts.signup.signup-scripts')
