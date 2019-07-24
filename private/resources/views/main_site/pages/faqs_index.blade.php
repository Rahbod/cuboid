@extends('layouts.master')

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

    <div class="container">
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
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    @foreach($faqs as $faq)
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading{{$faq->id}}">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#{{$faq->id}}"
                                       aria-expanded="true" aria-controls="{{$faq->id}}">
                                        {{$faq->question}}
                                    </a>
                                </h4>

                            </div>
                            <div id="{{$faq->id}}" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="heading{{$faq->id}}">
                                <div class="panel-body">
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


@push('scripts')

@endpush