<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- Mirrored from lmpixels.com/demo/unique/unique-vcard/index-light.html by HTTrack Website Copier/3.x [XR&CO2014], Sat, 07 Jul 2018 14:19:43 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{!! FunctionHelpers::Settings()->title !!} </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="{!! FunctionHelpers::Settings()->title !!}" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Unique, portfolio" />
    <meta name="author" content="lmtheme" />
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('design/website/css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('design/website/css/normalize.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('design/website/css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('design/website/css/transition-animations.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('design/website/css/jquery.mCustomScrollbar.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('design/website/css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('design/website/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('design/website/css/main-red.css') }}" type="text/css">

    <!-- This styles needs for demo -->
    <link rel="stylesheet" href="{{ asset('design/website/preview/lmpixels-demo-panel.css') }}" type="text/css">
    <!-- /This styles needs for demo -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <script>
        (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-96534204-1', 'auto');
        ga('send', 'pageview');

    </script>

    <script src="{{ asset('design/website/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('design/website/js/modernizr.custom.js') }}"></script>
</head>

<body>
    <!-- Loading animation -->
    <div class="preloader">
        <div class="preloader-animation">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
    <!-- /Loading animation -->

    <div id="page" class="page">
        <!-- Header -->
        <header id="site_header" class="header mobile-menu-hide header-color-light">
            <div class="my-photo tilt-effect">
                <img src="{{ asset('uploads/settings/' . FunctionHelpers::Settings()->profile_image) }}" alt="image">
            </div>

            <div class="site-title-block">
                <h1 class="site-title">{!! FunctionHelpers::Settings()->full_name !!}</h1>
            </div>

            <!-- Navigation -->
                @include('layouts-website.navbar')
            <!-- Navigation -->
        </header>
        <!-- /Header -->

        <!-- Mobile Header -->
        <div class="mobile-header mobile-visible">
            <div class="mobile-logo-container">
                <div class="mobile-site-title">{!! FunctionHelpers::Settings()->full_name !!}</div>
            </div>

            <a class="menu-toggle mobile-visible">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <!-- /Mobile Header -->