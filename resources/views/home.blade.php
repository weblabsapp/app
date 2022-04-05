<!DOCTYPE html>
<html class="cspio">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Web Labs</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <meta property="og:url" content=""/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Weblabs Coming Soon"/>
    <meta property="og:description" content=""/>

    <!-- Font Awesome CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
            integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Bootstrap and default Style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://static.comingsoonpage.com/cspio-assets/1.0.0/style.css">

    <!-- Google Fonts -->
    <link class="gf-headline" href='https://fonts.googleapis.com/css?family=Pacifico:400&subset=' rel='stylesheet'
          type='text/css'>

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">

    <!-- Calculated Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Modernizr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!-- Google Analytics Code Goes Here-->
</head>
<body>
<div id="cspio-page">
    <div id="cspio-content">

        <img id="cspio-logo" src="{{ asset('images/logo.png') }}">

        <h1 id="cspio-headline">Coming Soon</h1>

        <div id="cspio-description">Get ready! Something really cool is coming!</div>

{{--        <form id="cspio-form" action="" method="post">--}}
{{--            {{ csrf_field() }}--}}
{{--            <div id="cspio-field-wrapper">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-12 seperate">--}}
{{--                        <div class="input-group">--}}
{{--                            <input id="cspio-email" name="EMAIL" class="form-control input-lg form-el" type="email" placeholder="Email" required/>--}}
{{--                            <span class="input-group-btn">--}}
{{--                                <button id="cspio-subscribe-btn" type="submit" class="btn btn-lg btn-secondary form-el noglow">Notify Me</button>--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}

{{--        <span id="cspio-privacy-policy-txt">We promise to never spam you.</span>--}}

        <div id="cspio-socialprofiles">
            <a href="https://fb.com/weblabsapp" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="https://www.linkedin.com/company/84129479" target="_blank"><i class="fab fa-linkedin-in fa-2x"></i></a>
            <a href="mailto:support@weblabs.app" target="_blank"><i class="fa fa-envelope fa-2x"></i></a>
        </div>

    </div><!-- end of #cspio-content -->
</div>


<script>
    // Animate Delay
    setTimeout(function () {
        jQuery("#cspio-content").show().addClass('animated fadeIn');
    }, 250);

    // Reseize
    function resize() {
        $('head').append("<style id='form-style' type='text/css'></style>");
        $('#form-style').html('.cspio .input-group-btn, .cspio .input-group{display:block;width:100%;}.cspio #cspio-subscribe-btn{margin-left:0;width:100%;display:block;}.cspio .input-group .form-control:first-child, .cspio .input-group-addon:first-child, .cspio .input-group-btn:first-child>.btn, .cspio .input-group-btn:first-child>.dropdown-toggle, .cspio .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {border-bottom-right-radius: 4px;border-top-right-radius: 4px;}.cspio .input-group .form-control:last-child, .cspio .input-group-addon:last-child, .cspio .input-group-btn:last-child>.btn, .cspio .input-group-btn:last-child>.dropdown-toggle, .cspio .input-group-btn:first-child>.btn:not(:first-child) {border-bottom-left-radius: 4px;border-top-left-radius: 4px;}');
    }

    $('#cspio-content').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
        function () {
            var width = $('#cspio-field-wrapper').width();
            if (width < 480 && width != 0) {
                resize();
            }
        }
    );
</script>

</body>
</html>
