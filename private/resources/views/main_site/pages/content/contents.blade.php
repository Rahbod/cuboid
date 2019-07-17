@extends('main_site.layouts.master')

@section('main')
    <section class="completedProjects completedProjectsPage">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>المشاريع المنجزة</h2>

                    <p>المشاريع المنجزة منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه العد
                        المشاريع المنجزة منذ إدخال وتسجيل سقف كيوبيد ، استفادت منه العد
                    </p>
                </div>
                <div class="col-md-6 my-md-auto">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist" style="justify-content: flex-end;">
                        <li class="nav-item ">
                            <a class="nav-link {{ !isset(request()->category_id)?'active':''}}" aria-selected="{{ !isset(request()->category_id)?'true':'false'}}"
                               href="{{url('projects')}}" role="tab" >جمیع المشاریع</a>
                        </li>
                        @foreach($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link {{$category->id == request()->category_id?'active':''}}"
                                   id="pills-{{$category->id}}-tab" href="{{url('/'.str_plural($type).'/category/'.$category->id)}}" role="tab"
                                   aria-controls="pills-{{$category->id}}" aria-selected="{{$category->id == request()->category_id?'true':'false'}}">{{$category->name}}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" role="tabpanel">
                    <div class="container-fluid">
                        <div class="row">
                            @foreach($contents as $content)
                                <div class="col-3">
                                    <div class="card" style="margin-bottom: 20px;">
                                        <img class="card-img-top" src="{{$content->image}}"
                                             alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">{{$content->title}}</h4>
                                            <p class="card-text">
                                                {{$content->summary}}
                                            </p>
                                        </div>
                                        <div class="moreDetails">
                                            <h4 class="card-title text-white">{{$content->title}}</h4>

                                            <p class="card-text">
                                                {!! $content->content !!}
                                            </p>
                                            <div class="text-right moreBtn">
                                                <a href="{{url('/'.str_plural($type).'/show/'.$content->id)}}" class="btn btn-outline-light">
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
            </div>
        </div>
    </section>

    @include('main_site.sections.benefits')
    @include('main_site.sections.faqs')

@endsection
