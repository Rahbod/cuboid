@extends('main_site.layouts.master')

@push('styles')
    <style>
        .news .nav.nav-pills .nav-link {
            color: #000;
            border-bottom: 1px solid transparent;
            background-color: transparent;
            border-radius: 0;
            padding-bottom: 1px;
            padding-left: 0;
            padding-right: 0;
            margin-left: 0.5rem;
            margin-right: 0.5rem;
        }

        .news .nav .nav-link:hover, .news .nav .nav-link:focus {
            color: #f68b1f !important;
            border-bottom: 1px solid #f68b1f;
        }

        .news {
            -webkit-background-size: cover;
            background-size: cover;
        }
    </style>
@endpush

@section('main')
    <section class="news">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="sectionTitle">{{$page_title_description['title']}}</h2>

                    <p class="sectionDescription">{{$page_title_description['descriptions']}}</p>
                </div>
                <div class="col-md-6 my-md-auto">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist" style="justify-content: flex-end;">
                        <li class="nav-item ">
                            <a class="nav-link {{ !isset(request()->category_id)?'active':''}}"
                               aria-selected="{{ !isset(request()->category_id)?'true':'false'}}"
                               href="{{url('projects')}}" role="tab">جميع {{$page_title_description['title']}}</a>
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

                <div class="col-12 px-md-0">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" role="tabpanel">
                            <div class="container-fluid px-30">
                                <div class="row">
                                    @foreach($contents as $content)
                                        <div class="col-12 col-sm-4 col-md-3 px-10">
                                            <div class="cardOuter">
                                                <div class="card">
                                                    <img class="card-img-top" src="{{$content->image}}"
                                                         alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">{{$content->title}}</h4>
                                                        <p class="card-text">{{$content->summary}}
                                                        </p>
                                                    </div>
                                                    <a title="{{$content->title}}"
                                                       href="{{url('/'.str_plural($type).'/show/'.$content->id)}}"
                                                       class="btn btn-outline-light">
                                                        اكثر من
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                @if((int)($contents->total() / $contents->perPage()) > 0 )
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <a title="اكثر من ..." href="javascript:;"
                                               class="btn btn-outline-light moreProjects">
                                                اكثر من ...
                                            </a>
                                        </div>
                                    </div>
                                @endif

                            </div>
                        </div>
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
            rtl: true,
            nav: false,
            items: 1,
            loop: true,
//            margin: 26,
            dots: true,
        });

    </script>
@endpush