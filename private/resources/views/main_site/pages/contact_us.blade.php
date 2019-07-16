@extends('main_site.layouts.master')

@section('header')
    @include('main_site.frames.smallHeader')
@endsection

@section('main')

    <section class="contactUsPage">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="formContainer">
                        <form action="{{url(session('lang').'/'.'contact-us')}}" class="contactUsForm"
                              method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-12">
                                    <h2 class="sectionTitle">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">القسم المطلوب</label>
                                        <select tabindex="1" name="relevant_section" class="custom-select" id="">
                                            @if(config('system.relevant_section'))
                                                <option selected>انتخب ...</option>
                                                @foreach(config('system.relevant_section') as$key=> $option)
                                                    <option value="{{$key}}">{{$option}}</option>
                                                @endforeach
                                            @else
                                                <option selected>انتخب ...</option>
                                                <option value="1">مدیر</option>
                                                <option value="2">المنتجات</option>
                                                <option value="3">متنوع</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">الاسم الأول واللقب</label>
                                        <input tabindex="2" name="name" type="text" class="form-control" id="2"
                                               placeholder="الاسم الأول واللقب">
                                    </div>
                                    <div class="form-group">
                                        <label for="">البريد الإلكتروني</label>
                                        <input tabindex="3" name="email" type="email" class="form-control" id="3"
                                               placeholder="example@email.com">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text">وصف</label>
                                        <textarea tabindex="5" name="content" class="form-control" id="content"
                                                  placeholder="وصف"
                                                  required cols="30" rows="8"></textarea>
                                        <div class="invalid-tooltip"></div>
                                    </div>
                                </div>

                                {{--<div class="form-group col-md-6">--}}
                                {{--<label for="">رقم الهاتف المحمول</label>--}}
                                {{--<input tabindex="4" name="phone" type="text" class="form-control" id="4"--}}
                                {{--placeholder="09xxxxxxxxx">--}}
                                {{--</div>--}}

                                {{--<div class="form-group col-md-6" tabindex="5">--}}
                                {{--<div class="d-flex justify-content-between" id="captcha_image">--}}
                                {{--<div class="captchaImageContainer">--}}
                                {{--{!! captcha_img('flat'); !!}--}}
                                {{--</div>--}}
                                {{--<a style="padding: 10px 16px;" data-lang="{{session('lang')}}"--}}
                                {{--href="javascript:;"--}}
                                {{--class="renewCaptchaImage btn border ml-2">--}}
                                {{--<i class="far fa-redo"></i>--}}
                                {{--</a>--}}
                                {{--</div>--}}
                                {{--<input type="text" class="form-control"--}}
                                {{--autocomplete="captcha"--}}
                                {{--spellcheck="false"--}}
                                {{--tabindex="3"--}}
                                {{--name="captcha" required--}}
                                {{--id="captcha">--}}
                                {{--@if ($errors->has('captcha'))--}}
                                {{--<div class="invalid-feedback" style="display: block;">--}}
                                {{--{{ $errors->first('captcha') }}--}}
                                {{--</div>--}}
                                {{--@endif--}}
                                {{--</div>--}}
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="d-flex" id="captcha_image">
                                        <div class="captchaImageContainer">
                                            <img src="{{asset('assets/site/media/images/footer/captcha.png')}}">
                                        </div>
                                        <a href="void:;" class="renewCaptchaImage btn">
                                            <i class="far fa-redo"></i>
                                        </a>
                                        <input style="color: #f68e24;" type="text"
                                               class="form-control securityCode flex-fill" id="5"
                                               placeholder="تصویر امنیتی">
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <button tabindex="6" type="submit" class="btn submitBtn form-control">إرسال إلى القسم ذي
                                        الصلة
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text d-none">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 style="font-weight: bold; font-size: 45px;">
                        شروط بيع المنتجات
                    </h2>
                    <p>
                        شروط بيع المنتجات منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه الع شروط بيع المنتجات منذ إدخال
                        وتسجيل سقف كيوبيد ، استفادت منه الع شروط بيع المنتجات منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه
                        الع شروط بيع المنتجات منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه الع شروط بيع المنتجات منذ إدخال
                        وتسجيل سقف كيوبيد ، استفادت منه الع
                        شروط بيع المنتجات منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه الع
                    </p>

                    <ul class="pr-3" style="padding-top:35px;padding-bottom: 35px;">
                        <li>
                            شروط بيع المنتجات منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه الع
                        </li>
                        <li>
                            شروط بيع المنتجات منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه الع
                        </li>
                        <li>
                            شروط بيع المنتجات منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه الع
                        </li>
                        <li>
                            شروط بيع المنتجات منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه الع
                        </li>
                        <li>
                            شروط بيع المنتجات منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه الع
                        </li>
                    </ul>

                    <h4>
                        منذ إدخال وتسجيل
                    </h4>
                    <ul style="padding-bottom: 65px;">
                        <li>
                            شروط بيع المنتجات منذ إدخال وتسجيل
                        </li>
                        <li>
                            شروط بيع المنتجات منذ إدخال وتسجيل
                        </li>
                        <li>
                            شروط بيع المنتجات منذ إدخال وتسجيل
                        </li>
                        <li>
                            شروط بيع المنتجات منذ إدخال وتسجيل
                        </li>
                    </ul>

                    <p>
                        شروط بيع المنتجات منذ إدخال وتسجيل
                        شروط بيع المنتجات منذ إدخال وتسجيل
                        شروط بيع المنتجات منذ إدخال وتسجيل
                        شروط بيع المنتجات منذ إدخال وتسجيل

                    </p>
                </div>
            </div>
        </div>

        <!--<img class="bg-image" src="./assets/media/images/completed-projects/completed-projects-showpage-bg.jpg" alt="">-->
    </section>
    @include('main_site.sections.completed_projects')
    @include('main_site.sections.benefits')
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
            margin: 26,
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
    </script>
@endpush