@extends('layouts.account.unsubscribe-layout')

@section('body')
    <div class="row text-center m-0 p-5">
        <div class="col-md-12">
            <img class="mb-4" src="{{ asset('images/code_64_green_tick.png') }}" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">You have been unsubscribed!</h1>
            <small>
                <p>You will be redirected to your account page.</p>
                <p>If you are not redirected within 5 seconds, please click here: <a
                            href="{{ get_route('web.myAccountPage') }}">My Account</a></p>
            </small>
        </div>
    </div>
@endsection

@section('footer')
    <footer class="text-center">
        <p class="mt-5 mb-3 text-muted">&copy; 2022-2023 - weblabs.app</p>
    </footer>
@endsection
