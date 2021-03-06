@extends('main_site.layouts.master')

@section('header')
    @include('main_site.frames.header')
@endsection

@section('main')
    <section class="mainSlider">
        <div class="owl-carousel position-relative flex-co" id="mainSlider">
            @if(isset($slider_group))
                @if(isset($slider_group->sliders) and count($slider_group->sliders) > 0)
                    @foreach($slider_group->sliders as $slider)
                        <div class="mainSlider--item">
                            <img src="{{asset($slider['image'])}}" alt="{{$slider['title']}}">
                            <div class="container position-relative d-flex flex-column align-items-end">
                                <div class="leftBox">
                                    <div class="d-flex">
                                        <a href="{{url($slider['link'])}}" title="{{$slider['title']}}">
                                            <span class="orangeRibbon"></span>
                                            <p>{!! $slider['text']!!}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                @endif
            @endif
            {{--<img class="topTriangle" src="{{asset('assets/site/media/images/about-us/about-us-traingle-2.png')}}" alt="">--}}
        </div>
    </section>

    <section class="aboutUs">
        {{--        <img class="aboutUs--bgLogo" src="{{asset('/assets/site/media/images/about-us/about-us-logo-3.png')}}" alt="">--}}
        <div class="container my-auto">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="content">
                        <h2 class="content--header sectionTitle">
                            حول الكيوبويد
                        </h2>

                        <p class="content--text">
                            {{$about_us}}

                        </p>

                        <div class="text-center text-md-left">
                            <a title=" لماذا كيوبويد" href="{{url('about-us')}}" class="btn btn-outline-light">
                                لماذا كيوبويد
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6"></div>
            </div>
        </div>
    </section>

    @include('main_site.sections.completed_projects')

    <section class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="content--header sectionTitle">المنتجات</h2>

                    <p class="content--text">
                        المنتجات بما يتوافق مع طول فترة ونوع نظام الصك ، ينطبق سقف الحش بما يتوافق مع طول فترة ونوع نظام
                        الصك ، ينطبق سقف الحش
                    </p>
                </div>
                <div class="col-md-6 my-md-auto d-none">
                    <ul class="nav nav-pills" id="pills-tab2" role="tablist" style="justify-content: flex-end;">
                        <li class="nav-item">
                            <a class="nav-link active"
                               id="pills-path-tab" data-toggle="pill" href="#pills-path" role="tab"
                               aria-controls="pills-path" aria-selected="true">طريقه التنفيذ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               id="pills-connections-tab" data-toggle="pill" href="#pills-connections" role="tab"
                               aria-controls="pills-connections" aria-selected="false">المواصفات الفنيه الانشائيه</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent2">
                <div class="tab-pane fade show active" id="pills-path" role="tabpanel"
                     aria-labelledby="pills-path-tab">

                    <div class="card d-none d-xl-inline-block">
                        <div class="d-none orangeTitle bg-orange">
                            <span class="d-block">نوع القالب</span>
                            <span>كيوبويد</span>
                        </div>

                        <div class="d-none bg-grey-c greyTitle">
                            <span>سبان(m)</span>
                        </div>

                        <div class="card-body">
                            <ul>
                                <li>
                                    <span>سمك السقف (cm)</span>

                                </li>
                                <li></li>
                                <li>
                                    <span class="d-block shortLineHeight">سمك يعادل</span>
                                    <span>الخرسانة (cm)</span>

                                </li>
                                <li></li>
                                <li>

                                    <span>سمك السقف (cm)</span>

                                </li>
                                <li></li>
                                <li>
                                    <span class="d-block shortLineHeight">سمك يعادل</span>
                                    <span>الخرسانة (cm)</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="card">
                        <div class="orangeTitle bg-orange d-flex justify-content-between  justify-content-lg-end ">
                            <span class="d-lg-none">نوع القالب</span>

                            <span>CU400</span>

                            <div class="d-none d-xl-flex orangeRelativeTitles orangeTitle bg-orange justify-content-between  justify-content-lg-end flex-column">
                                <span class="d-block">نوع القالب</span>
                                <span>كيوبويد</span>
                            </div>


                        </div>

                        <div class="card-title bg-grey-c greyTitle d-flex justify-content-lg-between position-relative btrr bbrr">
                            <div style="color: #6f6f6f;" class="d-none d-xl-block greyRelativeTitles greyTitle">
                                <span>سبان(m)</span>
                            </div>
                            <span class="d-lg-none w-50">سبان(m)</span>
                            <span class="w-25 text-left w-lg-50 text-lg-right">12</span>
                            <span class="w-25 text-left w-lg-50 ">16</span>
                        </div>

                        <img class="card-img-top"
                             src="{{asset('/assets/site/media/images/products/products-item-bg.png')}}"
                             alt="Card image cap">

                        <div class="card-body">
                            <ul>
                                <li class="products--firstRow ">
                                    <div class="d-flex justify-content-lg-between btrr bbrr">
                                        <span class="d-lg-none w-50">سمك السقف (cm)</span>
                                        <span class="w-25 text-left w-lg-50 text-lg-right">46</span>
                                        <span class="w-25 text-left w-lg-50 ">47</span>
                                    </div>
                                </li>
                                <li></li>
                                <li class="products-thirdRow ">
                                    <div class="d-flex justify-content-lg-between btrr bbrr">
                                        <span class="d-lg-none w-50">سمك يعادل <br>الخرسانة (cm)</span>
                                        <span class="w-25 text-left w-lg-50 text-lg-right">18.9</span>
                                        <span class="w-25 text-left w-lg-50 ">19.9</span>
                                    </div>
                                </li>
                                <li></li>
                                <li class="products--fifthRow ">
                                    <div class="d-flex justify-content-lg-between btrr bbrr">
                                        <span class="d-lg-none w-50">سمك السقف (cm)</span>
                                        <span class="w-25 text-left w-lg-50 text-lg-right">48</span>
                                        <span class="w-25 text-left w-lg-50 ">48</span>
                                    </div>
                                </li>
                                <li></li>
                                <li class="products--seventhRow ">
                                    <div class="d-flex justify-content-lg-between btrr bbrr">
                                        <span class="d-lg-none  w-50">سمك يعادل <br> الخرسانة (cm)</span>
                                        <span class="w-25 text-left w-lg-50 text-lg-right">20.9</span>
                                        <span class="w-25 text-left w-lg-50 ">20.9</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="orangeTitle bg-orange d-flex justify-content-between  justify-content-lg-end">
                            <span class="d-lg-none">نوع القالب</span>

                            <span>CU300</span>
                        </div>
                        <div class="card-title bg-grey-c greyTitle d-flex justify-content-lg-between">
                            <span class="d-lg-none w-50">سبان(m)</span>

                            <span class="w-25 text-left w-lg-50 text-lg-right">10</span>
                            <span class="w-25 text-left w-lg-50 ">12</span>
                        </div>

                        <img class="card-img-top"
                             src="{{asset('/assets/site/media/images/products/products-item-bg.png')}}"
                             alt="Card image cap">

                        <div class="card-body">
                            <ul>
                                <li class="products--firstRow">
                                    <div class="d-flex justify-content-lg-between">
                                        <span class="d-lg-none w-50">سمك السقف (cm)</span>

                                        <span class="w-25 text-left w-lg-50 text-lg-right">35</span>
                                        <span class="w-25 text-left w-lg-50 ">36</span>
                                    </div>
                                </li>
                                <li></li>
                                <li class="products-thirdRow">
                                    <div class="d-flex justify-content-lg-between">
                                        <span class="d-lg-none w-50">سمك يعادل <br>الخرسانة (cm)</span>

                                        <span class="w-25 text-left w-lg-50 text-lg-right">15.5</span>
                                        <span class="w-25 text-left w-lg-50 ">16.5</span>
                                    </div>
                                </li>
                                <li></li>
                                <li class="products--fifthRow">
                                    <div class="d-flex justify-content-lg-between">
                                        <span class="d-lg-none w-50 w-lg-50 text-lg-right">سمك السقف (cm)</span>

                                        <span class="w-25 text-left w-lg-50 text-lg-right">38</span>
                                        <span class="w-25 text-left w-lg-50 ">38</span>
                                    </div>
                                </li>
                                <li></li>
                                <li class="products--seventhRow">
                                    <div class="d-flex justify-content-lg-between">
                                        <span class="d-lg-none w-50 w-lg-50 text-lg-right">سمك يعادل <br> الخرسانة (cm)</span>

                                        <span class="w-25 text-left w-lg-50 text-lg-right">18.5</span>
                                        <span class="w-25 text-left w-lg-50 ">8.5</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="card">
                        <div class="orangeTitle bg-orange d-flex justify-content-between  justify-content-lg-end">
                            <span class="d-lg-none">نوع القالب</span>

                            <span>CU240</span>
                        </div>
                        <div class="card-title bg-grey-c greyTitle d-flex justify-content-lg-between">
                            <span class="d-lg-none w-50">سبان(m)</span>

                            <span class="w-25 text-left w-lg-50 text-lg-right">8</span>
                            <span class="w-25 text-left w-lg-50 ">10</span>
                        </div>

                        <img class="card-img-top"
                             src="{{asset('/assets/site/media/images/products/products-item-bg.png')}}"
                             alt="Card image cap">

                        <div class="card-body">
                            <ul>
                                <li class="products--firstRow">
                                    <div class="d-flex justify-content-between">
                                        <span class="d-lg-none  w-50">سمك السقف (cm)</span>

                                        <span class="w-25 text-left w-lg-50 text-lg-right">29</span>
                                        <span class="w-25 text-left w-lg-50 ">30</span>
                                    </div>
                                </li>
                                <li></li>
                                <li class="products-thirdRow">
                                    <div class="d-flex justify-content-lg-between">
                                        <span class="d-lg-none  w-50">سمك يعادل <br>الخرسانة (cm)</span>

                                        <span class="w-25 text-left w-lg-50 text-lg-right">12.3</span>
                                        <span class="w-25 text-left w-lg-50 ">13.3</span>
                                    </div>
                                </li>
                                <li></li>
                                <li class="products--fifthRow">
                                    <div class="d-flex justify-content-lg-between">
                                        <span class="d-lg-none  w-50">سمك السقف (cm)</span>

                                        <span class="w-25 text-left w-lg-50 text-lg-right">29</span>
                                        <span class="w-25 text-left w-lg-50 ">31</span>
                                    </div>
                                </li>
                                <li></li>
                                <li class="products--seventhRow">
                                    <div class="d-flex justify-content-lg-between">
                                        <span class="d-lg-none w-50">سمك يعادل <br> الخرسانة (cm)</span>

                                        <span class="w-25 text-left w-lg-50 text-lg-right">12.3</span>
                                        <span class="w-25 text-left w-lg-50 ">14.3</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="card">
                        <div class="lastItem orangeTitle bg-orange d-flex justify-content-between  justify-content-lg-end">
                            <span class="d-lg-none">نوع القالب</span>
                            <span>CU180</span>
                        </div>

                        <div class="btlr bblr card-title bg-grey-c greyTitle  d-flex justify-content-lg-between">
                            <span class="d-lg-none w-50">سبان(m)</span>

                            <span class="w-25 text-left w-lg-50 text-lg-right">6</span>
                            <span class="w-25 text-left w-lg-50 ">8</span>
                        </div>

                        <img class="card-img-top"
                             src="{{asset('/assets/site/media/images/products/products-item-bg.png')}}"
                             alt="Card image cap">
                        <div class="card-body">
                            <ul>
                                <li class="products--firstRow">
                                    <div class="d-flex justify-content-lg-between btlr bblr ">
                                        <span class="d-lg-none w-50">سمك السقف (cm)</span>

                                        <span class="w-25 text-left w-lg-50 text-lg-right">23</span>
                                        <span class="w-25 text-left w-lg-50 ">24</span>
                                    </div>
                                </li>
                                <li></li>
                                <li class="products-thirdRow">
                                    <div class="d-flex justify-content-lg-between btlr bblr ">
                                        <span class="d-lg-none w-50">سمك يعادل <br>الخرسانة (cm)</span>

                                        <span class="w-25 text-left w-lg-50 text-lg-right">10.5</span>
                                        <span class="w-25 text-left w-lg-50 ">11.5</span>
                                    </div>
                                </li>
                                <li></li>
                                <li class="products--fifthRow">
                                    <div class="d-flex justify-content-lg-between btlr bblr ">
                                        <span class="d-lg-none w-50">سمك السقف (cm)</span>

                                        <span class="w-25 text-left w-lg-50 text-lg-right">23</span>
                                        <span class="w-25 text-left w-lg-50 ">25</span>
                                    </div>
                                </li>
                                <li></li>
                                <li class="products--seventhRow">
                                    <div class="d-flex justify-content-lg-between btlr bblr ">
                                        <span class="d-lg-none w-50">سمك يعادل <br> الخرسانة (cm)</span>

                                        <span class="w-25 text-left w-lg-50 text-lg-right">10.5</span>
                                        <span class="w-25 text-left w-lg-50 ">12.5</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('main_site.sections.benefits')

    <section class="downloads">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <h2 class="downloads__title sectionTitle">
                            التحميل
                        </h2>
                        <p class="downloads__descriptions sectionDescription">
                            يشمل البروشور و كتيبات شركة كيوبويد
                        </p>
                    </div>
                </div>
                <div class="col-12"></div>
                <div class="col-12 col-md-4">
                    <div class="">
                        <p class="lists__title">
                            يمكنك تنزيل الملفات التالية
                        </p>
                        <div class="downloads--lists">
                            <div class="container-fluid pr-md-0">
                                <div class="row">
                                    <div class="col-6">
                                        <a target="_blank" href="{{asset(config('system.downloads.list-of-projects'))}}"
                                           class="d-flex flex-column p-3 align-items-center downloads--lists__item">
                                            <img class=""
                                                 src="{{asset('/assets/site/media/images/downloads/icon-1.png')}}"
                                                 alt="">
                                            <span>قائمة كاملة من المشاريع</span></a>
                                    </div>
                                    <div class="col-6">
                                        <a target="_blank" href="{{asset(config('system.downloads.cuboid-catalogue'))}}"
                                           class="d-flex flex-column align-items-center downloads--lists__item p-3">
                                            <img class=""
                                                 src="{{asset('/assets/site/media/images/downloads/icon-2.png')}}"
                                                 alt="">
                                            <span>كتالوج الشركة</span>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a target="_blank" href="{{asset(config('system.downloads.cuboid-brochure'))}}"

                                           class="d-flex flex-column align-items-center downloads--lists__item p-3">
                                            <img class=""
                                                 src="{{asset('/assets/site/media/images/downloads/icon-3.png')}}"
                                                 alt="">
                                            <span>
                                                كتيب المنتج
                                    </span>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a target="_blank"
                                           href="{{asset(config('system.downloads.cuboid-introduction'))}}"
                                           class="d-flex flex-column align-items-center downloads--lists__item p-3">
                                            <img class=""
                                                 src="{{asset('/assets/site/media/images/downloads/icon-4.png')}}"
                                                 alt="">
                                            <span>
                                   الأفلام التنفيذية
                                    </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 px-0 px-md-3">
                    <video class="player" id="player" controls
                           poster="{{asset('/assets/site/media/images/downloads/player-poster.jpg')}}">
                        <source src="{{asset('/assets/site/media/videos/downloads/intro-480p__47071.mp4')}}"
                                type="video/mp4">
                        <a href="{{asset('/assets/site/media/videos/downloads/intro-480p__47071.mp4')}}" download>Download</a>
                    </video>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="sectionTitle">الأخبار</h2>
                    <p class="sectionDescription">
                        تعرف على الأخبار والإعلانات والعقود الجديدة
                    </p>
                </div>

                <div class="col-12">
                    <div id="newsCarousel" class="owl-carousel">
                        @foreach($news as $n)
                            <div class="cardOuter">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset($n->logo)}}"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$n->title}}</h4>
                                        <p class="card-text">{{$n->summary}}
                                        </p>
                                    </div>
                                    <a title="{{$n->title}}" href="{{url('news/show/'.$n->id)}}"
                                       class="btn btn-outline-light">
                                        اكثر من
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('main_site.sections.faqs')
@endsection

