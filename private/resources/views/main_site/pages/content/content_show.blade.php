@extends('main_site.layouts.master')

@section('main')
    <section class="completedProjectsShowPage">
        <div class="container">
            <div class="row">
                <div class="col-md-5 order-2 order-lg-1">
                    @if($content->gallery && $content->gallery->gallery_items)
                        <div id="completedProjectsShowPage" class="owl-carousel gallery">
                            @foreach($content->gallery->gallery_items as $gallery_item)
                                <a title="" class="html5lightbox galleryItem" data-group="mygroup"
                                   data-thumbnail="{{asset($gallery_item->logo)}}"
                                   href="{{asset($gallery_item->image)}}">
                                    <img class="img-fluid" src="{{asset($gallery_item->image)}}"
                                         alt="">
                                    <div class="galleryItem__indicator">
                                        {{$gallery_item->name}}
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    @else
                        <a style="cursor: none;" title="" class="galleryItem" href="javascript:;">
                            <img class="img-fluid p-5"
                                 src="{{asset('/assets/site/media/images/completed-projects/gallery.svg')}}"
                                 alt="">
                            <div class="galleryItem__indicator">
                                هذا المشروع لا يحتوي على معرض.
                            </div>
                        </a>
                    @endif
                </div>
                <div class="col-md-5 order-1 order-lg-2">
                    <h2 class="sectionTitle">{{$content->title}}</h2>
                    <h5>{{$content->summary}}</h5>

                    {!! $content->content !!}
                </div>

            </div>
        </div>

        <img class="bg-image"
             src="{{asset('/assets/site/media/images/completed-projects/completed-projects-showpage-bg.jpg')}}" alt="">
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
                nav: false,
                items: 1,
                loop: true,
//            margin: 26,
                dots: true,
            });

        });
    </script>
@endpush