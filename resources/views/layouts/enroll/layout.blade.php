@extends('layouts.layout-navbar')

@section('head')
    <!-- CSS -->

    <!-- Calculated Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}"/>

    <!-- Wizard -->
    <link href="{{ asset('css/smart_wizard_all.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Home Styles -->
    <link rel="stylesheet" href="{{ asset('css/enroll.page.min.css') }}"/>

    <!-- Toasts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toast.min.css') }}"/>

    <style>
        body {
            padding: 0;
        }
    </style>


    <!-- JS -->
    <!-- Time Ago -->
    <script type="text/javascript" src="{{ asset('js/jquery.timeago.min.js') }}" defer></script>

    <!-- Toaster -->
    <script type="text/javascript" src="{{ asset('js/bootstrap-toaster.min.js') }}" defer></script>

    <!-- Validate.js -->
{{--    <script type="text/javascript" src="{{ asset('js/validate.min.js') }}" defer></script>--}}

    <!-- Wizard -->
    <script src="{{ asset('js/jquery.smartWizard.min.js') }}" type="text/javascript"></script>
@endsection

@section('page_title')
Start learning {{ $course->title }}
@endsection
