@extends('main_site.layouts.master')

@section('header')
    @include('main_site.frames.smallHeader')
@endsection

@section('main')

    <section class="text">
        <div class="container">
            <div class="row">
                @if(isset($page))
                    <div class="col-md-5">
                        <img src="{{$page['image']}}" class="img-fluid" alt="{{$page['title']}}">
                    </div>
                    <div class="col-md-7">
                        <h2 class="mt-3 mt-md-0 sectionTitle">
                            {{$page['title']}}
                        </h2>
                        <p>
                            {!! $page['text'] !!}
                        </p>
                    </div>
                @endif
            </div>
        </div>
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