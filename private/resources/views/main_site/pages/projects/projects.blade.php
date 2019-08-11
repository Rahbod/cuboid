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
    <section class="completedProjects completedProjectsPage">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="sectionTitle">{{$page_title_description['title']}}</h2>

                    <p class="sectionDescription">{{$page_title_description['descriptions']}}</p>
                </div>
                <div class="col-md-6 my-md-auto">
                    @if($type != 'product')
                        <div class="menu d-lg-none navigation mb-5">
                            <a class="menu-trigger"></a>
                            <ul class="nav navbar nav-left" id="category-mobile-menu">
                                <li class="nav-item active">
                                    <a class="nav-link {{ !isset(request()->category_id)?'active':''}}"
                                       aria-selected="{{ !isset(request()->category_id)?'true':'false'}}"
                                       href="{{url(str_plural($type))}}"
                                       role="tab">جميع المشاريع</a>
                                </li>
                                @foreach($categories as $category)
                                    <li class="nav-item">
                                        <a class="nav-link {{$category->id == request()->category_id?'active':''}}"
                                           id="pills-{{$category->id}}-tab"
                                           href="{{url('/'.str_plural($type).'/category/'.$category->id)}}" role="tab"
                                           aria-controls="pills-{{$category->id}}"
                                           aria-selected="{{$category->id == request()->category_id?'true':'false'}}">{{$category->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <ul class="nav nav-pills  d-none d-lg-flex" id="pills-tab" role="tablist"
                            style="justify-content: flex-end;">
                            <li class="nav-item ">
                                <a class="nav-link {{ !isset(request()->category_id)?'active':''}}"
                                   aria-selected="{{ !isset(request()->category_id)?'true':'false'}}"
                                   href="{{url(str_plural($type))}}"
                                   role="tab">جميع المشاريع</a>
                            </li>
                            @foreach($categories as $category)
                                <li class="nav-item">
                                    <a class="nav-link {{$category->id == request()->category_id?'active':''}}"
                                       id="pills-{{$category->id}}-tab"
                                       href="{{url('/'.str_plural($type).'/category/'.$category->id)}}" role="tab"
                                       aria-controls="pills-{{$category->id}}"
                                       aria-selected="{{$category->id == request()->category_id?'true':'false'}}">{{$category->name}}</a>
                                </li>
                            @endforeach

                        </ul>
                    @endif
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" role="tabpanel">
                    <div class="container-fluid">
                        <div class="row" id="projectsContainer">
                            @foreach($projects as $project)
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card">
                                        <img class="card-img-top" src="{{$project->image}}"
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
                                                {!! $project->description !!}
                                            </p>
                                            <div class="text-right moreBtn">
                                                <a title="{{$project->title}}"
                                                   href="{{url('/'.str_plural($type).'/show/'.$project->id)}}"
                                                   class="btn btn-outline-light">
                                                    اكثر من
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        @if($projects->lastPage() > 1 )
                            <div class="row">
                                <div class="col-12 text-center">
                                    <a data-lastPage="{{$projects->lastPage()}}" style="display: inline-block;"
                                       title="اكثر من ..."
                                       href="{{$projects->nextPageUrl()}}"
                                       class="btn btn-outline-light moreProjects pagination">
                                        اكثر من ...
                                    </a>
                                </div>
                            </div>
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
        $('#faqCarousel').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 9000,
            autoplayHoverPause: true,
            rtl: true,
            items: 1,
            dots: true,
        });

        $('html').click(function(e) {
            console.log($('#category-mobile-menu'));
            console.log($('#faqCarousel'));
            console.log($(e.target));
            //if clicked element is not your element and parents aren't your div
//            if(!$(e.target).closest("#category-mobile-menu").length){
////            if (e.target.id != 'category-mobile-menu' && $(e.target).parents('#category-mobile-menu').length == 0) {
//                $('#category-mobile-menu').css({
//                    'opacity':1,
//                    'visibility':'visible'
//                })
//            }
        });
    </script>
@endpush