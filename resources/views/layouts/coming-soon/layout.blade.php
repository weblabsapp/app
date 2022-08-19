{{--@extends('layouts.main')--}}

{{--@section('head')--}}
{{--    <link rel="stylesheet" href="{{ asset('css/coming-soon.min.css') }}">--}}

    <!-- CSS -->
    <!-- Google Fonts -->
    <link class="gf-headline" href='https://fonts.googleapis.com/css?family=Pacifico:400&subset=' rel='stylesheet'
          type='text/css'>

    <!-- Animate CSS -->
{{--    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}"/>--}}

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
{{--    <script type="text/javascript" src="{{ asset('js/validate.min.js') }}" defer></script>--}}
@endsection

@section('page_title')
Coming Soon
@endsection
