@extends('main_site.layouts.master')

@section('header')
    <header class="header landing">
        <div class="sticky-header navbar-expand-lg bg-dark">
            <div class="main-bar clearfix onepage">
                <div class="container">
                    @include('main_site.frames.main_nav')
                </div>
            </div>
        </div>
    </header>
@endsection