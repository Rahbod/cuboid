<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>Cuboid</title>

    <link type="text/css" rel="stylesheet" href="{{asset('/assets/site/css/bootstrap.min.css')}}">
    <!--<link rel="icon" href="/assets/site/media/images/public/fav_icon.png">-->

    <link type="text/css" rel="stylesheet" href="{{asset('/assets/site/fonts/fontawesome-5-pro/css/all.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('/assets/site/css/hacen-maghreb.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('/assets/site/css/open-sans.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/site/js/vendors/toastr/toastr.min.css')}}">

    <link type="text/css" rel="stylesheet" href="{{asset('/assets/site/css/global.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('/assets/site/css/responsive.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('/assets/site/css/sidebar.css')}}">
    <link type="text/css" rel="stylesheet"
          href="{{asset('/assets/site/js/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link type="text/css" rel="stylesheet"
          href="{{asset('/assets/site/js/vendors/owl-carousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen"
          href="{{asset('/assets/site/js/vendors/plyr-master/dist/plyr.css')}}">

    @stack('styles')

</head>
<body>
@include('main_site.frames.header')
@include('main_site.frames.sidebar_menu')

{{--@yield('header')--}}
<main>
    @yield('main')
</main>


@include('main_site.frames.footer')


<div class="overlay"></div>
<script type="text/javascript" src="{{asset('/assets/site/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/site/js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/site/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/site/js/global.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/site/js/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/site/js/vendors/toastr/toastr.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/site/js/vendors/plyr-master/dist/plyr.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/site/js/vendors/html5lightbox/html5lightbox.js')}}"></script>

@stack('scripts')
</body>
</html>