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
            {{--{{dd($menus)}}--}}
            @if(isset($menus) && count($menus) > 0)
                @foreach($menus as $menu)
                    <li class="{{$loop->first ? 'active' : ''}}"><a href="{{$menu['link']}}" title="{{$menu['name']}}">{{$menu['name']}}</a></li>
                @endforeach
            @else
                <li class="active"><a href="void::">الصفحة الرئيسية</a></li>
                <li class=""><a href="void:;">حول غيوبويد</a></li>
                <li class=""><a href="void:;">الأخبار</a></li>
                <li class=""><a href="void:;"> المنتجات</a></li>
                <li class=""><a href="void:;">الخدمات مبيعات</a></li>
                <li class=""><a href="void:;">المشاريع</a></li>
                <li class=""><a href="void:;">اتصل بنا</a></li>

            @endif
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