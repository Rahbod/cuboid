@extends('main_site.layouts.master')
@section('header')
    @include('main_site.frames.header')
@endsection

@push('styles')
    <style>
        .panel-title > a:before {
            float: right !important;
            font-family: "Font Awesome 5 Pro";
            content: "\f068";
            padding-right: 5px;
        }

        .panel-title > a.collapsed:before {
            float: right !important;
            content: "\f067";
        }

        .panel-title > a:hover,
        .panel-title > a:active,
        .panel-title > a:focus {
            text-decoration: none;
        }
    </style>
@endpush

@section('main')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="faq__descriptions">
                    <h2 class="sectionTitle">
                        أسئلة مكررة
                    </h2>
                    <p class="">
                        معظم الأسئلة التي طرحها عملاؤنا هي إجاباتنا
                    </p>
                </div>
            </div>
            <div class="col-md-8 mx-auto">
                <div id="accordion">
                    @foreach($faqs as $faq)
                        <div class="card">
                            <div class="card-header" id="heading{{$faq->id}}">
                                <h5 class="mb-0">
                                    <button class="btn btn-link {{$loop->first ? '' : 'collapsed'}}"
                                            data-toggle="collapse" data-target="#collapse{{$faq->id}}"
                                            aria-expanded="{{$loop->first ? 'true' : 'false'}}"
                                            aria-controls="collapse{{$faq->id}}">
                                        {{$faq->question}}
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse{{$faq->id}}" class="collapse {{$loop->first ? 'show' : ''}}"
                                 aria-labelledby="heading{{$faq->id}}" data-parent="#accordion">
                                <div class="card-body">
                                    {!! $faq->answer !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
