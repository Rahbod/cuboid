<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>Cuboid</title>

    <link type="text/css" rel="stylesheet" href="{{asset('/assets/site/css/bootstrap.min.css')}}">
    <!--<link rel="icon" href="/assets/site/media/images/public/fav_icon.png">-->
    <!--<link type="text/css" rel="stylesheet" href="/assets/site/js/vendors/owl-carousel/owl.carousel.min.css">-->
    <!--<link type="text/css" rel="stylesheet" href="/assets/site/js/vendors/owl-carousel/owl.theme.default.min.css">-->
    <!--<link type="text/css" rel="stylesheet" href="/assets/site/css/bootstrap-rtl.css">-->
    <link type="text/css" rel="stylesheet" href="{{asset('/assets/site/fonts/fontawesome-5-pro/css/all.min.css')}}">
    <!--<link type="text/css" rel="stylesheet" href="/assets/site/js/vendors/icomoon/style.css">-->
    <!--<link type="text/css" rel="stylesheet" href="/assets/site/css/iran-sans.css">-->
    <link type="text/css" rel="stylesheet" href="{{asset('/assets/site/css/alfarooq.css')}}">
    <!--<link type="text/css" rel="stylesheet" href="/assets/site/css/iran-sans-fa-num.css">-->
    <link type="text/css" rel="stylesheet" href="{{asset('/assets/site/css/global.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('/assets/site/css/sidebar.css')}}">

    <!--<link type="text/css" rel="stylesheet" href="/assets/site/css/responsive.css">-->
    <!--<link type="text/css" rel="stylesheet" href="/assets/site/js/vendors/slick/slick.css">-->
    <!--<link type="text/css" rel="stylesheet" href="/assets/site/js/vendors/slick/slick-theme.css">-->

    <link type="text/css" rel="stylesheet" href="{{asset('/assets/site/js/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('/assets/site/js/vendors/owl-carousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('/assets/site/js/vendors/plyr-master/dist/plyr.css')}}">
</head>
<body>

<header class="header landing">
    <div class="sticky-header navbar-expand-lg bg-dark">
        <div class="main-bar clearfix onepage">
            <div class="container">
                <nav class="header-nav navbar p-0">
                    <div>
                        <button id="sidebarCollapse" class="navbar-toggler" type="button">
                            <span class="navbar-toggler-lines"></span>
                            <span class="navbar-toggler-lines"></span>
                            <span class="navbar-toggler-lines"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto rightMenu">
                            <li class="active"><a href="void::">الصفحة الرئيسية</a></li>
                            <li class=""><a href="javascript:;">حول غیوبوید</a></li>
                            <li class=""><a href="javascript:;">الأخبار</a></li>
                            <li class=""><a href="javascript:;"> المنتجات</a></li>
                            <li class=""><a href="javascript:;">الخدمات مبیعات</a></li>
                            <li class=""><a href="javascript:;">المشاریع</a></li>
                            <li class=""><a href="javascript:;">اتصل بنا</a></li>
                            <li class="d-none"><a href="javascript:;">Pages <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="about-us.html" class="dez-page">About Us</a></li>
                                    <li><a href="hotel.html">Hotels</a></li>
                                    <li><a href="javascript:;">Booking Details</a></li>
                                    <li><a href="place.html">Places</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="javascript:;">Packages</a></li>
                                    <li><a href="calendar.html">Calendar <span class="new-page menu-new">New</span></a>
                                    </li>
                                    <li><a href="coming-soon.html" class="dez-page">Coming Soon</a></li>
                                    <li><a href="error-404.html" class="dez-page">Error 404</a></li>
                                    <li><a href="login.html" class="dez-page">Login</a></li>
                                    <li><a href="register.html" class="dez-page">Register</a></li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav mr-auto leftMenu">
                            <li class=""><a href="javascript:;"><i class="fab fa-youtube"></i></a></li>
                            <li class=""><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                            <li class=""><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
                            <li class=""><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                            <li class=""><a href="javascript:;"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <nav id="sidebar">
        <div class="sidebar-header">
            <h4 class="text-white">language</h4>
            <h5 class="text-white">academy</h5>
        </div>

        <div id="dismiss">
            <i class="fas fa-arrow-left"></i>
        </div>

        <ul class="list-unstyled">
            <li>
                <a class="menu-item active" href="javascript:;">home</a>
            </li>
            <li>
                <a class="menu-item" href="javascript:;">news</a>
            </li>
            <li>
                <a class="menu-item" href="javascript:;">articles</a>
            </li>
            <li>
                <a class="menu-item" href="javascript:;">translation</a>
            </li>
            <li>
                <a class="menu-item submenu" href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false">
                    menu
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu2">
                    <li>
                        <a class="menu-item" href="javascript:;">sub menu</a>
                    </li>
                    <li>
                        <a class="menu-item" href="javascript:;">اطلاعیه ها</a>
                    </li>
                    <li>
                        <a class="menu-item" href="javascript:;">لیست های من</a>
                    </li>
                    <li>
                        <a class="menu-item" href="javascript:;">لیست های ذخیره شده</a>
                    </li>
                    <li>
                        <a class="menu-item" href="javascript:;">لیست های پیشنهادی</a>
                    </li>
                    <li>
                        <a class="menu-item" href="javascript:;">خروج</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu-item">
                    login
                </a>
            </li>
            <li>
                <a href="javascript:;" class="menu-item">
                    register
                </a>
            </li>


        </ul>

    </nav>
