@extends('main_site.layouts.master')

@section('main')
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
@endsection