@push('scripts')
    <script>
        @isset($categories)
        @foreach($categories as $category)
        $('#completedProjects--{{$category->id}}').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 9000,
            autoplayHoverPause: true,
            rtl: true,
            dots: true,
            items: 4,
            margin: 20,
            responsive: {
                // breakpoint from 0 up
                0: {
                    items: 1
                },
                // breakpoint from 576 up
                576: {
                    items: 3
                },
                // breakpoint from 768 up
                768: {
                    items: 4,
                },
                // breakpoint from 992 up
                992: {
                    nav: true,
                },
            }
        });
        @endforeach
        @endisset


        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();

            $('#completedProjects--all-projects').owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 9000,
                autoplayHoverPause: true,
                rtl: true,
                dots: true,

                items: 4,
                margin: 9,
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: 1
                    },
                    // breakpoint from 400 up

                    576: {
                        items: 3
                    },
                    // breakpoint from 768 up
                    768: {
                        items: 4,
                    },
                    // breakpoint from 992 up
                    992: {
                        nav: true,
                    },
                }
            });
            $('#newsCarousel').owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 9000,
                autoplayHoverPause: true,
                rtl: true,
                dots: true,
                items: 4,
                margin: 5,
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: 1
                    },
                    // breakpoint from 400 up

                    576: {
                        items: 3
                    },
                    // breakpoint from 768 up
                    768: {
                        items: 4,
                    },
                    // breakpoint from 992 up
                    992: {
                        nav: true,
                    },
                }
            });
            $('#productsCarousel').owlCarousel({
                rtl: true,
                margin: 9,
                items: 2
            });
            $('#faqCarousel').owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 9000,
                autoplayHoverPause: true,
                rtl: true,
                items: 1,
                dots: true,
            });
            $('#mainSlider').owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 9000,
