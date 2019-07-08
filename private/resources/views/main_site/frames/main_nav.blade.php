<nav class="header-nav navbar p-0">
    <div>
        <button id="sidebarCollapse" class="navbar-toggler" type="button">
            <span class="navbar-toggler-lines"></span>
            <span class="navbar-toggler-lines"></span>
            <span class="navbar-toggler-lines"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ml-auto rightMenu">
            <li class="active"><a href="javascript:;">الصفحة الرئيسية</a></li>
            <li class=""><a href="javascript:;">حول غیوبوید</a></li>
            <li class=""><a href="javascript:;">الأخبار</a></li>
            <li class=""><a href="javascript:;"> المنتجات</a></li>
            <li class=""><a href="javascript:;">الخدمات مبیعات</a></li>
            <li class=""><a href="javascript:;">المشاریع</a></li>
            <li class=""><a href="javascript:;">اتصل بنا</a></li>
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