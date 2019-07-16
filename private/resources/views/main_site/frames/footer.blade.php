<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-7">
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
            <div class="col-12 col-md-5">
                <div class="addressContainer">
                    <ul style="width: 380px;">
                        <li class="mb-4">
                            <div class="d-flex">
                                <img class="ml-2 h-100"
                                     src="{{asset('assets/site/media/images/footer/location-icon.png')}}" alt="">
                                <span class="address flex-fill">
                                                            طهران ، الجادة أفريكا ، سابا الجادة ، رقم 42 ، الوحدة 21 021-22
                            </span>
                            </div>
                        </li>
                        <li class="phoneNumbers" style="margin-bottom: 25px;margin-right: 32px;">
                            <h4 class="text-white sectionTitle">هواتف المكاتب المحلية</h4>
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
                                <a href="void:;" class="social__item">
                                    <img src="{{asset('assets/site/media/images/footer/linkedin.png')}}" alt="">
                                </a>
                                <a href="void:;" class="social__item">
                                    <img src="{{asset('assets/site/media/images/footer/facebook.png')}}" alt="">
                                </a>
                                <a href="void:;" class="social__item">
                                    <img src="{{asset('assets/site/media/images/footer/google-plus.png')}}" alt="">
                                </a>
                                <a href="void:;" class="social__item">
                                    <img src="{{asset('assets/site/media/images/footer/twitter.png')}}" alt="">
                                </a>

                                <a href="void:;" class="email">
                                    <img src="{{asset('assets/site/media/images/footer/email.png')}}" alt="">
                                    INFO@CUBOID.COM
                                </a>
                            </div>
                            <a href="void:;">
                                <img src="{{asset('assets/site/media/images/footer/CUBOID.png')}}" alt="">
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
                        <span class="cuboid">© كيوبيد 1396</span> | جميع الحقوق محفوظة لشركة كيوبید
                    </div>
                    <span class="designedBy"><span class="">Design by</span>  Tarsim.inc</span>
                </div>
                <div>
                    جميع الحقوق محفوظة لشركة كيوبید

                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
    </div>
</footer>