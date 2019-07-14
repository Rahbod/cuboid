<nav class="header-nav navbar p-0">
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
        <!--<span class="navbar-toggler-icon"></span>-->
        <span class="navbar-toggler-lines"></span>
        <span class="navbar-toggler-lines"></span>
        <span class="navbar-toggler-lines"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ml-auto rightMenu">
            <li class="active"><a href="void::">الصفحة الرئيسية</a></li>
            <li class=""><a href="void:;">حول غيوبويد</a></li>
            <li class=""><a href="void:;">الأخبار</a></li>
            <li class=""><a href="void:;"> المنتجات</a></li>
            <li class=""><a href="void:;">الخدمات مبیعات</a></li>
            <li class=""><a href="void:;">المشاریع</a></li>
            <li class=""><a href="void:;">اتصل بنا</a></li>
            <li class="d-none"><a href="void:;">Pages <i class="fa fa-chevron-down"></i></a>
                <ul class="sub-menu">
                    <li><a href="about-us.html" class="dez-page">About Us</a></li>
                    <li><a href="hotel.html">Hotels</a></li>
                    <li><a href="void:;">Booking Details</a></li>
                    <li><a href="place.html">Places</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="void:;">Packages</a></li>
                    <li><a href="calendar.html">Calendar <span class="new-page menu-new">New</span></a>
                    </li>
                    <li><a href="coming-soon.html" class="dez-page">Coming Soon</a></li>
                    <li><a href="error-404.html" class="dez-page">Error 404</a></li>
                    <li><a href="login.html" class="dez-page">Login</a></li>
                    <li><a href="register.html" class="dez-page">Register</a></li>
                </ul>
            </li>
        </ul>

        <ul class="nav navbar-nav mr-auto leftMenu">
            @php
                $social_networks=config('system.social_networks')
            @endphp
            @foreach($social_networks as $key=>$value)
                <li class=""><a href="{{$value}}"><i class="fab fa-{{$key}}"></i></a></li>
            @endforeach
        </ul>
    </div>
</nav>