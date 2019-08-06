@extends('main_site.layouts.master')

@section('header')
    @include('main_site.frames.smallHeader')
@endsection

@section('main')
    <section class="text">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {{--<h2 class="sectionTitle">--}}
                    {{--حول غيوبويد--}}
                    {{--</h2>--}}
                    <h2 class="sectionTitle">شروط بيع المنتجات</h2>
                    <p>منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه العديد من المباني الخرسانية والمعدنية مع المبانيالسكنية
                        والتجارية والفنادق والمكتبات والمسجد والصناعي والمعارض ومواقف السيارات والمحطات.منذإدخال وتسجيل
                        سقف كيوبيد ، استفادت منه العديد من المباني الخرسانية والمعدنية مع المباني السكنيةوالتجارية
                        والفنادق والمكتبات والمسجد والصناعي والمعارض ومواقف السيارات والمحطات.منذ إدخال وتسجيلسقف كيوبيد
                        ، استفادت منه العديد من المباني الخرسانية والمعدنية مع المباني السكنية والتجاريةوالفنادق
                        والمكتبات والمسجد والصناعي والمعارض ومواقف السيارات والمحطات.منذ إدخال وتسجيل سقفكيوبيد ،
                        استفادت منه العديد من المباني الخرسانية والمعدنية مع المباني السكنية والتجارية والفنادقوالمكتبات
                        والمسجد والصناعي والمعارض ومواقف السيارات والمحطات.</p>

                    <ul class="pr-3" style="padding-top:35px;padding-bottom: 35px;">
                        <li>الحد الأدنى من الدرجة الأولى هو 1000.</li>
                        <li>المشتري سيكون مسؤولا عن العقد و الأحداث التشغيلية.</li>
                        <li>يتم اختبار عينات من منتجات Kyobud التي سبق التعاقد عليها وتحميلها والتحكم فيها
                            بحضورالمشتري.
                        </li>
                        <li>يتم التحكم في كل منتج بحضور ممثلين عن الأطراف ، وبعد التسليم ، يتم تسليمها إلىالمشتري.</li>
                        <li>إذا رأى المشتري أدنى ضرر قبل تأكيد وتسليم المنتجات أو أثناء الاختبار والتحميلوالتحكم فيها ،
                            يجب إرجاع المنتج التالف دون أي تكلفة.
                        </li>
                        <li>لن يتم تغطية المنتجات البلاستيكية بضمان عند التسليم للمشتري.</li>
                    </ul>

                    <h4>المواصفات الفنية </h4>
                    <ul class="pr-3" style="padding-top:35px;padding-bottom: 35px;">
                        <li>العنوان: نوشهر</li>
                        <li>الهيكل العظمي: الخرسانة</li>
                        <li>أطول حفرة: 14 مترا</li>

                        <li>قاعدة سقف الكيوبيد: 90،000 متر مربع</li>
                        <li>وقت التشغيل: صيف 95</li>
                    </ul>
                    <p>سقف كيوبيد ، استفادت منه العديد من المباني الخرسانية والمعدنية مع المباني السكنية
                        والتجاريةوالفنادق والمكتبات والمسجد والصناعي والمعارض ومواقف السيارات والمحطات.منذ إدخال وتسجيل
                        سقفكيوبيد ، استفادت منه العديد من المباني الخرسانية والمعدنية مع المباني السكنية والتجارية
                        والفنادقوالمكتبات والمسجد والصناعي والمعارض ومواقف السيارات والمحطات.منذ إدخال وتسجيل سقف كيوبيد
                        ،استفادت منه</p>

                    <p>العديد من المباني الخرسانية والمعدنية مع المباني السكنية والتجارية والفنادق والمكتبات
                        والمسجدوالصناعي والمعارض ومواقف السيارات والمحطات.</p>
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
            loop: true,
            autoplay: true,
            autoplayTimeout: 9000,
            autoplayHoverPause: true,
            rtl: true,
            dots: true,
            nav: true,
            items: 4,
            margin: 9,
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
            }
        });
        @endforeach
        @endisset
        $('#completedProjects--all-projects').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 9000,
            autoplayHoverPause: true,
            rtl: true,
            dots: true,

            nav: true,
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
            }
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
    </script>
@endpush