@extends('layouts.lesson.layout')

@section('content')
    <div class="main-body">
        @yield('breadcrumb')
        @yield('lesson_content')
    </div>

@endsection

@section('footer')
    <footer class="text-center">
        <p class="mt-5 mb-3 text-muted">&copy; 2022-2023 - weblabs.app</p>
    </footer>
@endsection