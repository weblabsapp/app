@extends('layouts.lesson.layout')

@section('is-courses-nav', 'active')

@section('content')
    <div class="main-body">
        <div id="video-macro-overlay"></div>

        @section('lessonName')
            {{ $lesson->title }}
        @endsection

        @section('breadcrumb')
            <!-- Breadcrumb -->
            {{ Breadcrumbs::render('lesson', $lesson) }}
            <!-- /Breadcrumb -->
        @endsection

        <div class="row mr-0 ml-0">
            @include('lesson.lesson-editor', ['courseTag' => $courseTag, 'courseLogo' => $courseLogo])
            <div class="col-md-6 pr-0 pl-0">
                @include('lesson.lesson-right-panel', ['courseTag' => $courseTag, 'lesson' => $lesson])
            </div>
        </div>

        @include('lesson.modals', [
            'courseFileExt' => $courseFileExt,
            'courseTag' => $courseTag,
            'lesson' => $lesson,
            'lessonTag' => $lessonTag,
            'nextAndPreviousLessons' => $nextAndPreviousLessons,
            ''
        ])
        @include('lesson.lesson-scripts')
    </div>
@endsection

@section('footer')
    <footer class="text-center">
        <p class="mt-5 mb-3 text-muted">&copy; 2022-2023 - weblabs.app</p>
    </footer>
@endsection