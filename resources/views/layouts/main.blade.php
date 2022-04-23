<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Web Labs</title>

    <meta name="description" content="Weblabs - Interactive development learning">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <meta property="og:url" content=""/>
    <meta property="og:type" content="text/html"/>
    <meta property="og:title" content="Weblabs Coming Soon"/>
    <meta property="og:description" content="Weblabs - Interactive development learning"/>
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
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    @yield('head')
</head>
<body>
@yield('body')
@yield('footer')

<script type="text/javascript" src="{{ asset('js/bundle.min.js') }}"></script>

@include('partials.get-translations')
@stack('scripts')
</body>
</html>
