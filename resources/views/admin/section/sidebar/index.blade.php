<!-- SIDE MENU -->
<div id="skin-select">
    <div id="logo">
        <h1>{{ Auth::user()->role->name }}</h1>
    </div>
    <a id="toggle">
        <span class="entypo-menu"></span>
    </a>
    <div class="dark">
        <form action="#">
                <span>
                    <input type="text" name="search" value="" class="search rounded id_search" placeholder="Search Menu..." autofocus />
                </span>
        </form>
    </div>
    <div class="search-hover">
        <form id="demo-2">
            <input type="search" placeholder="Search Menu..." class="id_search">
        </form>
    </div>
    <div class="skin-part">
        <div id="tree-wrap">
            <div class="side-bar">
                <ul class="topnav menu-left-nest">
                    <li>
                        <a href="#" style="border-left:0px solid!important;" class="title-menu-left">
                            <span class="design-kit"></span>
                            <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
                        </a>
                    </li>
                    @forelse(MenuHelpers::menu() as $menu)
                        @if (is_null($menu->parent))
                            @if ($menu->children->count()>0)
                                <li>
                                    <a class="tooltip-tip ajax-load" href="#" title="{{ $menu->name }}">
                                        <i class="{{ $menu->{'fa-icon'} }}"></i>
                                        <span>{{ $menu->name }}</span>
                                    </a>
                                    <ul style="display: @if(MenuHelpers::childHasMenu($menu->children)) block @else none @endif">
                                        @forelse($menu->children as $children)
                                            <li>
                                                <a class="tooltip-tip2 ajax-load" href="{{ route('admin.'.$children->alias.'.index') }}" title="{{ $children->name }}"><i class="{{ $children->{'fa-icon'} }}"></i><span>{{ $children->name }}</span></a>
                                            </li>
                                        @empty
                                        @endforelse
                                    </ul>
                                </li>
                            @else
                                <li>
                                    <a class="tooltip-tip ajax-load" href="{{ route('admin.'.$menu->alias.'.index') }}" title="{{ $menu->name }}">
                                        <i class="{{ $menu->{'fa-icon'} }}"></i>
                                        <span>{{ $menu->name }}</span>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @empty
                    @endforelse
                    <li>
                        <a class="tooltip-tip " href="{{ route('admin.logout') }}" title="login">
                            <i class="icon-download"></i>
                            <span>Logout</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END OF SIDE MENU -->