<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="formContainer">
                    <form action="" class="contactUsForm" method="post" enctype="multipart/form-data">
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
                                        <img src="{{asset('assets/media/images/footer/captcha.png')}}">
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
                                <button class="btn submitBtn form-control">إرسال إلى القسم ذي الصلة</button>
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
                                <img class="ml-2 h-100" src="{{asset('assets/media/images/footer/location-icon.png')}}" alt="">
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
                                    <img src="{{asset('assets/media/images/footer/linkedin.png')}}" alt="">
                                </a>
                                <a href="void:;" class="social__item">
                                    <img src="{{asset('assets/media/images/footer/facebook.png')}}" alt="">
                                </a>
                                <a href="void:;" class="social__item">
                                    <img src="{{asset('assets/media/images/footer/google-plus.png')}}" alt="">
                                </a>
                                <a href="void:;" class="social__item">
                                    <img src="{{asset('assets/media/images/footer/twitter.png')}}" alt="">
                                </a>

                                <a href="void:;" class="email">
                                    <img src="{{asset('assets/media/images/footer/email.png')}}" alt="">
                                    INFO@CUBOID.COM
                                </a>
                            </div>
                            <a href="void:;">
                                <img src="{{asset('assets/media/images/footer/CUBOID.png')}}" alt="">
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