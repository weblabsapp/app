@extends('layouts.main')

@section('head')
    <!-- CSS -->

    <!-- Calculated Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}"/>

    <!-- Toasts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toast.min.css') }}"/>


    <!-- JS -->
    <!-- Time Ago -->
    <script type="text/javascript" src="{{ asset('js/jquery.timeago.min.js') }}" defer></script>

    <!-- Toaster -->
    <script type="text/javascript" src="{{ asset('js/bootstrap-toaster.min.js') }}" defer></script>

    <!-- Validate.js -->
    <script type="text/javascript" src="{{ asset('js/validate.min.js') }}" defer></script>

    <!-- Google Analytics Code Goes Here-->
@endsection

@section('page_title')
    Privacy Policy
@endsection
