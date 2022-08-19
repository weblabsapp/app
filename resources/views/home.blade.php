@extends('layouts.home.layout')

@section('is-home-nav', 'active')

@section('content')
    <div class="row text-center m-0 mt-1 px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7">
                    <video class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('videos/intro.mp4') }}" controls controlsList="nodownload noplaybackrate"></video>
                </div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Welcome to Web Labs!</h1>
                    <p>Here, you can learn to write code interactively without any need to install any software on your local machine.</p>
                    <p>You can enroll in any course you might be interested in, then you apply what you have learnt instantly on a special environment, made just for you.</p>
                    <a class="btn btn-primary" href="#courses">Enroll now!</a>
                </div>
            </div>
    </div>
    <div class="row text-center m-0 mt-4 px-4 px-lg-5">
        <div class="col-md-12">
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-2 py-2 text-center">
                <div class="card-body">
                    <p class="text-white m-0">
                        We provide courses in different programming languages, like PHP, Python, JS and more (soon). By enrolling in any course, you are accepting our <a class="text-white " href="{{ get_route('web.tosPage') }}"><u>terms and conditions</u></a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Row-->
    <div id="courses" class="row text-center m-0 mt-4 px-4 px-lg-5">
        @foreach($courses as $course)
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">
                        <img src="{{ asset($course->logo) }}" width="64" alt="{{ $course->tag }} logo">
                    </h2>
                    <p class="card-text">
                        {!! $course->description !!}
                    </p>
                </div>
                <div class="card-footer">
                    @if($course->is_active)
                        <a class="btn btn-primary btn-sm" href="{{ get_route('web.enrollPage', ['courseTag' => $course->tag], true, false, true) }}">Enroll in {{ $course->title }}</a>
                        <a class="btn btn-primary btn-sm" href="{{ get_route('web.exploreCourse', ['courseTag' => $course->tag], true, false, true) }}">Topics</a>
                    @else
                        <a class="btn btn-primary btn-sm disabled" href="javascript:;">Soon</a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection

@section('footer')
    <footer class="text-center">
        <p class="mt-5 mb-3 text-muted">&copy; 2022-2023 - weblabs.app</p>
    </footer>
@endsection
