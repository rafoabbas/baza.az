<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ti-home"></i><span class="badge rounded-pill bg-primary float-end">2</span>
                        <span>@lang('Dashboard')</span>
                    </a>
                </li>

                <li class="menu-title">@lang('Sms işlemleri')</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-archive"></i>
                        <span> Authentication </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-login.html">Login 1</a></li>
                        <li><a href="pages-login-2.html">Login 2</a></li>
                        <li><a href="pages-register.html">Register 1</a></li>
                        <li><a href="pages-register-2.html">Register 2</a></li>
                        <li><a href="pages-recoverpw.html">Recover Password 1</a></li>
                        <li><a href="pages-recoverpw-2.html">Recover Password 2</a></li>
                        <li><a href="pages-lock-screen.html">Lock Screen 1</a></li>
                        <li><a href="pages-lock-screen-2.html">Lock Screen 2</a></li>
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
