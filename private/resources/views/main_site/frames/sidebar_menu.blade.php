<nav id="sidebar">
    <div class="sidebar-header">
        {{--<h4 class="text-white">language</h4>--}}
        <h4 class="text-right">
            <a title="الصفحة الرئيسية" href="{{url('/')}}" class="d-flex align-items-center">
                <img width="50" class="ml-2" src="{{asset('/assets/site/media/images/cuboid-logo-white.png')}}" alt="الصفحة الرئيسية">
                <div class="d-inline-block">
                    <p class="navUpTitle text-white">سقف الوفل</p>
                    <p style="font-size: 19px;" class="navTitle text-white">كيوبويد</p>
                </div>
            </a>

            {{--<a class="text-white" href="{{url('/')}}"--}}
               {{--title="كيوبويد">كيوبويد</a>--}}
        </h4>
    </div>

    <div id="dismiss">
        <i class="fas fa-arrow-left"></i>
    </div>

    <ul class="list-unstyled">
        @if(isset($menus) && count($menus) > 0)
            @foreach($menus as $item)
                @if(isset($item['children']) && count($item['children']) >0)
                    @foreach($item['children'] as $child)
                        <li>
                            <a title="{{$child['name']}}"
                               class="menu-item submenu"
                               href="#submenu-{{$child['id']}}"
                               data-toggle="collapse" aria-expanded="false">
                                {{$item['name']}}
                            </a>
                            <ul class="collapse list-unstyled" id="submenu-{{$child['id']}}">
                                <li>
                                    <a title="{{$child['name']}}" class="menu-item"
                                       href="{{$child['link']}}">{{$child['name']}}</a>
                                </li>
                            </ul>
                        </li>
                    @endforeach
                @else
                    <li>
                        <a class="menu-item" href="{{$item['link']}}"
                           title="{{$item['name']}}">{{$item['name']}}</a>
                    </li>
                @endif
            @endforeach
        @endif
    </ul>

</nav>
