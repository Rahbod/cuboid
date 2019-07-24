<nav id="sidebar">
    <div class="sidebar-header">
        {{--<h4 class="text-white">language</h4>--}}
        <h4 class="text-left">
            <a class="text-white" href="{{url('/')}}"
               title="كيوبويد">كيوبويد</a>
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
