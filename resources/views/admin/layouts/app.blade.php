<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Dashboard') - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Rauf Abbas" name="author">
    <!-- CSRF Token -->
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    @stack('css')
    <!-- Css loader -->
    <link rel="stylesheet" href="{{ asset('assets/libs/css-loader/dist/loader-double.css') }}" type="text/css">
    <!-- colorpicker -->
    <link rel="stylesheet" href="{{ asset('assets/libs/spectrum-colorpicker2/spectrum.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Select2 css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/select2/css/select2.min.css') }}" type="text/css">
    <!-- Toastr Css -->
    <link href="{{ asset('assets/libs/jquery-toast-plugin/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Sweetalert2 Css -->
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.css?v=' . config('app.assets.version')) }}" id="app-style" rel="stylesheet" type="text/css">
    @stack('style')
    <style>
        .loader.is-active {
            background-color: rgba(0, 0, 0, 0.54);
        }
    </style>
</head>
<body>
<div id="layout-wrapper">
    <div class="loader loader-double"></div>
    @include('admin.layouts.particles.page-topbar')
    @include('admin.layouts.particles.vertical-menu')
    <div class="main-content">
        <div class="page-content">
            <div class="@stack('container', 'container-fluid')">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h6 class="page-title">@stack('title', 'Page')</h6>
                            @if(! request()->routeIs('admin.dashboard'))
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('admin.dashboard') }}">@lang('Dashboard')</a>
                                    </li>
                                    @stack('breadcrumb')
                                    <li class="breadcrumb-item active" aria-current="page">@stack('title', 'Page')</li>
                                </ol>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <div class="float-end d-none d-md-block">
                                @stack('page-right')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.particles.footer')
    </div>
</div>
<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-toast-plugin/jquery.toast.min.js') }}"></script>
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets/libs/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/libs/spectrum-colorpicker2/spectrum.min.js') }}"></script>

@stack('js')
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/custom.js?v=' . config('app.assets.version')) }}"></script>
@stack('script')
@include('admin.common.toastr')
</body>
</html>
