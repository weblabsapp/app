@extends('layouts.layout-navbar')

@section('head')
    <!-- CSS -->

    <!-- Calculated Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}"/>

    <!-- My Account Page Style -->
    <link rel="stylesheet" href="{{ asset('css/account.page.min.css') }}"/>

    <!-- Toasts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toast.min.css') }}"/>

    <style>
        body {
            padding: 0;
        }
        .dropdown-list-image {
            position: relative;
            height: 2.5rem;
            width: 2.5rem;
        }
        .dropdown-list-image img {
            height: 2.5rem;
            width: 2.5rem;
        }
        .btn-light {
            color: #2cdd9b;
            background-color: #e5f7f0;
            border-color: #d8f7eb;
        }
    </style>


    <!-- JS -->
    <!-- Time Ago -->
    <script type="text/javascript" src="{{ asset('js/jquery.timeago.min.js') }}" defer></script>

    <!-- Toaster -->
    <script type="text/javascript" src="{{ asset('js/bootstrap-toaster.min.js') }}" defer></script>

    <!-- Validate.js -->
{{--    <script type="text/javascript" src="{{ asset('js/validate.min.js') }}" defer></script>--}}

    <!-- Google Analytics Code Goes Here-->
@endsection

@section('page_title')
Notifications
@endsection
