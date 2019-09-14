<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-7 px-0 px-lg-3">
                <div class="formContainer">
                    <form action="{{url(session('lang').'/'.'contact-us')}}" class="contactUsForm"
                          method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-12">
                                <h2 class="sectionTitle">
                                    إتصل بنا
                                </h2>
                            </div>
                            <div class="col-12">
                                <p class="" style="margin-bottom: 40px;">
                                    إذا كنت مهتمًا بالاتصال بنا ، يمكنك الاختيار من النموذج التالي وطرح أسئلتك.
                                    يمكنك أيضا الاتصال بأرقام الاتصال المدرجة.
                                </p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group pl-md-4">
                                <label for="">القسم المطلوب</label>
                                <select tabindex="1" name="relevant_section" class="form-control noBg" id="">
                                    @if(config('system.relevant_section'))
                                        <option selected>انتخب ...</option>
                                        @foreach(config('system.relevant_section') as$key=> $option)
                                            <option value="{{$key}}">{{$option}}</option>
                                        @endforeach
                                    @else
                                        <option selected>انتخب ...</option>
                                        <option value="1">مدويغ</option>
                                        <option value="2">المنتجات</option>
                                        <option value="3">بيع</option>
                                        <option value="4">دعم</option>
                                        <option value="5">متنوع</option>
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-6 form-group pr-md-4">
                                <label for="">الاسم الأول واللقب</label>
                                <input tabindex="2" name="name" type="text" class="form-control noBg" id="2"
                                       placeholder="الاسم الأول واللقب">
                            </div>
                            <div class="col-md-6 form-group pl-md-4">
                                <label for="">البريد الإلكتروني</label>
                                <input tabindex="3" name="email" type="email" class="form-control noBg" id="3"
                                       placeholder="example@email.com">
                            </div>
                            <div class="col-md-6 form-group pr-md-4">
                                <label for="">رقم الهاتف المحمول</label>
                                <input tabindex="4" name="phone" type="text" class="form-control noBg" id="4"
                                       placeholder="09xxxxxxxxx">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="text">وصف</label>
                                <textarea tabindex="5" name="content" class="form-control noBg" id="content"
                                          placeholder="وصف"
                                          required cols="30" rows="4"></textarea>
                                <div class="invalid-tooltip"></div>
                            </div>

                            <div class="form-group col-md-6 pl-md-4 mb-md-0 mb-3" tabindex="5">
                                <div class="d-flex justify-content-between" id="captcha_image">
                                    <div style="height: 38px;" class="captchaImageContainer">
                                        {!! captcha_img('math'); !!}
                                    </div>
                                    <a data-lang="{{session('lang')}}"
                                       href="javascript:;"
                                       class="renewCaptchaImage btn border ml-2">
                                        {{--<i class="far fa-redo"></i>--}}
                                        <img class="" src="{{asset('/assets/site/media/images/footer/redo.png')}}"
                                             alt="">
                                    </a>
                                    <input type="text" class="form-control securityCode"
                                           autocomplete="captcha"
                                           spellcheck="false"
                                           tabindex="6"
                                           name="captcha" required placeholder="تصوير امنيتي"
                                           id="captcha">
                                </div>

                                @if ($errors->has('captcha'))
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $errors->first('captcha') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group col-md-6 pr-md-4 mb-md-0">
                                <button tabindex="7" type="submit" class="btn submitBtn form-control">إرسال إلى القسم ذي
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
                                <a target="_blank"
                                   href="http://maps.google.com/?q={{urlencode(config('system.about_us.address'))}}"
                                   class="address flex-fill">
                                    {{config('system.about_us.address')}}
                                </a>
                            </div>
                        </li>
                        <li class="phoneNumbers" style="margin-bottom: 25px;margin-right: 32px;">
                            <h4 class="text-white sectionTitle">هواتف المكاتب المحلية</h4>
                            <ul>
                                @if(config('system.phone_numbers'))
                                    @foreach(config('system.phone_numbers') as $name=>$number)
                                        <li>
                                            <div class="d-flex justify-content-between">
                                                <span class="phoneText">{{$name}}</span>
                                                <a dir="ltr"
                                                   href="tel:{{ str_replace('-','',str_replace(' ','',$number)) }}"
                                                   class="phoneNumber">{{$number}}</a>
                                            </div>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </li>
                    </ul>

                    <div class="social">
                        <div class="d-flex">
                            <div class="flex-fill" style="padding-right: 30px;">
                                <span class="social__item">
                                    <img width="25" src="{{asset("assets/site/media/images/footer/share.svg")}}" alt="">
                                </span>

                                @php
                                    $social_networks=config('system.social_networks')
                                @endphp
                                @foreach($social_networks as $key=>$value)
                                    <a title="{{$value}}" href="{{$value}}" class="social__item">
                                        <i class="fab fa-{{$key}}"></i>
                                    </a>
                                @endforeach

                                {{--<a title="ينكدين" href="{{$social_networks['linkedin']}}" class="social__item">--}}
                                {{--<img src="{{asset("assets/site/media/images/footer/linkedin.png")}}" alt="">--}}
                                {{--</a>--}}
                                {{--<a title="الفيسبوك" href="{{$social_networks['facebook']}}" class="social__item">--}}
                                {{--<img src="{{asset("assets/site/media/images/footer/facebook.png")}}" alt="">--}}
                                {{--</a>--}}
                                {{--<a title="جوجل بلز" href="{{$social_networks['google-plus']}}" class="social__item">--}}
                                {{--<img src="{{asset("assets/site/media/images/footer/google-plus.png")}}" alt="">--}}
                                {{--</a>--}}

                                {{--<a title="تغريد" href="{{$social_networks['twitter']}}" class="social__item">--}}
                                {{--<img src="{{asset("assets/site/media/images/footer/twitter.png")}}" alt="">--}}
                                {{--</a>--}}

                                <a title="البريد الإلكتروني" href="mailto:{{config('system.about_us.email')}}"
                                   class="email">
                                    <img width="25" src="{{asset('assets/site/media/images/footer/email.svg')}}" alt="">&nbsp;&nbsp;&nbsp;{{strtoupper(config('system.about_us.email'))}}
                                </a>
                            </div>
                            <a href="{{url('/')}}" title="الصفحه الرئيسيه">
                                <img width="70" height="50" src="{{asset('assets/site/media/images/cuboid-logo.png')}}"
                                     alt="">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-7 px-0 px-lg-3">
                <div class="copyRight">
                    <div class="d-flex justify-content-between">
                        <div>
                            <span class="cuboid">© كيوبويد {{date('Y')}}</span> | جميع الحقوق محفوظة لشركة كيوبويد
                        </div>
                        <span class="designedBy text-left"><span class="">Design by</span>
                            <a title="Tarsim.inc" class="tarsiminc"
                               href="https://tarsiminc.com">   Tarsim.inc</a></span>
                    </div>

                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
    </div>
</footer>