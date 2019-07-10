<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>Cuboid</title>

    <link type="text/css" rel="stylesheet" href="{{asset('/assets/site/css/bootstrap.min.css')}}">
    <!--<link rel="icon" href="/assets/site/media/images/public/fav_icon.png">-->

    <link type="text/css" rel="stylesheet" href="{{asset('/assets/site/fonts/fontawesome-5-pro/css/all.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('/assets/site/css/Myriad.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('/assets/site/css/global.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('/assets/site/css/sidebar.css')}}">
    <link type="text/css" rel="stylesheet"
          href="{{asset('/assets/site/js/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link type="text/css" rel="stylesheet"
          href="{{asset('/assets/site/js/vendors/owl-carousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen"
          href="{{asset('/assets/site/js/vendors/plyr-master/dist/plyr.css')}}">
    <script type="text/javascript" src="{{asset('/assets/js/vendors/html5lightbox/html5lightbox.js')}}"></script>

    @stack('styles')

</head>
<body>
@yield('header')
<main>
    @yield('main')
</main>


@include('main_site.frames.footer')


<div class="overlay"></div>
<script type="text/javascript" src="{{asset('/assets/site/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/site/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/site/js/global.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/site/js/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/site/js/vendors/plyr-master/dist/plyr.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#newsCarousel,#productsCarousel,#completedProjects--commercialCarousel,#completedProjects--hotelCarousel').owlCarousel({
            rtl: true,
            nav: true,
            items: 4,
//            loop: true,
            margin: 26,
            dots: true,
//            responsive: {
//                // breakpoint from 0 up
//                0: {
//                    items: 1
//                },
//                // breakpoint from 768 up
//                768: {
//                    items: 2,
//                }
//            }
        });

        $('#faqCarousel').owlCarousel({
            rtl: true,
//            nav: true,
            items: 1,
//            loop: true,
//            margin: 26,
            dots: true,
//            responsive: {
//                // breakpoint from 0 up
//                0: {
//                    items: 1
//                },
//                // breakpoint from 768 up
//                768: {
//                    items: 2,
//                }
//            }
        });

        var player;

        var controls =
            [
                'play-large', // The large play button in the center
                'restart', // Restart playback
                'rewind', // Rewind by the seek time (default 10 seconds)
                'play', // Play/pause playback
                'fast-forward', // Fast forward by the seek time (default 10 seconds)
                'progress', // The progress bar and scrubber for playback and buffering
                'current-time', // The current time of playback
                'duration', // The full duration of the media
                'mute', // Toggle mute
                'volume', // Volume control
                'captions', // Toggle captions
                'settings', // Settings menu
                'pip', // Picture-in-picture (currently Safari only)
                'airplay', // Airplay (currently Safari only)
                'download', // Show a download button with a link to either the current source or a custom URL you specify in your options
                'fullscreen' // Toggle fullscreen
            ];

        player = new Plyr('#player', {controls});
    });
</script>

@stack('scripts')
</body>
</html>