@extends('main_site.layouts.master')

@section('header')
    @include('main_site.frames.smallHeader')
@endsection

@section('main')
    <section class="completedProjectsShowPage">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div id="completedProjectsShowPage" class="owl-carousel gallery">
                        <a title="" class="html5lightbox galleryItem" data-group="mygroup"
                           data-thumbnail="./assets/media/images/completed-projects/gallery-item-1.jpg"
                           href="./assets/media/images/completed-projects/gallery-item-1.jpg">
                            <img class="img-fluid" src="./assets/media/images/completed-projects/gallery-item-1.jpg"
                                 alt="">
                            <div class="galleryItem__indicator">
                                الصوره 1 من 6
                            </div>
                        </a>
                        <a title="" class="html5lightbox galleryItem" data-group="mygroup"
                           data-thumbnail="./assets/media/images/completed-projects/gallery-item-1.jpg"
                           href="./assets/media/images/completed-projects/gallery-item-1.jpg">
                            <img class="img-fluid" src="./assets/media/images/completed-projects/gallery-item-1.jpg"
                                 alt="">
                            <div class="galleryItem__indicator">
                                الصوره 2 من 6
                            </div>
                        </a>
                        <a title="" class="html5lightbox galleryItem" data-group="mygroup"
                           data-thumbnail="./assets/media/images/completed-projects/gallery-item-1.jpg"
                           href="./assets/media/images/completed-projects/gallery-item-1.jpg">
                            <img class="img-fluid" src="./assets/media/images/completed-projects/gallery-item-1.jpg"
                                 alt="">
                            <div class="galleryItem__indicator">
                                الصوره 3 من 6
                            </div>
                        </a>
                        <a title="" class="html5lightbox galleryItem" data-group="mygroup"
                           data-thumbnail="./assets/media/images/completed-projects/gallery-item-1.jpg"
                           href="./assets/media/images/completed-projects/gallery-item-1.jpg">
                            <img class="img-fluid" src="./assets/media/images/completed-projects/gallery-item-1.jpg"
                                 alt="">
                            <div class="galleryItem__indicator">
                                الصوره 4 من 6
                            </div>
                        </a>
                        <a title="" class="html5lightbox galleryItem" data-group="mygroup"
                           data-thumbnail="./assets/media/images/completed-projects/gallery-item-1.jpg"
                           href="./assets/media/images/completed-projects/gallery-item-1.jpg">
                            <img class="img-fluid" src="./assets/media/images/completed-projects/gallery-item-1.jpg"
                                 alt="">
                            <div class="galleryItem__indicator">
                                الصوره 5 من 6
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-5">
                    <h2 style="font-family: Myriad-Bold;font-size: 60px;">المشاريع</h2>
                    <h3>فندق آراز</h3>

                    <p>
                        فندق آراز منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه العديد من ا
                        المشاريع المنجزة منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه العد
                        فندق آراز منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه العديد من ا
                        المشاريع المنجزة منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه العد
                    </p>

                    <p>
                        فندق آراز منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه العديد من ا
                        فندق آراز منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه العديد من ا
                        المشاريع المنجزة منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه العد
                        فندق آراز منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه العديد من ا
                        المشاريع المنجزة منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه العد
                    </p>

                    <h4>المواصفات الفنیه</h4>

                    <ul>
                        <li>العنوان : نوشهر</li>
                        <li>الهیکل العظمی : الخرسانه</li>
                        <li>اطول حفره : 14 مترا</li>
                        <li>قاعده سقف الکیوبید : 90000 متر مربع</li>
                        <li>وقت التشغیل : صیف 95</li>
                    </ul>
                </div>

            </div>
        </div>

        <img class="bg-image" src="./assets/media/images/completed-projects/completed-projects-showpage-bg.jpg" alt="">
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
                            <img class="card-img-top" src="./assets/media/images/slider/slider-p1.jpg"
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
                            <img class="card-img-top" src="./assets/media/images/slider/slider-p2.jpg"
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
                            <img class="card-img-top" src="./assets/media/images/slider/slider-p3.jpg"
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
                            <img class="card-img-top" src="./assets/media/images/slider/slider-p4.jpg"
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
                            <img class="card-img-top" src="./assets/media/images/slider/slider-p1.jpg"
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
                            <img class="card-img-top" src="./assets/media/images/slider/slider-p2.jpg"
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
                            <img class="card-img-top" src="./assets/media/images/slider/slider-p1.jpg"
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
                            <img class="card-img-top" src="./assets/media/images/slider/slider-p2.jpg"
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
                            <img class="card-img-top" src="./assets/media/images/slider/slider-p3.jpg"
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
                            <img class="card-img-top" src="./assets/media/images/slider/slider-p4.jpg"
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
                            <img class="card-img-top" src="./assets/media/images/slider/slider-p1.jpg"
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
                            <img class="card-img-top" src="./assets/media/images/slider/slider-p2.jpg"
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
                                <img src="./assets/media/images/benefits/icon-1.png" alt="">
                                تشغيل السرعة
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-2.png" alt="">
                                التحكم في الاهتزاز
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-3.png" alt="">
                                تشوه السيطرة
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-4.png" alt="">
                                تشغيل السرعة
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-5.png" alt="">
                                تشغيل السرعة
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-6.png" alt="">
                                السقف الثابت ل
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-7.png" alt="">
                                تشغيل السرعة
                            </li>
                        </ul>
                        <ul class="benefits--lists d-inline-block">
                            <li>
                                <img src="./assets/media/images/benefits/icon-8.png" alt="">
                                تشغيل السرعة
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-9.png" alt="">
                                التحكم في الاهتزاز
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-10.png" alt="">
                                تشوه السيطرة
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-11.png" alt="">
                                تشغيل السرعة
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-12.png" alt="">
                                تشغيل السرعة
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-13.png" alt="">
                                السقف الثابت ل
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-14.png" alt="">
                                تشغيل السرعة
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-15.png" alt="">
                                تشغيل السرعة
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </section>
    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex align-items-center">
                        <div class="questionMark ml-3">
                            <img src="./assets/media/images/faq/question-mark.png" class="img-fluid" alt="">
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
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#completedProjects--commercialCarousel,#completedProjects--hotelCarousel').owlCarousel({
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
            $('#completedProjectsShowPage').owlCarousel({
                rtl: true,
                nav: true,
                items: 1,
//            loop: true,
                margin: 26,
                dots: false,
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
@endpush