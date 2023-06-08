<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="ti-home"></i><span class="badge rounded-pill bg-primary float-end">2</span>
                        <span>@lang('Dashboard')</span>
                    </a>
                </li>
                <li class="menu-title">Content</li>
                <li class="{{ menuActive('admin.car-brand.*', 'admin.car-brand.model.*') }}">
                    <a href="{{ route('admin.car-brand.index') }}" class="waves-effect">
                        <i class="ti-car"></i>
                        <span>@lang('Avtomobil markaları')</span>
                    </a>
                </li>

                <li class="{{ menuActive('admin.gear*', 'admin.market.*', 'admin.transmission.*', 'admin.color.*', 'admin.fuel-type.*', 'admin.body-type.*') }}">
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-archive"></i>
                        <span> Avto </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ menuActive('admin.gear.*') }}"><a href="{{ route('admin.gear.index') }}">@lang('Ötürücülər')</a></li>
                        <li class="{{ menuActive('admin.transmission.*') }}"><a href="{{ route('admin.transmission.index') }}">@lang('Sürətlər Qutuları')</a></li>
                        <li class="{{ menuActive('admin.market.*') }}"><a href="{{ route('admin.market.index') }}">@lang('Bazarlər')</a></li>
                        <li class="{{ menuActive('admin.color.*') }}"><a href="{{ route('admin.color.index') }}">@lang('Rənglər')</a></li>
                        <li class="{{ menuActive('admin.fuel-type.*') }}"><a href="{{ route('admin.fuel-type.index') }}">@lang('Yanacaq Növləri')</a></li>
                        <li class="{{ menuActive('admin.class-type.*') }}"><a href="{{ route('admin.class-type.index') }}">@lang('Klasmanlar')</a></li>
                        <li class="{{ menuActive('admin.body-type.*') }}"><a href="{{ route('admin.body-type.index') }}">@lang('Ban Növləri')</a></li>
                        <li class="{{ menuActive('admin.store-type.*') }}"><a href="{{ route('admin.store-type.index') }}">@lang('Mağaza Tipləri')</a></li>
                    </ul>
                </li>
                <li class="{{ menuActive('admin.region*', 'admin.number-region.*') }}">
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-archive"></i>
                        <span> Location </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ menuActive('admin.region.*') }}"><a href="{{ route('admin.region.index') }}">@lang('Regionlar')</a></li>
                        <li class="{{ menuActive('admin.number-region.*') }}"><a href="{{ route('admin.number-region.index') }}">@lang('Nömrə Regionları')</a></li>
                    </ul>
                </li>

                <li class="menu-title">@lang('Content')</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-archive"></i>
                        <span> Authentication </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">@lang('Avtomobil markaları')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-more"></i>
                        <span>Multi Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);">Level 1.1</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">Level 2.1</a></li>
                                <li><a href="javascript: void(0);">Level 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                {{--                <li>--}}
                {{--                    <a href="javascript: void(0);" class="has-arrow waves-effect">--}}
                {{--                        <i class="ti-archive"></i>--}}
                {{--                        <span> Authentication </span>--}}
                {{--                    </a>--}}
                {{--                    <ul class="sub-menu" aria-expanded="false">--}}
                {{--                        <li><a href="pages-login.html">Login 1</a></li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
