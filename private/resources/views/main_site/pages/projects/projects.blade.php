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
    </style>
@endpush

@section('main')
    <section class="completedProjects completedProjectsPage">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>{{$page_title_description['title']}}</h2>

                    <p>{{$page_title_description['descriptions']}}</p>
                </div>
                <div class="col-md-6 my-md-auto">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist" style="justify-content: flex-end;">
                        <li class="nav-item ">
                            <a class="nav-link {{ !isset(request()->category_id)?'active':''}}"
                               aria-selected="{{ !isset(request()->category_id)?'true':'false'}}"
                               href="{{url(str_plural($type))}}"
                               role="tab">جميع {{$page_title_description['title']}}</a>
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
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" role="tabpanel">
                    <div class="container-fluid">
                        <div class="row">
                            @foreach($projects as $project)
                                <div class="col-3">
                                    <div class="card" style="margin-bottom: 20px;">
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
                                                    اکثر من
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                $
            </div>
        </div>
    </section>

    @include('main_site.sections.benefits')
    @include('main_site.sections.faqs')

@endsection

@push('scripts')
    <script>
        $('#faqCarousel').owlCarousel({
            rtl: true,
            nav: false,
            items: 1,
            loop: true,
//            margin: 26,
            dots: true,
        });
    </script>
@endpush