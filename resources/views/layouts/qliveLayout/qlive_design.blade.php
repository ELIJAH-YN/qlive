<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <title>Q Live</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/assets/qlive/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/qlive/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/qlive/css/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/qlive/css/plugins/owl-carousel/owl.carouselvidio.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/qlive/css/fancybox.css') }}">
    <!-- <link rel="stylesheet" href="css/animate.css"> -->
    <link rel="stylesheet" href="{{ asset('/assets/qlive/css/component.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/qlive/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/qlive/css/modecard.css') }}">
    <!-- <link rel="stylesheet" href="css/landingStyle.css"> -->
{{--    <link rel="stylesheet" href="{{ asset('/assets/css/backend_css/bootstrap.min.css') }}" />--}}
{{--    <link rel="stylesheet" href="{{ asset('/assets/css/backend_css/bootstrap-responsive.min.css') }}" />--}}

</head>
<body>

@include('layouts.qliveLayout.qlive_header')

@yield('content')

@include('layouts.qliveLayout.qlive_footer')

<!-- javascript -->
<script src="{{ asset('/assets/qlive/js/plugins/jquery/jquery-3.2.1.min.js ') }}"></script>
<script src="{{ asset('/assets/qlive/js/plugins/owl-carousel/owl.carousel.min.js ') }}"></script>
<script src="{{ asset('/assets/qlive/js/plugins/wow/wow.min.js') }}"></script>
<script src="{{ asset('/assets/qlive/js/plugins/fancybox/fancybox.min.js ') }}"></script>
<script src="{{ asset('/assets/qlive/js/custom.js ') }}"></script>

</body>

</html>
