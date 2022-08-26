<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Web Labs - @yield('page_title')</title>

    <meta name="description" content="Weblabs - Interactive development learning">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <meta property="og:url" content=""/>
    <meta property="og:type" content="text/html"/>
    <meta property="og:title" content="Weblabs"/>
    <meta property="og:description" content="Interactive development learning"/>
    <meta property="og:image" content="{{ asset('images/code_64.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap and default Style -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- Font Awesome -->
    <script src="{{ asset('js/all.min.js') }}" defer></script>

    <!-- Modernizr -->
    <script src="{{ asset('js/modernizr.min.js') }}" defer></script>

    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>

    <!-- Bootstrap custom tooltips -->
    <script src="{{ asset('js/bootstrap-tooltip-custom-class.min.js') }}" defer></script>


    @yield('head')
</head>
<body>

@include('site-disabled')

<div class="container">
@yield('body')
</div>

@yield('footer')

<script type="text/javascript" src="{{ asset('js/scripts-bundle.min.js') }}"></script>

@include('partials.get-translations')
@include('partials.session-renew')
@includeWhen('prod' == env('APP_ENV'), 'partials.google-analytics')
@stack('scripts')
</body>
</html>
