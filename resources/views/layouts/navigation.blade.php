@php
    $menu = App\Models\Menu::where('parent_id', '=', 0)->orderBy('index', 'asc')->get();
@endphp
<nav role="navigation" class="widget-body">
    <ul class="acc-menu">
        <li class="nav-separator"><span>Explore</span></li>
        @foreach($menu as $menu)
            <li><a ><i class="{{ $menu->icon }}"></i><span>{{ $menu->title }}</span></a>
                @if(count($menu->childs))
                    <ul class="acc-menu">
                        @foreach($menu->childs as $child)
                            <li><a href="{{ url('/'.$child->url) }}">{{ $child->title }}</a></li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</nav>
