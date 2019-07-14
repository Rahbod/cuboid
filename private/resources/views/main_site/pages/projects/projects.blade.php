@extends('main_site.layouts.master')

@section('header')
    @include('main_site.frames.smallHeader')
@endsection


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
                        @foreach($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link {{$category->id == request()->category_id?'active':''}}"
                                   id="pills-{{$category->id}}-tab" href="{{url('/projects/category/'.$category->id)}}" role="tab"
                                   aria-controls="pills-{{$category->id}}" aria-selected="{{$category->id == request()->category_id?'true':'false'}}">{{$category->name}}</a>
                            </li>
                        @endforeach
                        <li class="nav-item ">
                            <a class="nav-link {{ !isset(request()->category_id)?'active':''}}" aria-selected="{{ !isset(request()->category_id)?'true':'false'}}"
                               href="{{url('projects')}}" role="tab" >جمیع المشاریع</a>
                        </li>
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
                                            <a href="{{url('/projects/show/'.$project->id)}}" class="btn btn-outline-light">
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

    <section class="benefits">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>
                        مزايا سقف الغیوبوید
                    </h2>
                </div>
                <div class="col-8">
                    <div class="d-flex justify-content-between">
                        <ul class="benefits--lists d-inline-block">
                            <li>
                                <img src="./assets/media/images/benefits/icon-1.png" alt="">
                                تشغيل السرعة
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-2.png" alt="">
                                التحكم في الاهتزاز
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-3.png" alt="">
                                تشوه السيطرة
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-4.png" alt="">
                                تشغيل السرعة
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-5.png" alt="">
                                تشغيل السرعة
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-6.png" alt="">
                                السقف الثابت ل
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-7.png" alt="">
                                تشغيل السرعة
                            </li>
                        </ul>
                        <ul class="benefits--lists d-inline-block">
                            <li>
                                <img src="./assets/media/images/benefits/icon-8.png" alt="">
                                تشغيل السرعة
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-9.png" alt="">
                                التحكم في الاهتزاز
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-10.png" alt="">
                                تشوه السيطرة
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-11.png" alt="">
                                تشغيل السرعة
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-12.png" alt="">
                                تشغيل السرعة
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-13.png" alt="">
                                السقف الثابت ل
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-14.png" alt="">
                                تشغيل السرعة
                            </li>
                            <li>
                                <img src="./assets/media/images/benefits/icon-15.png" alt="">
                                تشغيل السرعة
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </section>
    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex align-items-center">
                        <div class="questionMark ml-3">
                            <img src="./assets/media/images/faq/question-mark.png" class="img-fluid" alt="">
                        </div>
                        <div class="faq__descriptions flex-fill">
                            <h2>
                                أسئلة مكررة
                            </h2>
                            <p class="m-0">
                                معظم الأسئلة التي طرحها عملاؤنا هي إجاباتنا
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="owl-carousel" id="faqCarousel">
                        @foreach($faqs as $faq)
                        <div class="faq--item">
                            <h5>
                                {{$faq->question}}
                            </h5>
                            <p class="quotation">
                              {{$faq->answer}}
                            </p>

                            <div class="text-left">
                                <a href="{{url('faqs')}}" class="btn btn-outline-light">
                                    اکثر من
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
