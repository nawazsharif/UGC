<!DOCTYPE html>
<html lang="en">
<head>
    <title>Elearn</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Elearn project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font_theme/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link href="{{asset('plugins/video-js/video-js.css')}}" rel="stylesheet" type="text/css">
    @if($_SERVER['REQUEST_URI']=='/')
    <link rel="stylesheet" type="text/css" href="{{asset('css/font_theme/main_styles.css')}}">
    @endif
    @if($_SERVER['REQUEST_URI']=='/thesis-list')
    <link rel="stylesheet" type="text/css" href="{{asset('css/font_theme/courses.css')}}">
    @endif
    <link rel="stylesheet" type="text/css" href="{{asset('css/font_theme/responsive.css')}}">
</head>
<body>
<div class="super_container">
    <!-- Header -->
    <header class="header">
        @include('layouts.font_layout.top_head')
        @include('layouts.font_layout.top_nav')
    </header>
    @yield('content')
    @include('layouts.font_layout.footer')
</div>
<script src="{{asset('js/font_theme/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('css/font_theme/bootstrap4/popper.js')}}"></script>
<script src="{{asset('css/font_theme/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('plugins/video-js/video.min.js')}}"></script>
<script src="{{asset('plugins/video-js/Youtube.min.js')}}"></script>
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('js/font_theme/custom.js')}}"></script>
</body>
</html>