</header>
<main>
    <section class="aboutUs">
        <img class="aboutUs--bgLogo" src="{{asset('/assets/site/media/images/about-us/about-us-logo.png')}}" alt="">
        <div class="container my-auto">
            <div class="row">
                <div class="col-md-6">
                    <div class="content">
                        <h2 class="content--header">
                            حول غیوبوید
                        </h2>

                        <p class="content--text">
                            حول غیوبوید تم تأسيس شركة اسمنت تاواي ، وهي شبكة من النخب العلم
                            حول غیوبوید تم تأسيس شركة اسمنت تاواي ، وهي شبكة من النخب العلم
                            حول غیوبوید تم تأسيس شركة اسمنت تاواي ، وهي شبكة من النخب العلم
                            حول غیوبوید تم تأسيس شركة اسمنت تاواي ، وهي شبكة من النخب العلم
                            حول غیوبوید تم تأسيس شركة اسمنت تاواي ، وهي شبكة من النخب العلم
                            حول غیوبوید تم تأسيس شركة اسمنت تاواي ، وهي شبكة من النخب العلم
                            حول غیوبوید تم تأسيس شركة اسمنت تاواي ، وهي شبكة من النخب العلم

                        </p>

                        <div class="text-left">
                            <a title=" لماذا غیوبوید" href="javascript:;" class="btn btn-outline-light">
                                لماذا غیوبوید
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </section>

    <section class="completedProjects">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>المشاريع المنجزة</h2>

                    <p>المشاريع المنجزة منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه العد
                        المشاريع المنجزة منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه العد
                    </p>
                </div>
                <div class="col-md-6 my-md-auto">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist" style="justify-content: flex-end;">
                        <li class="nav-item">
                            <a class="nav-link active"
                               id="pills-hotel-tab" data-toggle="pill" href="#pills-hotel" role="tab"
                               aria-controls="pills-hotel" aria-selected="true">الفندوق</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               id="pills-commercial-tab" data-toggle="pill" href="#pills-commercial" role="tab"
                               aria-controls="pills-commercial" aria-selected="false">اداریه / تجاریه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               id="pills-residential-tab" data-toggle="pill" href="#pills-residential" role="tab"
                               aria-controls="pills-course" aria-selected="false">سکنی</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               id="pills-all-projects-tab" data-toggle="pill" href="#pills-all-projects" role="tab"
                               aria-controls="pills-course" aria-selected="false">جمیع المشاریع</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-hotel" role="tabpanel"
                     aria-labelledby="pills-hotel-tab">
                    <div id="completedProjects--hotelCarousel" class="owl-carousel">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('/assets/site/media/images/slider/slider-p1.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">فندق شوموس</h4>
                                <h5 class="card-sub-title">مشهد / امام الرضا بلفد</h5>
                                <p class="card-text">
                                    فندق شوموس مشهد / امام الرضا بلفد إنها حقيقة ثابتة منذ فترة طوي
                                </p>
                            </div>
                            <div class="moreDetails">
                                <h4 class="card-title text-white">فندق شوموس</h4>
                                <h5 class="card-sub-title text-white">مشهد / امام الرضا بلفد</h5>
                                <p class="card-text">
                                    فندق شوموس مشهد / امام الرضا بلفد إنها حقيقة ثابتة منذ فترة طوي
                                </p>
                                <div class="text-right moreBtn">
                                    <a href="" class="btn btn-outline-light">
                                        اکثر من
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('/assets/site/media/images/slider/slider-p2.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">مشروع التجاری الزمزم</h4>
                                <h5 class="card-sub-title">
                                    طهران / نیاوران بلفد
                                </h5>
                                <p class="card-text">
                                    مشروع التجاری الزمزم طهران / نیاوران بلفد تصميم وتنفيذ أسطح الو
                                </p>
                            </div>
                            <div class="moreDetails">
                                <h4 class="card-title text-white">فندق شوموس</h4>
                                <h5 class="card-sub-title text-white">مشهد / امام الرضا بلفد</h5>
                                <p class="card-text">
                                    فندق شوموس مشهد / امام الرضا بلفد إنها حقيقة ثابتة منذ فترة طوي
                                </p>
                                <div class="text-right moreBtn">
                                    <a href="" class="btn btn-outline-light">
                                        اکثر من
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('/assets/site/media/images/slider/slider-p3.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">
                                    مشروع سیاحی البدیده المشهد
                                </h4>
                                <h5 class="card-sub-title">
                                    مشهد / شاندیز
                                </h5>
                                <p class="card-text">
                                    مشروع سیاحی البدیده المشهد مشهد / شاندیز تصميم وتنفيذ أسطح الوا
                                </p>
                            </div>
                            <div class="moreDetails">
                                <h4 class="card-title text-white">فندق شوموس</h4>
                                <h5 class="card-sub-title text-white">مشهد / امام الرضا بلفد</h5>
                                <p class="card-text">
                                    فندق شوموس مشهد / امام الرضا بلفد إنها حقيقة ثابتة منذ فترة طوي
                                </p>
                                <div class="text-right moreBtn">
                                    <a href="" class="btn btn-outline-light">
                                        اکثر من
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('/assets/site/media/images/slider/slider-p4.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">
                                    مشروع سكني
                                </h4>
                                <h5 class="card-sub-title">
                                    طهران / مخابرات بلفد
                                </h5>
                                <p class="card-text">
                                    فندق شوموس مشهد / امام الرضا بلفد إنها حقيقة ثابتة منذ فترة طوي

                                </p>
                            </div>
                            <div class="moreDetails">
                                <h4 class="card-title text-white">فندق شوموس</h4>
                                <h5 class="card-sub-title text-white">مشهد / امام الرضا بلفد</h5>
                                <p class="card-text">
                                    فندق شوموس مشهد / امام الرضا بلفد إنها حقيقة ثابتة منذ فترة طوي
                                </p>
                                <div class="text-right moreBtn">
                                    <a href="" class="btn btn-outline-light">
                                        اکثر من
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('/assets/site/media/images/slider/slider-p1.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">فندق شوموس</h4>
                                <h5 class="card-sub-title">مشهد / امام الرضا بلفد إنها حقيقة ثابتةمنذ فترة طوي</h5>
                                <p class="card-text">
                                    فندق شوموس مشهد / امام الرضا بلفد إنها حقيقة ثابتة منذ فترة طوي
                                </p>
                            </div>
                            <div class="moreDetails">
                                <h4 class="card-title text-white">فندق شوموس</h4>
                                <h5 class="card-sub-title text-white">مشهد / امام الرضا بلفد</h5>
                                <p class="card-text">
                                    فندق شوموس مشهد / امام الرضا بلفد إنها حقيقة ثابتة منذ فترة طوي
                                </p>
                                <div class="text-right moreBtn">
                                    <a href="" class="btn btn-outline-light">
                                        اکثر من
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('/assets/site/media/images/slider/slider-p2.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">مشروع التجاری الزمزم</h4>
                                <h5 class="card-sub-title">
                                    طهران / نیاوران بلفد
                                </h5>
                                <p class="card-text">
                                    مشروع التجاری الزمزم طهران / نیاوران بلفد تصميم وتنفيذ أسطح الو
                                </p>
                            </div>
                            <div class="moreDetails">
                                <h4 class="card-title text-white">فندق شوموس</h4>
                                <h5 class="card-sub-title text-white">مشهد / امام الرضا بلفد</h5>
                                <p class="card-text">
                                    فندق شوموس مشهد / امام الرضا بلفد إنها حقيقة ثابتة منذ فترة طوي
                                </p>
                                <div class="text-right moreBtn">
                                    <a href="" class="btn btn-outline-light">
                                        اکثر من
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-commercial" role="tabpanel"
                     aria-labelledby="pills-commercial-tab">
                    <div id="completedProjects--commercialCarousel" class="owl-carousel">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('/assets/site/media/images/slider/slider-p1.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">فندق شوموس</h4>
                                <h5 class="card-sub-title">مشهد / امام الرضا بلفد إنها حقيقة ثابتةمنذ فترة طوي</h5>
                                <p class="card-text">
                                    فندق شوموس مشهد / امام الرضا بلفد إنها حقيقة ثابتة منذ فترة طوي
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('/assets/site/media/images/slider/slider-p2.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">مشروع التجاری الزمزم</h4>
                                <h5 class="card-sub-title">
                                    طهران / نیاوران بلفد
                                </h5>
                                <p class="card-text">
                                    مشروع التجاری الزمزم طهران / نیاوران بلفد تصميم وتنفيذ أسطح الو
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('/assets/site/media/images/slider/slider-p3.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">
                                    مشروع سیاحی البدیده المشهد
                                </h4>
                                <h5 class="card-sub-title">
                                    مشهد / شاندیز
                                </h5>
                                <p class="card-text">
                                    مشروع سیاحی البدیده المشهد مشهد / شاندیز تصميم وتنفيذ أسطح الوا
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('/assets/site/media/images/slider/slider-p4.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">
                                    مشروع سكني
                                </h4>
                                <h5 class="card-sub-title">
                                    طهران / مخابرات بلفد
                                </h5>
                                <p class="card-text">
                                    فندق شوموس مشهد / امام الرضا بلفد إنها حقيقة ثابتة منذ فترة طوي

                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('/assets/site/media/images/slider/slider-p1.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">فندق شوموس</h4>
                                <h5 class="card-sub-title">مشهد / امام الرضا بلفد إنها حقيقة ثابتةمنذ فترة طوي</h5>
                                <p class="card-text">
                                    فندق شوموس مشهد / امام الرضا بلفد إنها حقيقة ثابتة منذ فترة طوي
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('/assets/site/media/images/slider/slider-p2.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">مشروع التجاری الزمزم</h4>
                                <h5 class="card-sub-title">
                                    طهران / نیاوران بلفد
                                </h5>
                                <p class="card-text">
                                    مشروع التجاری الزمزم طهران / نیاوران بلفد تصميم وتنفيذ أسطح الو
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>المنتجات</h2>

                    <p>
                        المنتجات بما يتوافق مع طول فترة ونوع نظام الصك ، ينطبق سقف الحش بما يتوافق مع طول فترة ونوع نظام
                        الصك ، ينطبق سقف الحش
                    </p>
                </div>
                <div class="col-md-6 my-md-auto">
                    <ul class="nav nav-pills" id="pills-tab2" role="tablist" style="justify-content: flex-end;">
                        <li class="nav-item">
                            <a class="nav-link active"
                               id="pills-path-tab" data-toggle="pill" href="#pills-path" role="tab"
                               aria-controls="pills-path" aria-selected="true">طریقه التنفیذ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               id="pills-connections-tab" data-toggle="pill" href="#pills-connections" role="tab"
                               aria-controls="pills-connections" aria-selected="false">المواصفات الفنیه الانشائیه</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent2">
                <div class="tab-pane fade show active" id="pills-path" role="tabpanel"
                     aria-labelledby="pills-path-tab">
                    <div class="d-flex">
                        <div style="flex-basis: auto;" class="w-202 ml-3 d-none">
                            <div class="card firstCard">
                                <div class="orangeTitle bg-orange btrr bbrr">
                                    <div style="white-space: nowrap;">
                                        نوع القالب
                                    </div>
                                </div>
                                <div class="card-title bg-grey-c greyTitle btrr bbrr d-flex justify-content-between">
                                    سبان (m)
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li>سمك السقف (cm)</li>
                                        <li></li>
                                        <li>سمك يعادل الخرسانة (cm)</li>
                                        <li></li>
                                        <li>سمك السقف (cm)</li>
                                        <li></li>
                                        <li>سمك يعادل الخرسانة (cm)</li>
                                    </ul>
                                </div>
                                <div class="moreDetails">
                                    <h4 class="card-title text-white">فندق شوموس</h4>
                                    <h5 class="card-sub-title text-white">مشهد / امام الرضا بلفد</h5>
                                    <p class="card-text">
                                        فندق شوموس مشهد / امام الرضا بلفد إنها حقيقة ثابتة منذ فترة طوي
                                    </p>
                                    <div class="text-right moreBtn">
                                        <a href="" class="btn btn-outline-light">
                                            اکثر من
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="w-202 ml-3 flex-grow">
                            <div class="card">
                                <div class="orangeTitle bg-orange">
                                    <span>CU400</span>
                                </div>
                                <div class="card-title bg-grey-c greyTitle  d-flex justify-content-between">
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
                                <div class="moreDetails">
                                    <h4 class="card-title text-white">فندق شوموس</h4>
                                    <h5 class="card-sub-title text-white">مشهد / امام الرضا بلفد</h5>
                                    <p class="card-text">
                                        فندق شوموس مشهد / امام الرضا بلفد إنها حقيقة ثابتة منذ فترة طوي
                                    </p>
                                    <div class="text-right moreBtn">
                                        <a href="" class="btn btn-outline-light">
                                            اکثر من
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-202 ml-3 flex-grow">
                            <div class="card">
                                <div class="orangeTitle bg-orange">
                                    CU400
                                </div>
                                <div class="card-title bg-grey-c greyTitle  d-flex justify-content-between">
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
                                <div class="moreDetails">
                                    <h4 class="card-title text-white">فندق شوموس</h4>
                                    <h5 class="card-sub-title text-white">مشهد / امام الرضا بلفد</h5>
                                    <p class="card-text">
                                        فندق شوموس مشهد / امام الرضا بلفد إنها حقيقة ثابتة منذ فترة طوي
                                    </p>
                                    <div class="text-right moreBtn">
                                        <a href="" class="btn btn-outline-light">
                                            اکثر من
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="w-202 ml-3 flex-grow">
                            <div class="card">
                                <div class="orangeTitle bg-orange">
                                    CU400
                                </div>
                                <div class="card-title bg-grey-c greyTitle  d-flex justify-content-between">
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
                                <div class="moreDetails">
                                    <h4 class="card-title text-white">فندق شوموس</h4>
                                    <h5 class="card-sub-title text-white">مشهد / امام الرضا بلفد</h5>
                                    <p class="card-text">
                                        فندق شوموس مشهد / امام الرضا بلفد إنها حقيقة ثابتة منذ فترة طوي
                                    </p>
                                    <div class="text-right moreBtn">
                                        <a href="" class="btn btn-outline-light">
                                            اکثر من
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="w-202 ml-3 flex-grow">
                            <div class="card">
                                <div class=" lastItem orangeTitle bg-orange">
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
                                <div class="moreDetails">
                                    <h4 class="card-title text-white">فندق شوموس</h4>
                                    <h5 class="card-sub-title text-white">مشهد / امام الرضا بلفد</h5>
                                    <p class="card-text">
                                        فندق شوموس مشهد / امام الرضا بلفد إنها حقيقة ثابتة منذ فترة طوي
                                    </p>
                                    <div class="text-right moreBtn">
                                        <a href="" class="btn btn-outline-light">
                                            اکثر من
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-connections" role="tabpanel"
                     aria-labelledby="pills-commercial-tab">
                    <div id="productsCarousel" class="owl-carousel">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('/assets/site/media/images/slider/slider-p1.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">فندق شوموس</h4>
                                <h5 class="card-sub-title">مشهد / امام الرضا بلفد إنها حقيقة ثابتةمنذ فترة طوي</h5>
                                <p class="card-text">
                                    فندق شوموس مشهد / امام الرضا بلفد إنها حقيقة ثابتة منذ فترة طوي
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="benefits">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>
                        مزايا سقف الغیوبوید
                    </h2>
                </div>
                <div class="col-8">
                    <div class="d-flex justify-content-between">
                        <ul class="benefits--lists d-inline-block">
                            <li>
                                <img src="{{asset('/assets/site/media/images/benefits/icon-1.png')}}" alt="">
                                تشغيل السرعة
                            </li>
                            <li>
                                <img src="{{asset('/assets/site/media/images/benefits/icon-2.png')}}" alt="">
                                التحكم في الاهتزاز
                            </li>
                            <li>
                                <img src="{{asset('/assets/site/media/images/benefits/icon-3.png')}}" alt="">
                                تشوه السيطرة
                            </li>
                            <li>
                                <img src="{{asset('/assets/site/media/images/benefits/icon-4.png')}}" alt="">
                                تشغيل السرعة
                            </li>
                            <li>
                                <img src="{{asset('/assets/site/media/images/benefits/icon-5.png')}}" alt="">
                                تشغيل السرعة
                            </li>
                            <li>
                                <img src="{{asset('/assets/site/media/images/benefits/icon-6.png')}}" alt="">
                                السقف الثابت ل
                            </li>
                            <li>
                                <img src="{{asset('/assets/site/media/images/benefits/icon-7.png')}}" alt="">
                                تشغيل السرعة
                            </li>
                        </ul>
                        <ul class="benefits--lists d-inline-block">
                            <li>
                                <img src="{{asset('/assets/site/media/images/benefits/icon-8.png')}}" alt="">
                                تشغيل السرعة
                            </li>
                            <li>
                                <img src="{{asset('/assets/site/media/images/benefits/icon-9.png')}}" alt="">
                                التحكم في الاهتزاز
                            </li>
                            <li>
                                <img src="{{asset('/assets/site/media/images/benefits/icon-10.png')}}" alt="">
                                تشوه السيطرة
                            </li>
                            <li>
                                <img src="{{asset('/assets/site/media/images/benefits/icon-11.png')}}" alt="">
                                تشغيل السرعة
                            </li>
                            <li>
                                <img src="{{asset('/assets/site/media/images/benefits/icon-12.png')}}" alt="">
                                تشغيل السرعة
                            </li>
                            <li>
                                <img src="{{asset('/assets/site/media/images/benefits/icon-13.png')}}" alt="">
                                السقف الثابت ل
                            </li>
                            <li>
                                <img src="{{asset('/assets/site/media/images/benefits/icon-14.png')}}" alt="">
                                تشغيل السرعة
                            </li>
                            <li>
                                <img src="{{asset('/assets/site/media/images/benefits/icon-15.png')}}" alt="">
                                تشغيل السرعة
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </section>

    <section class="downloads">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mb-4">
                        <h2 class="downloads__title">
                            تحمیل
                        </h2>
                        <p class="downloads__descriptions">
                            كتالوج وكتيبات شركة غيوبويد مقدمة
                        </p>
                    </div>
                </div>
                <div class="col-4">
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
                                            <img class="" src="{{asset('/assets/site/media/images/downloads/icon-1.png')}}" alt="">
                                            <span> تشغيل السرعة</span>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:;"
                                           class="d-flex flex-column align-items-center downloads--lists__item p-3">
                                            <img class="" src="{{asset('/assets/site/media/images/downloads/icon-2.png')}}" alt="">
                                            <span>التحكم في الاهتزاز</span>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:;"
                                           class="d-flex flex-column align-items-center downloads--lists__item p-3">
                                            <img class="" src="{{asset('/assets/site/media/images/downloads/icon-2.png')}}" alt="">
                                            <span>
                                    تشوه السيطرة
                                    </span>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:;"
                                           class="d-flex flex-column align-items-center downloads--lists__item p-3">
                                            <img class="" src="{{asset('/assets/site/media/images/downloads/icon-4.png')}}" alt="">
                                            <span>
                                    تشوه السيطرة
                                    </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <video class="player" id="player" controls
                           poster="/assets/site/media/images/downloads/player-poster.jpg">
                        <source src="{{asset('/assets/site/media/videos/downloads/intro-480p__47071.mp4')}}" type="video/mp4">
                        <!--<img onclick="playPlyr()" src="{{asset('/assets/site/media/images/downloads/play-icon.png')}}" alt=""-->
                        <!--class="playIcon">-->
                        <a href="/assets/site/media/videos/downloads/intro-480p__47071.mp4" download>Download</a>
                    </video>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>اخبار</h2>
                    <p>المشاريع المنجزة منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه العد</p>
                </div>

                <div class="col-12">
                    <div id="newsCarousel" class="owl-carousel">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('/assets/site/media/images/news/p1.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">حضور سايبورغ في المعرض الدولي السابع عشر لصناعة البناء</h4>
                                <p class="card-text">
                                    تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن
                                    تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن
                                </p>
                            </div>
                            <a href="" class="btn btn-outline-light">
                                اکثر من
                            </a>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('/assets/site/media/images/news/p2.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">حضور سايبورغ في المعرض الدولي السابع عشر لصناعة البناء</h4>

                                <p class="card-text">
                                    تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن
                                    تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن
                                </p>
                            </div>
                            <a href="" class="btn btn-outline-light">
                                اکثر من
                            </a>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('/assets/site/media/images/news/p3.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">حضور سايبورغ في المعرض الدولي السابع عشر لصناعة البناء</h4>

                                <p class="card-text">
                                    تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن
                                    تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن
                                </p>
                            </div>
                            <a href="" class="btn btn-outline-light">
                                اکثر من
                            </a>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('/assets/site/media/images/news/p4.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">حضور سايبورغ في المعرض الدولي السابع عشر لصناعة البناء</h4>

                                <p class="card-text">
                                    تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن
                                    تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن
                                </p>
                            </div>
                            <a href="" class="btn btn-outline-light">
                                اکثر من
                            </a>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('/assets/site/media/images/news/p1.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">حضور سايبورغ في المعرض الدولي السابع عشر لصناعة البناء</h4>
                                <p class="card-text">
                                    تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن
                                    تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن
                                </p>
                            </div>
                            <a href="" class="btn btn-outline-light">
                                اکثر من
                            </a>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{asset('/assets/site/media/images/news/p2.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">حضور سايبورغ في المعرض الدولي السابع عشر لصناعة البناء</h4>

                                <p class="card-text">
                                    تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن
                                    تفخر شركة تاهو للخرسانة باستضافة المبنى الدولي السابع عشر للمبن
                                </p>
                            </div>
                            <a href="" class="btn btn-outline-light">
                                اکثر من
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex align-items-center">
                        <div class="questionMark ml-3">
                            <img src="{{asset('/assets/site/media/images/faq/question-mark.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="faq__descriptions flex-fill">
                            <h2>
                                أسئلة مكررة
                            </h2>
                            <p class="m-0">
                                معظم الأسئلة التي طرحها عملاؤنا هي إجاباتنا
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="owl-carousel" id="faqCarousel">
                        <div class="faq--item">
                            <h5>
                                هل غیوبوید أيضا تصميم هيكل السقف؟
                            </h5>
                            <p class="quotation">
                                <!--<span>-->
                                <!--&rdquo;-->
                                <!--</span>-->
                                نعم. مع فريق ماهر من المصممين ، توفر Cobweed جميع خدمات التصمي نعم. مع فريق ماهر من
                                المصممين ، توفر Cobweed جميع خدمات التصمي

                                <!--<span>-->
                                <!--&ldquo;-->
                                <!--</span>-->
                            </p>

                            <div class="text-left">
                                <a href="" class="btn btn-outline-light">
                                    اکثر من
                                </a>
                            </div>
                        </div>
                        <div class="faq--item">
                            <h5>
                                هل غیوبوید أيضا تصميم هيكل السقف؟
                            </h5>
                            <p>
                                “نعم. مع فريق ماهر من المصممين ، توفر Cobweed جميع خدمات التصمي
                            </p>
                            <div class="text-left">
                                <a href="" class="btn btn-outline-light">
                                    اکثر من
                                </a>
                            </div>
                        </div>
                        <div class="faq--item">
                            <h5>
                                هل غیوبوید أيضا تصميم هيكل السقف؟
                            </h5>
                            <p>
                                “نعم. مع فريق ماهر من المصممين ، توفر Cobweed جميع خدمات التصمي
                            </p>
                            <div class="text-left">
                                <a href="" class="btn btn-outline-light">
                                    اکثر من
                                </a>
                            </div>
                        </div>
                        <div class="faq--item">
                            <h5>
                                هل غیوبوید أيضا تصميم هيكل السقف؟
                            </h5>
                            <p>
                                “نعم. مع فريق ماهر من المصممين ، توفر Cobweed جميع خدمات التصمي
                            </p>
                            <div class="text-left">
                                <a href="" class="btn btn-outline-light">
                                    اکثر من
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <div class="formContainer">
                    <form action="">
                        <div class="form-row">
                            <div class="col-12">
                                <h2>
                                    اتصل بنا
                                </h2>
                            </div>
                            <div class="col-12">
                                <p class="" style="margin-bottom: 40px;">
                                    إذا كنت مهتمًا بالاتصال بنا ، يمكنك الاختيار من النموذج التالي إذا كنت مهتمًا
                                    بالاتصال بنا ،
                                    يمكنك الاختيار من النموذج التالي
                                </p>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">القسم المطلوب</label>
                                <select class="custom-select" id="">
                                    <option selected>انتخب ...</option>
                                    <option value="1">مدیر</option>
                                    <option value="2">مدیر</option>
                                    <option value="3">مدیر</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">الاسم الأول واللقب</label>
                                <input type="text" class="form-control" id="2" placeholder="الاسم الأول واللقب">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">البريد الإلكتروني</label>
                                <input type="email" class="form-control" id="3" placeholder="example@email.com">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">رقم الهاتف المحمول</label>
                                <input type="text" class="form-control" id="4" placeholder="09xxxxxxxxx">
                            </div>

                            <div class="form-group col-md-6">
                                <div class="d-flex" id="captcha_image">
                                    <div class="captchaImageContainer">
                                        <img src="{{asset('/assets/site/media/images/footer/captcha.png')}}">
                                    </div>
                                    <a href="javascript:;" class="renewCaptchaImage btn">
                                        <i class="far fa-redo"></i>
                                    </a>
                                    <input style="color: #f68e24;" type="text"
                                           class="form-control securityCode flex-fill" id="5"
                                           placeholder="تصویر امنیتی">
                                </div>


                            </div>
                            <div class="form-group col-md-6">
                                <button class="btn submitBtn form-control">إرسال إلى القسم ذي الصلة</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="addressContainer">
                    <ul style="width: 380px;">
                        <li class="mb-4">
                            <img class="ml-2" src="{{asset('/assets/site/media/images/footer/location-icon.png')}}" alt="">
                            <span class="address">
                                                            طهران ، الجادة أفريكا ، سابا الجادة ، رقم 42 ، الوحدة 21 021-22
                            </span>
                        </li>
                        <li class="phoneNumbers" style="margin-bottom: 25px;">
                            <h3 class="text-white">هواتف المكاتب المحلية</h3>
                            <ul>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <span class="phoneText">مكتب محافظة قم</span>
                                        <span class="phoneNumber">32941115-025</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <span class="phoneText">مكتب محافظة قم</span>
                                        <span class="phoneNumber">32941115-025</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <span class="phoneText">مكتب محافظة قم</span>
                                        <span class="phoneNumber">32941115-025</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <span class="phoneText">مكتب محافظة قم</span>
                                        <span class="phoneNumber">32941115-025</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <span class="phoneText">مكتب محافظة قم</span>
                                        <span class="phoneNumber">32941115-025</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <span class="phoneText">مكتب محافظة قم</span>
                                        <span class="phoneNumber">32941115-025</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <span class="phoneText">مكتب محافظة قم</span>
                                        <span class="phoneNumber">32941115-025</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <span class="phoneText">مكتب محافظة قم</span>
                                        <span class="phoneNumber">32941115-025</span>
                                    </div>
                                </li>

                            </ul>
                        </li>
                    </ul>

                    <div class="social">
                        <div class="d-flex">
                            <div class="flex-fill">
                                <a href="javascript:;" class="social__item">
                                    <img src="{{asset('/assets/site/media/images/footer/linkedin.png')}}" alt="">
                                </a>
                                <a href="javascript:;" class="social__item">
                                    <img src="{{asset('/assets/site/media/images/footer/facebook.png')}}" alt="">
                                </a>
                                <a href="javascript:;" class="social__item">
                                    <img src="{{asset('/assets/site/media/images/footer/google-plus.png')}}" alt="">
                                </a>
                                <a href="javascript:;" class="social__item">
                                    <img src="{{asset('/assets/site/media/images/footer/twitter.png')}}" alt="">
                                </a>

                                <a href="javascript:;" class="email">
                                    <img src="{{asset('/assets/site/media/images/footer/email.png')}}" alt="">
                                    INFO@CUBOID.COM
                                </a>
                            </div>
                            <a href="javascript:;">
                                <img src="{{asset('/assets/site/media/images/footer/CUBOID.png')}}" alt="">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container copyRight">
        <div class="row">
            <div class="col-md-7">
                <div class="d-flex justify-content-between">
                    <div>
                        © <span class="cuboid">كيوبيد 1396</span> | جميع الحقوق محفوظة لشركة كيوبید
                    </div>
                    <span class="designedBy">Design by  Tarsim.inc</span>
                </div>
                <div>
                    جميع الحقوق محفوظة لشركة كيوبید

                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
    </div>
</footer>


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

    });
</script>

<script type="text/javascript">
    var player;

    $(document).ready(function () {
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

    //    function playPlyr() {
    //        player.togglePlay();
    //    }

</script>
</body>
</html>