@extends('layouts.layout-navbar')

@section('head')
    <!-- CSS -->

    <!-- Calculated Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}"/>

    <!-- Toasts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toast.min.css') }}"/>

    <!-- PrismJs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.28.0/themes/prism-coy.min.css" integrity="sha512-LOT5F67SMZVdXMrvQe4S1ZHu5l6xk3CST2qqno9kY329OsJBBpybnq+fM9qG4ZSaNzPOjoGzHAeBamSSJyyuZg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.28.0/plugins/toolbar/prism-toolbar.min.css" integrity="sha512-Dqf5696xtofgH089BgZJo2lSWTvev4GFo+gA2o4GullFY65rzQVQLQVlzLvYwTo0Bb2Gpb6IqwxYWtoMonfdhQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.28.0/plugins/line-numbers/prism-line-numbers.min.css" integrity="sha512-cbQXwDFK7lj2Fqfkuxbo5iD1dSbLlJGXGpfTDqbggqjHJeyzx88I3rfwjS38WJag/ihH7lzuGlGHpDBymLirZQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Lesson Page Style -->
    <link rel="stylesheet" href="{{ asset('css/lesson.min.css') }}"/>

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

    <!-- Prism -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.28.0/components/prism-core.min.js" integrity="sha512-9khQRAUBYEJDCDVP2yw3LRUQvjJ0Pjx0EShmaQjcHa6AXiOv6qHQu9lCAIR8O+/D8FtaCoJ2c0Tf9Xo7hYH01Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.28.0/plugins/autoloader/prism-autoloader.min.js" integrity="sha512-fTl/qcO1VgvKtOMApX2PdZzkziyr2stM65GYPLGuYMnuMm1z2JLJG6XVU7C/mR+E7xBUqCivykuhlzfqxXBXbg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.28.0/plugins/toolbar/prism-toolbar.min.js" integrity="sha512-st608h+ZqzliahyzEpETxzU0f7z7a9acN6AFvYmHvpFhmcFuKT8a22TT5TpKpjDa3pt3Wv7Z3SdQBCBdDPhyWA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.28.0/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js" integrity="sha512-/kVH1uXuObC0iYgxxCKY41JdWOkKOxorFVmip+YVifKsJ4Au/87EisD1wty7vxN2kAhnWh6Yc8o/dSAXj6Oz7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.28.0/plugins/autolinker/prism-autolinker.min.js" integrity="sha512-h92O152CCXt3xEUWDYTGLz58u+IOpZU8Z2MEkkBsXsRlAhckPFeEolarVn7tOhTVbjsJPpyknL0CFUrc2rlgPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.28.0/plugins/line-numbers/prism-line-numbers.min.js" integrity="sha512-BttltKXFyWnGZQcRWj6osIg7lbizJchuAMotOkdLxHxwt/Hyo+cl47bZU0QADg+Qt5DJwni3SbYGXeGMB5cBcw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- Google Analytics Code Goes Here-->
@endsection

@section('page_title')
Lesson: {{ strtoupper($courseTag) }} / @yield('lessonName')
@endsection
