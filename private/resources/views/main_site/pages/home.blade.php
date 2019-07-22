@extends('main_site.layouts.master')

@section('header')
    @include('main_site.frames.header')
@endsection

@section('main')
    <section class="mainSlider owl-carousel position-relative flex-co" id="mainSlider">
        <div class="mainSlider--item">

            <img src="{{asset('/assets/site/media/images/landing/landing-2.jpg')}}" alt="">
            <div class="container position-relative d-flex flex-column align-items-end">
                <div class="leftBox">
                    <div class="d-flex">
                        <a href="void:;">
                            <span class="orangeRibbon"></span>
                            <p>
                                تشغيل أكثر من 40 مشروعا على الصعيد الوطني
                                تنفيذ 450،000 قدم مربع سقف السقف
                                الكيوي ، تصميم وتنفيذ تجربة ناجحة
                            </p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="mainSlider--item">

            <img src="{{asset('/assets/site/media/images/landing/landing-2.jpg')}}" alt="">
            <div class="container position-relative d-flex flex-column align-items-end">
                <div class="leftBox">
                    <div class="d-flex">
                        <a href="void:;">
                            <span class="orangeRibbon"></span>
                            <p>
                                تشغيل أكثر من 40 مشروعا على الصعيد الوطني
                                تنفيذ 450،000 قدم مربع سقف السقف
                                الكيوي ، تصميم وتنفيذ تجربة ناجحة
                            </p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="mainSlider--item">

            <img src="{{asset('/assets/site/media/images/landing/landing-2.jpg')}}" alt="">
            <div class="container position-relative d-flex flex-column align-items-end">
                <div class="leftBox">
                    <div class="d-flex">
                        <a href="void:;">
                            <span class="orangeRibbon"></span>
                            <p>
                                تشغيل أكثر من 40 مشروعا على الصعيد الوطني
                                تنفيذ 450،000 قدم مربع سقف السقف
                                الكيوي ، تصميم وتنفيذ تجربة ناجحة
                            </p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="mainSlider--item">

            <img src="{{asset('/assets/site/media/images/landing/landing-2.jpg')}}" alt="">
            <div class="container position-relative d-flex flex-column align-items-end">
                <div class="leftBox">
                    <div class="d-flex">
                        <a href="void:;">
                            <span class="orangeRibbon"></span>
                            <p>
                                تشغيل أكثر من 40 مشروعا على الصعيد الوطني
                                تنفيذ 450،000 قدم مربع سقف السقف
                                الكيوي ، تصميم وتنفيذ تجربة ناجحة
                            </p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="aboutUs">
        {{--        <img src="{{asset('assets/site/media/images/about-us/topbar.png')}}" alt="">--}}

        <img class="aboutUs--bgLogo" src="{{asset('/assets/site/media/images/about-us/about-us-logo-3.png')}}" alt="">
        <div class="container my-auto">
            <div class="row">
                <div class="col-md-6">
                    <div class="content">
                        <h2 class="content--header sectionTitle">
                            حول غيوبويد
                        </h2>

                        <p class="content--text">
                            {{$about_us}}

                        </p>

                        <div class="text-left">
                            <a title=" لماذا غيوبويد" href="{{url('about-us')}}" class="btn btn-outline-light">
                                لماذا غيوبويد
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6"></div>
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
                <div class="col-md-6 my-md-auto">
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
                    {{--<div class="container-fluid">--}}
                    {{--<div class="row">--}}
                    {{--<div class="col-sm-6 col-md-3 mb-3">--}}
                    <div class="card">
                        <div class="orangeTitle bg-orange">
                            <span class="d-block">نوع القالب</span>
                            <span>غيوبويد</span>
                        </div>
                        <div class="card-title bg-grey-c greyTitle">
                            <span> (m)سبان </span>
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
                        <div class="orangeTitle bg-orange d-flex justify-content-end">
                            <span>CU400</span>
                        </div>
                        <div class="card-title bg-grey-c greyTitle d-flex justify-content-between">

                            <span>12</span>
                            <span>16</span>
                        </div>

                        <img class="card-img-top"
                             src="{{asset('/assets/site/media/images/products/products-item-bg.png')}}"
                             alt="Card image cap">

                        <div class="card-body">
                            <ul>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                    {{--</div>--}}
                    {{--<div class="col-sm-6 col-md-3 mb-3">--}}
                    <div class="card">
                        <div class="orangeTitle bg-orange d-flex justify-content-end">
                            <span>CU400</span>
                        </div>
                        <div class="card-title bg-grey-c greyTitle d-flex justify-content-between">

                            <span>12</span>
                            <span>16</span>
                        </div>

                        <img class="card-img-top"
                             src="{{asset('/assets/site/media/images/products/products-item-bg.png')}}"
                             alt="Card image cap">

                        <div class="card-body">
                            <ul>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>

                    {{--</div>--}}
                    {{--<div class="col-sm-6 col-md-3 mb-3">--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-6 col-md-3 mb-3">--}}
                    <div class="card">
                        <div class="orangeTitle bg-orange d-flex justify-content-end">
                            <span>CU400</span>
                        </div>
                        <div class="card-title bg-grey-c greyTitle d-flex justify-content-between">

                            <span>12</span>
                            <span>16</span>
                        </div>

                        <img class="card-img-top"
                             src="{{asset('/assets/site/media/images/products/products-item-bg.png')}}"
                             alt="Card image cap">

                        <div class="card-body">
                            <ul>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="card">
                        <div class="lastItem orangeTitle bg-orange d-flex justify-content-end">
                            <span>CU400</span>
                        </div>

                        <div class="btlr bblr card-title bg-grey-c greyTitle  d-flex justify-content-between">
                            <span>12</span>
                            <span>16</span>
                        </div>

                        <img class="card-img-top"
                             src="{{asset('/assets/site/media/images/products/products-item-bg.png')}}"
                             alt="Card image cap">
                        <div class="card-body">
                            <ul>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                </div>
                <div class="tab-pane fade" id="pills-connections" role="tabpanel"
                     aria-labelledby="pills-commercial-tab">
                    <div class="card">
                        <div class="orangeTitle bg-orange">
                            <span class="d-block">نوع القالب</span>
                            <span>غيوبويد</span>
                        </div>
                        <div class="card-title bg-grey-c greyTitle">
                            <span> (m)سبان </span>
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
                        <div class="orangeTitle bg-orange d-flex justify-content-end">
                            <span>CU400</span>
                        </div>
                        <div class="card-title bg-grey-c greyTitle d-flex justify-content-between">

                            <span>12</span>
                            <span>16</span>
                        </div>

                        <img class="card-img-top"
                             src="{{asset('/assets/site/media/images/products/products-item-bg.png')}}"
                             alt="Card image cap">

                        <div class="card-body">
                            <ul>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                    {{--</div>--}}
                    {{--<div class="col-sm-6 col-md-3 mb-3">--}}
                    <div class="card">
                        <div class="orangeTitle bg-orange d-flex justify-content-end">
                            <span>CU400</span>
                        </div>
                        <div class="card-title bg-grey-c greyTitle d-flex justify-content-between">

                            <span>12</span>
                            <span>16</span>
                        </div>

                        <img class="card-img-top"
                             src="{{asset('/assets/site/media/images/products/products-item-bg.png')}}"
                             alt="Card image cap">

                        <div class="card-body">
                            <ul>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>

                    {{--</div>--}}
                    {{--<div class="col-sm-6 col-md-3 mb-3">--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-6 col-md-3 mb-3">--}}
                    <div class="card">
                        <div class="orangeTitle bg-orange d-flex justify-content-end">
                            <span>CU400</span>
                        </div>
                        <div class="card-title bg-grey-c greyTitle d-flex justify-content-between">

                            <span>12</span>
                            <span>16</span>
                        </div>

                        <img class="card-img-top"
                             src="{{asset('/assets/site/media/images/products/products-item-bg.png')}}"
                             alt="Card image cap">

                        <div class="card-body">
                            <ul>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">

                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="card">
                        <div class="lastItem orangeTitle bg-orange d-flex justify-content-end">
                            CU400
                        </div>
                        <div class="btlr bblr card-title bg-grey-c greyTitle  d-flex justify-content-between">
                            <span>12</span>
                            <span>16</span>
                        </div>

                        <img class="card-img-top"
                             src="{{asset('/assets/site/media/images/products/products-item-bg.png')}}"
                             alt="Card image cap">
                        <div class="card-body">
                            <ul>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <span>12</span>
                                        <span>16</span>
                                    </div>
                                </li>
                                <li></li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <span>12</span>
                                        <span>16</span>
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
                <div class="col-12">
                    <div class="mb-4">
                        <h2 class="downloads__title">
                            تحميل
                        </h2>
                        <p class="downloads__descriptions">
                            كتالوج وكتيبات شركة غيوبويد مقدمة
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="">
                        <p class="lists__title">
                            يمكنك تنزيل الملفات التالية
                        </p>
                        <div class="downloads--lists">
                            <div class="container-fluid pr-md-0">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="javascript:;"
                                           class="d-flex flex-column p-3 align-items-center downloads--lists__item">
                                            <img class=""
                                                 src="{{asset('/assets/site/media/images/downloads/icon-1.png')}}"
                                                 alt="">
                                            <span>قائمة كاملة من المشاريع</span></a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:;"
                                           class="d-flex flex-column align-items-center downloads--lists__item p-3">
                                            <img class=""
                                                 src="{{asset('/assets/site/media/images/downloads/icon-2.png')}}"
                                                 alt="">
                                            <span>كتالوج الشركة</span>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:;"
                                           class="d-flex flex-column align-items-center downloads--lists__item p-3">
                                            <img class=""
                                                 src="{{asset('/assets/site/media/images/downloads/icon-2.png')}}"
                                                 alt="">
                                            <span>
                                                كتيب المنتج
                                    </span>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:;"
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
                <div class="col-12 col-md-8">
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
                <div class="col-12">
                    <h2 class="sectionTitle">اخبار</h2>
                    <p>
                        تعرف على الأخبار والإعلانات والعقود الجديدة وعملية تنفيذ المشاريع
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
                                        اکثر من
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
            rtl: true,
            nav: true,
            items: 4,
            loop: true,
            margin: 20,
            dots: true,
            responsive: {
                // breakpoint from 0 up
                0: {
                    items: 1
                },
                // breakpoint from 400 up
                400: {
                    items: 2
                },
                // breakpoint from 576 up

                576: {
                    items: 3
                },
                // breakpoint from 768 up
                768: {
                    items: 4,
                },
            }
        });

        @endforeach
        @endisset

        $('[data-toggle="tooltip"]').tooltip();

        $(document).ready(function () {

            $('#newsCarousel,#productsCarousel,' +
                '#completedProjects--commercialCarousel,' +
                '#completedProjects--hotelCarousel,' +
                '#completedProjects--all-projects').owlCarousel({
                rtl: true,
                nav: true,
                items: 4,
                loop: true,
                margin: 20,
                dots: true,
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: 1
                    },
                    // breakpoint from 400 up
                    400: {
                        items: 2
                    },
                    // breakpoint from 576 up

                    576: {
                        items: 3
                    },
                    // breakpoint from 768 up
                    768: {
                        items: 4,
                    },
                }
            });

            $('#faqCarousel').owlCarousel({
                rtl: true,
                nav: true,
                items: 1,
                loop: true,
//            margin: 26,
                dots: true,
            });

            $('#mainSlider').owlCarousel({
                rtl: true,
                nav: true,
                items: 1,
                loop: true,
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
                    'fullscreen', // Toggle fullscreen

                ];

            player = new Plyr('#player', {
                controls,
//                loadSprite: false,
                {{--iconUrl: "{{asset('/assets/site/js/vendors/plyr-master/src/sprite/play-icon.svg')}}"--}}
            });
        });
    </script>
@endpush