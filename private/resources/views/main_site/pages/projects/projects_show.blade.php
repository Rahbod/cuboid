@extends('main_site.layouts.master')

@section('main')
    <section class="completedProjectsShowPage">
        <div class="container">
            <div class="row">
                <div class="col-md-5 order-2 order-lg-1">
                    @if($project->gallery && $project->gallery->gallery_items)
                        <div id="completedProjectsShowPage" class="owl-carousel gallery">
                            @foreach($project->gallery->gallery_items as $gallery_item)
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
                    <h2 class="sectionTitle">المشاريع</h2>
                    <h3>{{$project->name}}</h3>

                    {!! $project->description !!}

                    <h4>المواصفات الفنیه</h4>

                    <ul>
                        <li>العنوان : {{$project->sub_title}}</li>
                        @if($project->attributes)
                            @foreach($project->attributes as $key=>$value)
                                <li>{{__('projects.items.'.$key)}} : {{$value}}</li>
                            @endforeach
                        @endif
                    </ul>
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
            margin: 26,
            dots: true,
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
                576: {
                    items: 2
                },
                // breakpoint from 768 up
                768: {
                    items: 4,
                },
            }
        });
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