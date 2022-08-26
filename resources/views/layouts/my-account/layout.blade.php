@extends('layouts.layout-navbar')

@section('head')
    <!-- CSS -->

    <!-- Calculated Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}"/>

    <!-- My Account Page Style -->
    <link rel="stylesheet" href="{{ asset('css/account.page.min.css') }}"/>

    <!-- Toasts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toast.min.css') }}"/>

    <!-- Validation -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/validation.min.css') }}"/>

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

    <!-- Google Analytics Code Goes Here-->
@endsection

@section('page_title')
My Account
@endsection