//                autoplayHoverPause:true,
                rtl: true,
                items: 1,
                dots: false,
                autoHeight: true,
                responsive: {
                    992: {
                        nav: true,
                    },
                }
            });

            var player;
            var controls =
                [
                    'play-large', // The large play button in the center
//                    'restart', // Restart playback
//                    'rewind', // Rewind by the seek time (default 10 seconds)
                'play', // Play/pause playback
//                    'fast-forward', // Fast forward by the seek time (default 10 seconds)
                'progress', // The progress bar and scrubber for playback and buffering
//                    'current-time', // The current time of playback
                'duration', // The full duration of the media
//                    'mute', // Toggle mute
                'volume', // Volume control
//                    'captions', // Toggle captions
                'settings', // Settings menu
//                    'pip', // Picture-in-picture (currently Safari only)
//                    'airplay', // Airplay (currently Safari only)
                'download', // Show a download button with a link to either the current source or a custom URL you specify in your options
                'fullscreen', // Toggle fullscreen

            ];

            player = new Plyr('#player', {
                controls,
//                loadSprite: false,
                {{--iconUrl: "{{asset('/assets/site/js/vendors/plyr-master/src/sprite/play-icon.svg')}}"--}}
            });
            var rowClass = '';

            var rowClass = '';
            var activeRow = $('#pills-path .card-title');
            $('.products .card-body ul li:nth-child(odd)').on('mouseenter', function (event) {
                rowClass = $(event.target).parents('li').attr('class');
//                $('#pills-path .card-body ul li div').removeClass('bg-grey-c greyTitle');
                activeRow.removeClass('bg-grey-c');
                $("." + rowClass + " > div").addClass('bg-grey-c');
            }).on('mouseleave', function () {
                $("." + rowClass + " > div").removeClass('bg-grey-c');
            });

            $("#pills-path .card-title, #pills-path .card-title span").on('mouseenter', function (event) {
                activeRow.addClass('bg-grey-c');
                $("." + rowClass + " > div").removeClass('bg-grey-c');
            });

        });

    </script>
@endpush