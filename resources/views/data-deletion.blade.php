@extends('layouts.data-deletion.layout')

@section('body')
    <div class="row text-center overflow-hidden">
        <div class=" col-md-12 m-auto">
            <img class="mb-4" src="{{ asset('images/code_64.png') }}" alt="" width="72" height="72">
        </div>
        <div class="col-md-12 pr-5 pl-5">
            <div class="card">
                <div class="card-header">
                    Data Deletion Policy
                </div>
                <div class="card-body">
                    <div class="post-content entry-content text-left mt-3">
                        <p>Weblabs does not store your personal data; it is used only for login. According to the Facebook&nbsp;Platform rules, we have to provide&nbsp;<strong>User Data Deletion Callback URL</strong>&nbsp;or&nbsp;<strong>Data Deletion Instructions URL</strong>. If you want to delete your facebook account connection with WebLabs, follow these instructions: </p>
                        <ol>
                            <li>Go to Your Facebook Account’s Setting &amp; Privacy. Click ” Setting “.</li>
                            <li>Then, go to ” Apps and Websites” and you will see all of your Apps activities.</li>
                            <li>Select the option box for Web Labs.</li>
                            <li>Click ” Remove” button.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <a class="btn btn-secondary" href="{{ get_route('web.homePage') }}">Go Home</a>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <footer class="text-center">
        <p class="mt-5 mb-3 text-muted">&copy; 2022-2023 - weblabs.app</p>
    </footer>
@endsection