<header class="header {{isset($sub_page) ? $sub_page :'' }}">
    <div class="sticky-header navbar-expand-lg bg-dark fixed-top">
        <div class="main-bar clearfix onepage">
            <div class="container">
                @include('main_site.frames.main_nav')
            </div>
        </div>
    </div>
    @include('main_site.frames.smallHeader')

</header>