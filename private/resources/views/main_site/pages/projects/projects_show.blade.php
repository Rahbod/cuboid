@extends('main_site.layouts.master')

@push('styles')
    <style>
        .completedProjects .card-body {
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
            background: #fff;
            padding: 20px 20px 35px;
        }

        .moreDetails {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            background: #000;
            opacity: 0;
            padding: 45px 20px 80px;
            color: #fff;
            z-index: -1;
            bottom: 0;
        }

        .moreDetails p {
            color: #fff;
        }
    </style>
@endpush

@section('main')
    <section class="completedProjectsShowPage">
        <div class="container">
            <div class="row">
                <div class="col-md-5 pl-md-4 mb-5">
                    <h2 class="sectionTitle d-md-none">{{$project->title}}</h2>
                    <h3 class="sectionTitle d-md-none mb-5">{{$project->name}}</h3>

                    @if($project->gallery && $project->gallery->gallery_items)
                        <div id="completedProjectsShowPageGallery" class="owl-carousel gallery">
                            <a title="{{$project->title}}" class="html5lightbox galleryItem" data-group="mygroup"
                               data-thumbnail="{{$project->image}}" data-width="436" data-height="700"
                               href="{{$project->image}}">
                                <img class="h-100" src="{{$project->image}}" alt="{{$project->title}}">

                                <div class="galleryItem__indicator">
                                    {{$project->title}}
                                </div>
                            </a>

                            @foreach($project->gallery->gallery_items as $gallery_item)
                                <a title="{{$project->title}}" class="html5lightbox galleryItem" data-group="mygroup"
                                   data-thumbnail="{{asset($gallery_item->logo)}}" data-width="436" data-height="700"
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
                               data-thumbnail="{{$project->image}}" data-width="436" data-height="700"
                               href="{{$project->image}}">
                                <img class="h-100" src="{{$project->image}}" alt="{{$project->title}}">

                                <div class="galleryItem__indicator">
                                    {{$project->title}}
                                </div>
                            </a>

                            {{--<a style="cursor: pointer;" title="" class="html5lightbox galleryItem hasNoGallery"--}}
                               {{--data-width="436" data-height="700"--}}
                               {{--href="{{asset('/assets/site/media/images/cuboid-logo-gray.png')}}"--}}
                               {{--data-group="mygroup"--}}
                               {{--data-thumbnail="{{asset('/assets/site/media/images/cuboid-logo-gray.png')}}">--}}
                                {{--<img class="" src="{{asset('/assets/site/media/images/cuboid-logo-gray.png')}}" alt="">--}}
                                {{--@if($type == 'project')--}}
                                    {{--<div class="galleryItem__indicator">هذا المشروع لا يحتوي على معرض.</div>--}}
                                {{--@else--}}
                                    {{--<div class="galleryItem__indicator">هذا المنتچ لا يحتوي على معرض.</div>--}}

                                {{--@endif--}}
                            {{--</a>--}}
                        </div>
                    @endif
                </div>
                <div class="col-md-5 pr-md-4 pb-150">
                    <h2 class="sectionTitle d-none d-md-block">{{$project->title}}</h2>
                    <h3 class="sectionTitle d-none d-md-block">{{$project->name}}</h3>
                    <p class="mb-3"> {!! $project->description !!}</p>
                    <h4 style="margin-top: 60px;margin-bottom: 0;">المواصفات الفنيه</h4>
                    <ul>
                        @if($project->attributes)
                            @foreach($project->attributes as $key=>$value)
                                <li>{{__('projects.items.'.$key)}} : {{$value}}</li>
                            @endforeach
                        @endif
                    </ul>
                </div>

            </div>
        </div>
        @if(isset($next_project))
            <div class="nextProject">
                <a href="{{url('/'.str_plural($type).'/show/'.$next_project->id)}}"
                   class="" title="{{$next_project->title}}">
                    <img class="card-img-top" src="{{asset($next_project->image)}}"
                         alt="{{$next_project->title}}">
                </a>
            </div>
        @endif

        <img class="bg-image"
             src="{{asset('/assets/site/media/images/completed-projects/completed-projects-showpage-bg.jpg')}}" alt="">
    </section>

    <section class="completedProjects relatedProjects">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if($type == 'project')
                        <h2 style="padding-right: 20px;" class="content--header">المشاريع ذات الصلة</h2>
                    @else
                        <h2 style="padding-right: 20px;" class="content--header">المشاريع</h2>
                    @endif

                    <div id="relatedProjects" class="owl-carousel">
                        @if(!$related_projects->isEmpty())
                            @foreach($related_projects as $project)
                                <div class="card">
                                    <img class="card-img-top" src="{{asset($project->image)}}"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$project->title}}</h4>
                                        <h5 class="card-sub-title">{{$project->sub_title}}</h5>
                                        <p class="card-text">
                                            {{$project->summary}}
                                        </p>
                                    </div>
                                    <div class="moreDetails">
                                        <h4 class="card-title text-white">{{$project->title}}</h4>
                                        <h5 class="card-sub-title text-white">{{$project->sub_title}}</h5>
                                        <p class="card-text">
                                            {{$project->description}}
                                        </p>
                                        <div class="text-right moreBtn">
                                            <a title="{{$project->title}}"
                                               href="{{url('/projects/show/'.$project->id)}}"
                                               class="btn btn-outline-light">
                                                اكثر من
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('main_site.sections.benefits')
    @include('main_site.sections.faqs')
@endsection

@push('scripts')
    <script>
        $('#relatedProjects').owlCarousel({
            nav: true,
            margin: 9,

            loop: true,
            autoplay: true,
            autoplayTimeout: 9000,
            autoplayHoverPause: true,
            rtl: true,
            items: 4,
            dots: true,
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



    </script>
@endpush