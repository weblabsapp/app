@extends('lesson')

@section('is-courses-nav', 'active')

@section('lessonName')
{{ $lesson->title }}
@endsection

@section('breadcrumb')
    <!-- Breadcrumb -->
    {{ Breadcrumbs::render('lesson', $lesson) }}
    <!-- /Breadcrumb -->
@endsection

@section('lesson_content')
<div class="row mr-0 ml-0">
    @include('partials.lesson-editor', ['course' => $courseTag])
    <div class="col-md-6 pr-0">
        @include('layouts.lesson.lesson-info', ['courseTag' => $courseTag, 'lesson' => $lesson])
    </div>
</div>
@endsection

@include('layouts.lesson.lesson-scripts')