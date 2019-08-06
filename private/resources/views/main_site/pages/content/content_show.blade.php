@extends('main_site.layouts.master')



@section('main')
    <section class="completedProjectsShowPage contentsPage">
        <div class="container">
            <div class="row">
                <div class="col-md-5 pl-md-4 mb-5">
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
                        <div id="completedProjectsShowPageGallery" class="owl-carousel gallery">
                            <a title="" class="html5lightbox galleryItem" data-group="mygroup"
                               data-thumbnail="{{$content->image}}" data-width="436" data-height="700"
                               href="{{$content->image}}">
                                <img class="h-100" src="{{$content->image}}" alt="{{$content->title}}">

                                <div class="galleryItem__indicator">
                                    {{$content->title}}
                                </div>
                            </a>

                            <a style="cursor: pointer;" title="" class="html5lightbox galleryItem hasNoGallery"
                               data-width="436" data-height="700"
                               href="{{asset('/assets/site/media/images/cuboid-logo-gray.png')}}"
                               data-group="mygroup"
                               data-thumbnail="{{asset('/assets/site/media/images/cuboid-logo-gray.png')}}">
                                <img class="" src="{{asset('/assets/site/media/images/cuboid-logo-gray.png')}}" alt="">
                                @if($type == 'news')
                                    <div class="galleryItem__indicator">هذا الخبر لا يحتوي على معرض.</div>
                                @else
                                    <div class="galleryItem__indicator">هذا المقالة لا يحتوي على معرض.</div>

                                @endif
                            </a>
                        </div>
                    @endif
                </div>
                <div class="col-md-5 pr-md-4 pb-150">
                    <h2 class="sectionTitle">{{$content->title}}</h2>
                    <h5>{{$content->summary}}</h5>

                    {!! $content->content !!}
                </div>

            </div>
        </div>
        @if(isset($next_content))
            <div class="nextProject {{$type == 'news' ? 'newsPage' :'articlePage'}}">
                <a href="{{url('/'.str_plural($type).'/show/'.$next_content->id)}}"
                   class="" title="{{$next_content->title}}">
                    <img class="card-img-top" src="{{asset($next_content->image)}}"
                         alt="{{$next_content->title}}">
                </a>
            </div>
        @endif

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
            loop: true,
            autoplay: true,
            autoplayTimeout: 9000,
            autoplayHoverPause: true,

            rtl: true,
            nav: true,
            items: 4,
            margin: 10,
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
            $('#completedProjects--all-projects').owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 9000,
                autoplayHoverPause: true,

                rtl: true,
                nav: true,
                items: 4,
                margin: 10,
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
            $('#completedProjectsShowPageGallery').owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 9000,
                autoplayHoverPause: true,

                rtl: true,
                nav: true,
                items: 1,
//            margin: 26,
                dots: false,
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
        });
    </script>
@endpush