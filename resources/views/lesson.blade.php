@extends('layouts.lesson.layout')

@section('is-courses-nav', 'active')

@section('content')
<div class="main-body">
    @section('lessonName')
        {{ $lesson->title }}
    @endsection

    @section('breadcrumb')
        <!-- Breadcrumb -->
        {{ Breadcrumbs::render('lesson', $lesson) }}
        <!-- /Breadcrumb -->
    @endsection

    <div class="row mr-0 ml-0">
        @include('partials.lesson-editor', ['courseTag' => $courseTag, 'courseLogo' => $courseLogo])
        <div class="col-md-6 pr-0 pl-0">
            @include('layouts.lesson.lesson-info', ['courseTag' => $courseTag, 'lesson' => $lesson])
        </div>
    </div>

    @include('layouts.lesson.lesson-scripts')
</div>
@endsection

@section('footer')
    <footer class="text-center">
        <p class="mt-5 mb-3 text-muted">&copy; 2022-2023 - weblabs.app</p>
    </footer>
@endsection