@extends('main_site.layouts.master')

@section('main')
    <section class="text">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 style="font-weight: bold; font-size: 45px;">
                        الاخبار
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

        $('#completedProjectsShowPage').owlCarousel({
            rtl: true,
            nav: true,
            items: 1,
            loop: true,
            margin: 26,
            dots: false,
        });

    </script>
@endpush