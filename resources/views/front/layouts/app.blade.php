<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/front/img/favicons/favicon.ico') }}">
    <meta name="theme-color" content="#000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <meta name="msapplication-navbutton-color" content="#000">
    <title>{{ setting('app_title', 'Baza') }} - @yield('title', 'baza.az')</title>
    <link rel="canonical" href="https://baza.az"/>
    <link rel="shortcut icon" sizes="180x180" type="image/x-icon" href="{{ asset('assets/front/img/favicons/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/front/img/favicons/favicon.ico') }}"/>
    <!-- Styles -->
    @stack('css')
    <!-- Font cdn -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600;700;800&family=Source+Sans+Pro:wght@600;700;900&display=swap" rel="stylesheet">
    <!-- Font cdn -->
    @stack('style')
{{--    <link rel="stylesheet" href="{{asset('assets/front/css/main.min.css?v=' . config('app.assets.version', 'v0.0.1'))}}">--}}
    <link rel="stylesheet" href="{{asset('assets/front/css/main.css?v=' . config('app.assets.version', 'v0.0.1'))}}">
</head>
<body>
    <div class="loader-container" id="loader">
        <div class="loader-content">
            <div class="loader-content-block">
                <img src="{{ asset('img/logo-main.svg') }}" alt="w-t.az">
            </div>
        </div>
    </div>
    @php
        $showHeader = $showHeader ?? true;
        $showFooter = $showFooter ?? true;
    @endphp
    <main class="content">
        @if($showHeader)
            @include('front.layouts.partials.header')
        @endif
        <div>
            @yield('content')
        </div>
    </main>
    @if($showFooter)
        @include('front.layouts.partials.footer')
    @endif
    <div class="advantages-popap galery-conteiner" id="galery-photo">
        <div class="advantages-popap__wrapper">
            <div class="galery-conteiner__slider">

                <div class="galery-conteiner__element-slide">
                    <div class="galery-conteiner__element-slide-wrapper">
                        <div class="card-box__play play-triger" data-videolink="">
                            <img src="{{ asset('assets/front/img/_src/play.png') }}" alt="">
                        </div>
                        <img src="{{ asset('assets/front/img/_src/carslider.jpg') }}" alt="">
                        <iframe  data-srcvideo="https://www.youtube.com/embed/eNvUS-6PTbs" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay></iframe>
                    </div>
                </div>
                <div class="galery-conteiner__element-slide">
                    <div class="galery-conteiner__element-slide-wrapper">
                        <img src="{{ asset('assets/front/img/_src/baner2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="galery-conteiner__element-slide">
                    <div class="galery-conteiner__element-slide-wrapper">
                        <img src="{{ asset('assets/front/img/_src/carslider.jpg') }}" alt="">
                    </div>
                </div>
                <div class="galery-conteiner__element-slide">
                    <div class="galery-conteiner__element-slide-wrapper">
                        <img src="{{ asset('assets/front/img/_src/carslider.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stack('scripts')
{{--    <script src="{{ asset('assets/front/js/scripts.min.js?v=' . config('app.assets.version', 'v0.0.1')) }}{{uniqid()}}"></script>--}}
    @stack('script')
{{--    <script>--}}
{{--        function initMap(){--}}

{{--            var map = new google.maps.Map(document.getElementById('map3'), {--}}
{{--                center: {lat:50.470709,lng:30.406405},--}}
{{--                zoom: 13.5,--}}
{{--                panControl:false,--}}
{{--                zoomControl:true,--}}
{{--                mapTypeControl:false,--}}
{{--                scaleControl:false,--}}
{{--                streetViewControl:false,--}}
{{--                overviewMapControl:false,--}}
{{--                rotateControl:false,--}}
{{--            });--}}
{{--            var styles = [--}}
{{--                {--}}
{{--                    "elementType": "geometry",--}}
{{--                    "stylers": [--}}
{{--                        {--}}
{{--                            "color": "#f5f5f5"--}}
{{--                        }--}}
{{--                    ]--}}
{{--                },--}}
{{--                {--}}
{{--                    "elementType": "labels.icon",--}}
{{--                    "stylers": [--}}
{{--                        {--}}
{{--                            "visibility": "off"--}}
{{--                        }--}}
{{--                    ]--}}
{{--                },--}}
{{--                {--}}
{{--                    "elementType": "labels.text.fill",--}}
{{--                    "stylers": [--}}
{{--                        {--}}
{{--                            "color": "#616161"--}}
{{--                        }--}}
{{--                    ]--}}
{{--                },--}}
{{--                {--}}
{{--                    "elementType": "labels.text.stroke",--}}
{{--                    "stylers": [--}}
{{--                        {--}}
{{--                            "color": "#f5f5f5"--}}
{{--                        }--}}
{{--                    ]--}}
{{--                },--}}
{{--                {--}}
{{--                    "featureType": "administrative.land_parcel",--}}
{{--                    "elementType": "labels.text.fill",--}}
{{--                    "stylers": [--}}
{{--                        {--}}
{{--                            "color": "#bdbdbd"--}}
{{--                        }--}}
{{--                    ]--}}
{{--                },--}}
{{--                {--}}
{{--                    "featureType": "poi",--}}
{{--                    "elementType": "geometry",--}}
{{--                    "stylers": [--}}
{{--                        {--}}
{{--                            "color": "#eeeeee"--}}
{{--                        }--}}
{{--                    ]--}}
{{--                },--}}
{{--                {--}}
{{--                    "featureType": "poi",--}}
{{--                    "elementType": "labels.text.fill",--}}
{{--                    "stylers": [--}}
{{--                        {--}}
{{--                            "color": "#757575"--}}
{{--                        }--}}
{{--                    ]--}}
{{--                },--}}
{{--                {--}}
{{--                    "featureType": "poi.park",--}}
{{--                    "elementType": "geometry",--}}
{{--                    "stylers": [--}}
{{--                        {--}}
{{--                            "color": "#e5e5e5"--}}
{{--                        }--}}
{{--                    ]--}}
{{--                },--}}
{{--                {--}}
{{--                    "featureType": "poi.park",--}}
{{--                    "elementType": "labels.text.fill",--}}
{{--                    "stylers": [--}}
{{--                        {--}}
{{--                            "color": "#9e9e9e"--}}
{{--                        }--}}
{{--                    ]--}}
{{--                },--}}
{{--                {--}}
{{--                    "featureType": "road",--}}
{{--                    "elementType": "geometry",--}}
{{--                    "stylers": [--}}
{{--                        {--}}
{{--                            "color": "#ffffff"--}}
{{--                        }--}}
{{--                    ]--}}
{{--                },--}}
{{--                {--}}
{{--                    "featureType": "road.arterial",--}}
{{--                    "elementType": "labels.text.fill",--}}
{{--                    "stylers": [--}}
{{--                        {--}}
{{--                            "color": "#757575"--}}
{{--                        }--}}
{{--                    ]--}}
{{--                },--}}
{{--                {--}}
{{--                    "featureType": "road.highway",--}}
{{--                    "elementType": "geometry",--}}
{{--                    "stylers": [--}}
{{--                        {--}}
{{--                            "color": "#dadada"--}}
{{--                        }--}}
{{--                    ]--}}
{{--                },--}}
{{--                {--}}
{{--                    "featureType": "road.highway",--}}
{{--                    "elementType": "labels.text.fill",--}}
{{--                    "stylers": [--}}
{{--                        {--}}
{{--                            "color": "#616161"--}}
{{--                        }--}}
{{--                    ]--}}
{{--                },--}}
{{--                {--}}
{{--                    "featureType": "road.local",--}}
{{--                    "elementType": "labels.text.fill",--}}
{{--                    "stylers": [--}}
{{--                        {--}}
{{--                            "color": "#9e9e9e"--}}
{{--                        }--}}
{{--                    ]--}}
{{--                },--}}
{{--                {--}}
{{--                    "featureType": "transit.line",--}}
{{--                    "elementType": "geometry",--}}
{{--                    "stylers": [--}}
{{--                        {--}}
{{--                            "color": "#e5e5e5"--}}
{{--                        }--}}
{{--                    ]--}}
{{--                },--}}
{{--                {--}}
{{--                    "featureType": "transit.station",--}}
{{--                    "elementType": "geometry",--}}
{{--                    "stylers": [--}}
{{--                        {--}}
{{--                            "color": "#eeeeee"--}}
{{--                        }--}}
{{--                    ]--}}
{{--                },--}}
{{--                {--}}
{{--                    "featureType": "water",--}}
{{--                    "elementType": "geometry",--}}
{{--                    "stylers": [--}}
{{--                        {--}}
{{--                            "color": "#c9c9c9"--}}
{{--                        }--}}
{{--                    ]--}}
{{--                },--}}
{{--                {--}}
{{--                    "featureType": "water",--}}
{{--                    "elementType": "labels.text.fill",--}}
{{--                    "stylers": [--}}
{{--                        {--}}
{{--                            "color": "#9e9e9e"--}}
{{--                        }--}}
{{--                    ]--}}
{{--                }--}}
{{--            ]--}}

{{--            var marker = new google.maps.Marker({--}}
{{--                map: map,--}}
{{--                position: {lat:50.470709,lng:30.406405},--}}
{{--                title: 'Our office:',--}}
{{--                icon: {--}}
{{--                    url: "img/_src/marker.png",--}}
{{--                    scaledSize: new google.maps.Size(40, 40)--}}
{{--                }--}}
{{--            });--}}
{{--            marker.addListener("click",function(){--}}
{{--                info.open(map, marker );--}}
{{--            });--}}
{{--            map.setOptions({styles: styles});--}}
{{--        }--}}


{{--    </script>--}}
{{--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvt_XnVi4vJyFx1LhfRK_tm-5F3IPhOj0&callback=initMap"--}}
{{--            async defer></script>--}}
</body>
</html>

