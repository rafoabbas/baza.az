@extends('front.layouts.app')

@section('content')
    <section class="cart-main-info single-sto singl-auto-store">
        <div class="general-conteiner">
            <h2 class="cart-main-info__title">
                <div class="showroom-box__verified">
                    <div class="showroom-box__verified__anons">
                        <p>Verified Salon</p>
                    </div>
                    <svg height="2500" width="2500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <g fill="none" fill-rule="evenodd">
                            <path
                                d="M256 472.153L176.892 512l-41.725-81.129-86.275-16.654 11.596-91.422L0 256l60.488-66.795-11.596-91.422 86.275-16.654L176.892 0 256 39.847 335.108 0l41.725 81.129 86.275 16.654-11.596 91.422L512 256l-60.488 66.795 11.596 91.422-86.275 16.654L335.108 512z"
                                fill="#4285f4"/>
                            <path
                                d="M211.824 284.5L171 243.678l-36 36 40.824 40.824-.063.062 36 36 .063-.062.062.062 36-36-.062-.062L376.324 192l-36-36z"
                                fill="#fff"/>
                        </g>
                    </svg>
                </div>
                Автосалон Mercedes-Benz Baku
            </h2>
            <div class="catalog_bread-crumbs">
                <a href="">@lang('Ana səhifə')</a>
                <a href="">/ @lang('Büntün avtosalonlar')</a>
                <p>/ Автосалон Mercedes-Benz Baku</p>
            </div>
            <div class="single-sto__baner-slider">
                <div class="single-sto__baner-slider-element">
                    <img src="{{ asset('assets/front/img/_src/baner-sto.jpg') }}" alt="">
                </div>
                <div class="single-sto__baner-slider-element">
                    <img src="{{ asset('assets/front/img/_src/baner-sto.jpg') }}" alt="">
                </div>
            </div>
            <div class="cart-main-info__conteiner">
                <div class="cart-main-info__body-info">
                    <div class="cart-main-info__description-conteiner">
                        <div class="cart-main-info__description-conteiner__logo">
                            <img src="{{ asset('assets/front/img/_src/mercedes-logo.png') }}" alt="">
                        </div>
                        <div class="cart-main-info__description-conteiner__text">
                            <h3 class="cart-main-info__description-conteiner__text__title">
                                <img src="{{ asset('assets/front/img/_src/star.png') }}" alt="">
                                The best or nothing
                            </h3>
                            <span class="cart-main-info__description-conteiner__text__seen">
                                <img src="{{ asset('assets/front/img/_src/views.png') }}" alt="">
                                654 890
                            </span>
                            <p>Автосалон Mercedes-Benz Baku - официальный дилер Mercedes-Benz в Азербайджане. Мы
                                предлагаем полный спектр услуг по продаже и обслуживанию автомобилей Mercedes-Benz. В
                                нашем автосалоне представлены новые автомобили Mercedes-Benz, а также автомобили с
                                пробегом.</p>
                        </div>
                    </div>
                    {{--                    <div class="cart-main-info__slider-conteiner">--}}
                    {{--                        <div class="cart-main-info__big-slider-conteiner">--}}
                    {{--                            <div class="cart-main-info__big-slider">--}}
                    {{--                                <div class="cart-main-info__big-slider__element">--}}
                    {{--                                    <div class="card-box__play" data-videolink="">--}}
                    {{--                                        <img src="{{ asset('assets/front/img/_src/play.png') }}" alt="">--}}
                    {{--                                    </div>--}}
                    {{--                                    <img src="{{ asset('assets/front/img/_src/autostore2.jpg') }}" alt="">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="cart-main-info__big-slider__element">--}}
                    {{--                                    <div class="card-box__play" data-videolink="">--}}
                    {{--                                        <img src="{{ asset('assets/front/img/_src/play.png') }}" alt="">--}}
                    {{--                                    </div>--}}
                    {{--                                    <img src="{{ asset('assets/front/img/_src/carslider.jpg') }}" alt="">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="cart-main-info__big-slider__element">--}}
                    {{--                                    <div class="card-box__play" data-videolink="">--}}
                    {{--                                        <img src="{{ asset('assets/front/img/_src/play.png') }}" alt="">--}}
                    {{--                                    </div>--}}
                    {{--                                    <img src="{{ asset('assets/front/img/_src/carslider.jpg') }}" alt="">--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="cart-main-info__smal-slider-conteiner">--}}
                    {{--                            <div class="cart-main-info__smal-slider">--}}
                    {{--                                <div class="cart-main-info__smal-slider__element">--}}
                    {{--                                    <div class="card-box__play" data-videolink="">--}}
                    {{--                                        <img src="{{ asset('assets/front/img/_src/play.png') }}" alt="">--}}
                    {{--                                    </div>--}}
                    {{--                                    <img src="{{ asset('assets/front/img/_src/autostore2.jpg') }}" alt="">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="cart-main-info__smal-slider__element">--}}
                    {{--                                    <div class="card-box__play" data-videolink="">--}}
                    {{--                                        <img src="{{ asset('assets/front/img/_src/play.png') }}" alt="">--}}
                    {{--                                    </div>--}}
                    {{--                                    <img src="{{ asset('assets/front/img/_src/carslider.jpg') }}" alt="">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="cart-main-info__smal-slider__element">--}}
                    {{--                                    <div class="card-box__play" data-videolink="">--}}
                    {{--                                        <img src="{{ asset('assets/front/img/_src/play.png') }}" alt="">--}}
                    {{--                                    </div>--}}
                    {{--                                    <img src="{{ asset('assets/front/img/_src/carslider.jpg') }}" alt="">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="cart-main-info__smal-slider__element">--}}
                    {{--                                    <div class="card-box__play" data-videolink="">--}}
                    {{--                                        <img src="{{ asset('assets/front/img/_src/play.png') }}" alt="">--}}
                    {{--                                    </div>--}}
                    {{--                                    <img src="{{ asset('assets/front/img/_src/carslider.jpg') }}" alt="">--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="btn-more-photo">--}}
                    {{--                                Смотреть все <span>12</span> фото--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <div class="cart-main-info__autor-info-mobile">
                        <div class="singl-sto-sitebar__header">
                            <p>@lang('Avtosalon'): <b>Mercedes-Benz</b></p>
                        </div>
                        <ul class="cart-main-info__location-conteiner">
                            <li>г. Баку, Хатаинский р., пр. Бабека, (Автомобильный рынок)</li>
                        </ul>
                        <ul class="cart-main-info__phone-conteiner">
                            <li><a href="tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                            <li><a href="tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                            <li><a href="tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                        </ul>
                        <ul class="cart-main-info__time-work">
                            <li>Пн-Пт: 08:00-20:00</li>
                            <li>Сб-Вс: 12:00-17:00</li>
                        </ul>
                        <ul class="cart-main-info__email">
                            <li><a href="mailto:baza.az@gmail.com">baza.az@gmail.com</a></li>
                        </ul>
                        <ul class="cart-main-info__link-website">
                            <li><a href="avto.com">avto.com</a></li>
                        </ul>
                        <div class="cart-main-info__sotial-conteiner">
                            <a href="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M20.529 10.0708C20.5579 6.68713 17.6759 3.58517 14.1048 3.15622C14.0337 3.1478 13.9564 3.13498 13.8745 3.12142C13.6977 3.09212 13.5148 3.06201 13.3304 3.06201C12.5984 3.06201 12.4028 3.57615 12.3513 3.88278C12.3012 4.18092 12.349 4.43128 12.493 4.62723C12.7354 4.95682 13.1619 5.01533 13.5045 5.06221C13.6049 5.07607 13.6996 5.08897 13.7789 5.10678C16.9875 5.82373 18.0678 6.95091 18.5958 10.1322C18.6087 10.2099 18.6145 10.3057 18.6207 10.4073C18.6438 10.7876 18.6918 11.5787 19.5423 11.5787H19.5424C19.6132 11.5787 19.6893 11.5726 19.7686 11.5605C20.5606 11.4402 20.5358 10.717 20.5239 10.3695C20.5205 10.2716 20.5173 10.1791 20.5256 10.1175C20.5278 10.102 20.5289 10.0864 20.529 10.0708Z"
                                            fill="#768A9E"/>
                                        <path
                                            d="M13.1265 1.91463C13.2215 1.92149 13.3115 1.92805 13.3864 1.93953C18.6551 2.74979 21.0782 5.24609 21.7496 10.556C21.761 10.6463 21.7628 10.7564 21.7647 10.873C21.7714 11.2878 21.7852 12.1509 22.712 12.1687L22.7408 12.169C23.0315 12.169 23.2627 12.0814 23.4281 11.9083C23.7166 11.6065 23.6965 11.1582 23.6802 10.7979C23.6763 10.7095 23.6725 10.6263 23.6734 10.5534C23.7405 5.12266 19.0396 0.198112 13.6137 0.0149814C13.5912 0.014236 13.5697 0.0154286 13.548 0.0184845C13.5374 0.0200497 13.5176 0.0219876 13.4838 0.0219876C13.4297 0.0219876 13.3631 0.0172919 13.2925 0.0125217C13.2072 0.00670807 13.1105 0 13.0124 0C12.1483 0 11.984 0.614161 11.963 0.980273C11.9145 1.82639 12.7331 1.88594 13.1265 1.91463Z"
                                            fill="#768A9E"/>
                                        <path
                                            d="M21.4927 17.4188C21.3806 17.3332 21.2648 17.2446 21.1564 17.1573C20.5811 16.6944 19.9691 16.2676 19.3772 15.855C19.2544 15.7694 19.1316 15.6837 19.0092 15.5979C18.251 15.0653 17.5694 14.8066 16.9254 14.8066C16.0581 14.8066 15.3019 15.2858 14.6777 16.2308C14.4012 16.6498 14.0657 16.8535 13.6523 16.8535C13.4078 16.8535 13.13 16.7837 12.8267 16.6461C10.3796 15.5363 8.6321 13.8349 7.63282 11.5889C7.14977 10.5034 7.30636 9.79384 8.1565 9.21634C8.63926 8.88869 9.53784 8.27871 9.47419 7.11061C9.40212 5.78412 6.47531 1.79289 5.24214 1.33958C4.72003 1.14758 4.17146 1.14579 3.60872 1.3351C2.19108 1.81167 1.17377 2.64862 0.666488 3.7553C0.176277 4.82464 0.198413 6.08025 0.730513 7.38638C2.26875 11.1627 4.43143 14.4552 7.15871 17.1722C9.82823 19.8319 13.1093 22.0105 16.9107 23.6474C17.2533 23.7948 17.6127 23.8752 17.8752 23.9339C17.9646 23.954 18.0418 23.9711 18.0981 23.9866C18.129 23.995 18.1609 23.9995 18.1929 23.9998L18.2229 24C18.223 24 18.2229 24 18.2231 24C20.011 24 22.1578 22.3662 22.8171 20.5036C23.3948 18.8726 22.3401 18.0665 21.4927 17.4188Z"
                                            fill="#768A9E"/>
                                        <path
                                            d="M13.9145 6.22868C13.6084 6.23643 12.9713 6.25223 12.7478 6.90105C12.6432 7.20426 12.6558 7.46751 12.7851 7.68351C12.9748 8.00043 13.3384 8.09755 13.6691 8.15084C14.8684 8.34328 15.4844 9.00649 15.6076 10.2378C15.6648 10.8119 16.0515 11.2128 16.5479 11.2128H16.5479C16.5846 11.2128 16.6221 11.2107 16.6594 11.2061C17.2564 11.1351 17.5459 10.6965 17.5197 9.90254C17.5292 9.07394 17.0956 8.13325 16.3581 7.38396C15.618 6.63236 14.7259 6.20908 13.9145 6.22868Z"
                                            fill="#768A9E"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <a href="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.003 0H11.997C5.3805 0 0 5.382 0 12C0 14.625 0.846 17.058 2.2845 19.0335L0.789 23.4915L5.4015 22.017C7.299 23.274 9.5625 24 12.003 24C18.6195 24 24 18.6165 24 12C24 5.3835 18.6195 0 12.003 0ZM18.9855 16.9455C18.696 17.763 17.547 18.441 16.6305 18.639C16.0035 18.7725 15.1845 18.879 12.4275 17.736C8.901 16.275 6.63 12.6915 6.453 12.459C6.2835 12.2265 5.028 10.5615 5.028 8.8395C5.028 7.1175 5.9025 6.279 6.255 5.919C6.5445 5.6235 7.023 5.4885 7.482 5.4885C7.6305 5.4885 7.764 5.496 7.884 5.502C8.2365 5.517 8.4135 5.538 8.646 6.0945C8.9355 6.792 9.6405 8.514 9.7245 8.691C9.81 8.868 9.8955 9.108 9.7755 9.3405C9.663 9.5805 9.564 9.687 9.387 9.891C9.21 10.095 9.042 10.251 8.865 10.47C8.703 10.6605 8.52 10.8645 8.724 11.217C8.928 11.562 9.633 12.7125 10.671 13.6365C12.0105 14.829 13.0965 15.21 13.485 15.372C13.7745 15.492 14.1195 15.4635 14.331 15.2385C14.5995 14.949 14.931 14.469 15.2685 13.9965C15.5085 13.6575 15.8115 13.6155 16.1295 13.7355C16.4535 13.848 18.168 14.6955 18.5205 14.871C18.873 15.048 19.1055 15.132 19.191 15.2805C19.275 15.429 19.275 16.1265 18.9855 16.9455Z"
                                        fill="#768A9E"/>
                                </svg>
                            </a>
                            <a href="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M9.41718 15.1804L9.02018 20.7644C9.58818 20.7644 9.83418 20.5204 10.1292 20.2274L12.7922 17.6824L18.3102 21.7234C19.3222 22.2874 20.0352 21.9904 20.3082 20.7924L23.9302 3.82043L23.9312 3.81943C24.2522 2.32343 23.3902 1.73843 22.4042 2.10543L1.11418 10.2564C-0.338822 10.8204 -0.316822 11.6304 0.867178 11.9974L6.31018 13.6904L18.9532 5.77943C19.5482 5.38543 20.0892 5.60343 19.6442 5.99743L9.41718 15.1804Z"
                                            fill="#768A9E"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="singl-auto-store__cataloc-ads-cars">
                        <h2 class="general-titleV2">@lang('Avtosalonlar') <b>(15 шт)</b></h2>
                        <div class="ads-body__conteiner">
                            @foreach([0,1,2,3,4,5] as $item)
                                <div class="card-box">
                                    <div class="ads_image">
                                        <div class="ads_image_dop-info">
                                            <div class="dop-info__element dop_store">автосалон</div>
                                            <div class="dop-info__element dop_vip">новый</div>
                                            <div class="dop-info__element dop_new">VIP</div>
                                        </div>
                                        <div class="card-box__play" data-videolink="">
                                            <img src="{{ asset('assets/front/img/_src/play.png') }}" alt="">
                                        </div>
                                        <img src="{{ asset('assets/front/img/_src/car4.jpg') }}" alt="">
                                    </div>
                                    <div class="card-box__info">
                                        <h3 class="card-box__title">
                                        <span class="garant">
                                            <img src="{{ asset('assets/front/img/_src/garant.png') }}" alt="">
                                        </span>
                                            <a href="{{ route('cart') }}">Ford Focus Sport Plus Ford Focus Sport</a>
                                        </h3>
                                        <p class="card-box__date">08.02.2021, 16:58</p>
                                        <div class="card-box__tegs-conteiner">
                                            <div class="card-box__tegs-line">
                                                <span class="card-box__tegs-element">2014 г.</span>
                                                <span class="card-box__tegs-element">100 000 км</span>
                                                <span class="card-box__tegs-element">г. Баку</span>
                                                <span class="card-box__tegs-element">Механика</span>
                                                <span class="card-box__tegs-element">Бензин, 2.0 л</span>
                                            </div>
                                            <div class="card-box__tegs-image">
                                                <div class="card-box__tegs-img-element">
                                                    <img src="{{ asset('assets/front/img/_src/sale.svg') }}" alt="">
                                                </div>
                                                <div class="card-box__tegs-img-element">
                                                    <img src="{{ asset('assets/front/img/_src/trade.svg') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-box__description">
                                            Автомобиль после тест-драйва. 3008 2.0 HDi AT (150 л.с.) Allure 2020 год.
                                            Шикарная комплектация! Дизельный, проверенный временем двигатель! Отличный
                                            обзор, удобная посадка, невероятная управляемость ...
                                        </div>
                                        <div class="card-box__prise-line">
                                            <div class="money-conteiner">
                                                <span class="card-box__prise">8900$</span>
                                                <span class="card-box__prise_other-money">6500 € </span>
                                                <span class="card-box__prise_other-money">78500 azn </span>
                                            </div>
                                            <p class="card-box__date">08.02.2021, 16:58</p>
                                            <div class="card-box__add-icon__conteiner">
                                                <div class="card-box__add-icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18.3281 23.25C18.3281 22.085 17.3837 21.1406 16.2188 21.1406H7.78125C6.61627 21.1406 5.67188 22.085 5.67188 23.25V24H18.3281V23.25Z"
                                                            fill="#768A9E"></path>
                                                        <path
                                                            d="M22.5938 5.67187V4.26562H13.9799C13.7674 3.66994 13.2988 3.20133 12.7031 2.98889V0H11.2969V2.98889C10.7012 3.20133 10.2326 3.66994 10.0201 4.26562H1.40625V5.67187H3.16425L0 13.4062C0 15.3447 1.5772 16.9219 3.51562 16.9219H4.92188C6.8603 16.9219 8.4375 15.3447 8.4375 13.4062L5.25895 5.67187H10.0202C10.2326 6.26756 10.7012 6.73617 11.2969 6.94861V16.9989C9.92278 17.2801 8.83575 18.3597 8.55558 19.7344H15.4445C15.1643 18.3597 14.0773 17.2801 12.7032 16.9989V6.94861C13.2989 6.73617 13.7675 6.26756 13.9799 5.67187H18.7268L15.5625 13.4062C15.5625 15.3447 17.1397 16.9219 19.0781 16.9219H20.4844C22.4228 16.9219 24 15.3447 24 13.4062L20.8215 5.67187H22.5938ZM6.6795 12.7031H1.758L4.21875 6.79659L6.6795 12.7031ZM22.242 12.7031H17.3205L19.7812 6.79659L22.242 12.7031Z"
                                                            fill="#768A9E"></path>
                                                    </svg>
                                                </div>
                                                <div class="card-box__add-icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.5607 21.0002C17.4008 21.0008 17.2431 20.9631 17.1007 20.8902L12.0007 18.2202L6.90074 20.8902C6.73513 20.9773 6.54842 21.0162 6.36182 21.0024C6.17522 20.9887 5.99622 20.9228 5.84517 20.8124C5.69412 20.702 5.57708 20.5514 5.50735 20.3778C5.43763 20.2041 5.41801 20.0144 5.45074 19.8302L6.45074 14.2002L2.33074 10.2002C2.2022 10.0719 2.11101 9.91107 2.06697 9.7349C2.02292 9.55872 2.02768 9.37388 2.08074 9.2002C2.1387 9.02248 2.24532 8.86456 2.38849 8.74436C2.53166 8.62417 2.70566 8.54651 2.89074 8.5202L8.59074 7.6902L11.1007 2.5602C11.1826 2.39113 11.3105 2.24855 11.4697 2.14878C11.6288 2.04901 11.8129 1.99609 12.0007 1.99609C12.1886 1.99609 12.3727 2.04901 12.5318 2.14878C12.691 2.24855 12.8189 2.39113 12.9007 2.5602L15.4407 7.6802L21.1407 8.5102C21.3258 8.53651 21.4998 8.61417 21.643 8.73436C21.7862 8.85456 21.8928 9.01248 21.9507 9.1902C22.0038 9.36388 22.0086 9.54872 21.9645 9.7249C21.9205 9.90107 21.8293 10.0619 21.7007 10.1902L17.5807 14.1902L18.5807 19.8202C18.6164 20.0077 18.5977 20.2015 18.5269 20.3787C18.456 20.5559 18.3359 20.7091 18.1807 20.8202C17.9997 20.9471 17.7816 21.0104 17.5607 21.0002V21.0002Z"
                                                            fill="#768A9E"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="line-reload">
                            <div class="line-reload__btn">
                                <span>
                                    <img src="{{ asset('assets/front/img/_src/reload.png') }}" alt="">
                                </span>
                                <p>Показать еще</p>
                            </div>
                        </div>
                    </div>
                    <div class="advantages-conteiner">
                        <h2 class="general-titleV2">Преимущества</h2>
                        <div class="advantages-conteiner__claster">
                            <div class="advantages-conteiner__box">
                                <div class="advantages-conteiner__icon">
                                    <img src="{{ asset('assets/front/img/_src/ads1.svg') }}" alt="">
                                </div>
                                <h5 class="advantages-conteiner__title">Wi Fi</h5>
                            </div>
                            <div class="advantages-conteiner__box">
                                <div class="advantages-conteiner__icon">
                                    <img src="{{ asset('assets/front/img/_src/ads4.svg') }}" alt="">
                                </div>
                                <h5 class="advantages-conteiner__title">Оплата по безналу</h5>
                            </div>
                            <div class="advantages-conteiner__box">
                                <div class="advantages-conteiner__icon">
                                    <img src="{{ asset('assets/front/img/_src/ads5.svg') }}" alt="">
                                </div>
                                <h5 class="advantages-conteiner__title">Тест драйв</h5>
                            </div>
                        </div>
                    </div>
                    <div class="description-sto-conteiner">
                        <h2 class="general-titleV2">Описание представителя СТО</h2>
                        <div class="description-sto-conteiner__claster">
                            <div class="description-sto-conteiner__column">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                    architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                    voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                                    qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                                    quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est, qui
                                    dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                    magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                                    consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
                                    quam nihil molestiae consequatur.</p>
                            </div>
                            <div class="description-sto-conteiner__column">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                    architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                    voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                                    qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                                    quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est, qui
                                    dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                    magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                                    consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
                                    quam nihil molestiae consequatur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="description-sto-conteiner ">
                        <h2 class="general-titleV2">Auto Salon address in map</h2>
                        <div id="map3"></div>
                    </div>
                </div>
                <aside class="catalog__filtr ads-sitebar catalog__filtr-auto-store singl-sto-sitebar">
                    <div class="catalog__filtr-wrapper">
                        <div class="singl-sto-sitebar__header">
                            <p>@lang('Avtosalon №')<b>2 543</b></p>
                        </div>
                        <ul class="cart-main-info__location-conteiner">
                            <li>г. Баку, Хатаинский р., пр. Бабека, (Автомобильный рынок)</li>
                        </ul>
                        <ul class="cart-main-info__phone-conteiner">
                            <li><a href="tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                            <li><a href="tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                            <li><a href="tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                        </ul>
                        <ul class="cart-main-info__time-work">
                            <li>Пн-Пт: 08:00-20:00</li>
                            <li>Сб-Вс: 12:00-17:00</li>
                        </ul>
                        <ul class="cart-main-info__email">
                            <li><a href="mailto:baza.az@gmail.com">baza.az@gmail.com</a></li>
                        </ul>
                        <ul class="cart-main-info__link-website">
                            <li><a href="avto.com">avto.com</a></li>
                        </ul>
                        <span class="cart-main-info__description-conteiner__text__seen">
                            <img src="{{ asset('assets/front/img/_src/views.png') }}" alt="">
                            654 890
                        </span>
                        <div class="cart-main-info__sotial-conteiner">
                            <a href="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M20.529 10.0708C20.5579 6.68713 17.6759 3.58517 14.1048 3.15622C14.0337 3.1478 13.9564 3.13498 13.8745 3.12142C13.6977 3.09212 13.5148 3.06201 13.3304 3.06201C12.5984 3.06201 12.4028 3.57615 12.3513 3.88278C12.3012 4.18092 12.349 4.43128 12.493 4.62723C12.7354 4.95682 13.1619 5.01533 13.5045 5.06221C13.6049 5.07607 13.6996 5.08897 13.7789 5.10678C16.9875 5.82373 18.0678 6.95091 18.5958 10.1322C18.6087 10.2099 18.6145 10.3057 18.6207 10.4073C18.6438 10.7876 18.6918 11.5787 19.5423 11.5787H19.5424C19.6132 11.5787 19.6893 11.5726 19.7686 11.5605C20.5606 11.4402 20.5358 10.717 20.5239 10.3695C20.5205 10.2716 20.5173 10.1791 20.5256 10.1175C20.5278 10.102 20.5289 10.0864 20.529 10.0708Z"
                                            fill="#768A9E"/>
                                        <path
                                            d="M13.1265 1.91463C13.2215 1.92149 13.3115 1.92805 13.3864 1.93953C18.6551 2.74979 21.0782 5.24609 21.7496 10.556C21.761 10.6463 21.7628 10.7564 21.7647 10.873C21.7714 11.2878 21.7852 12.1509 22.712 12.1687L22.7408 12.169C23.0315 12.169 23.2627 12.0814 23.4281 11.9083C23.7166 11.6065 23.6965 11.1582 23.6802 10.7979C23.6763 10.7095 23.6725 10.6263 23.6734 10.5534C23.7405 5.12266 19.0396 0.198112 13.6137 0.0149814C13.5912 0.014236 13.5697 0.0154286 13.548 0.0184845C13.5374 0.0200497 13.5176 0.0219876 13.4838 0.0219876C13.4297 0.0219876 13.3631 0.0172919 13.2925 0.0125217C13.2072 0.00670807 13.1105 0 13.0124 0C12.1483 0 11.984 0.614161 11.963 0.980273C11.9145 1.82639 12.7331 1.88594 13.1265 1.91463Z"
                                            fill="#768A9E"/>
                                        <path
                                            d="M21.4927 17.4188C21.3806 17.3332 21.2648 17.2446 21.1564 17.1573C20.5811 16.6944 19.9691 16.2676 19.3772 15.855C19.2544 15.7694 19.1316 15.6837 19.0092 15.5979C18.251 15.0653 17.5694 14.8066 16.9254 14.8066C16.0581 14.8066 15.3019 15.2858 14.6777 16.2308C14.4012 16.6498 14.0657 16.8535 13.6523 16.8535C13.4078 16.8535 13.13 16.7837 12.8267 16.6461C10.3796 15.5363 8.6321 13.8349 7.63282 11.5889C7.14977 10.5034 7.30636 9.79384 8.1565 9.21634C8.63926 8.88869 9.53784 8.27871 9.47419 7.11061C9.40212 5.78412 6.47531 1.79289 5.24214 1.33958C4.72003 1.14758 4.17146 1.14579 3.60872 1.3351C2.19108 1.81167 1.17377 2.64862 0.666488 3.7553C0.176277 4.82464 0.198413 6.08025 0.730513 7.38638C2.26875 11.1627 4.43143 14.4552 7.15871 17.1722C9.82823 19.8319 13.1093 22.0105 16.9107 23.6474C17.2533 23.7948 17.6127 23.8752 17.8752 23.9339C17.9646 23.954 18.0418 23.9711 18.0981 23.9866C18.129 23.995 18.1609 23.9995 18.1929 23.9998L18.2229 24C18.223 24 18.2229 24 18.2231 24C20.011 24 22.1578 22.3662 22.8171 20.5036C23.3948 18.8726 22.3401 18.0665 21.4927 17.4188Z"
                                            fill="#768A9E"/>
                                        <path
                                            d="M13.9145 6.22868C13.6084 6.23643 12.9713 6.25223 12.7478 6.90105C12.6432 7.20426 12.6558 7.46751 12.7851 7.68351C12.9748 8.00043 13.3384 8.09755 13.6691 8.15084C14.8684 8.34328 15.4844 9.00649 15.6076 10.2378C15.6648 10.8119 16.0515 11.2128 16.5479 11.2128H16.5479C16.5846 11.2128 16.6221 11.2107 16.6594 11.2061C17.2564 11.1351 17.5459 10.6965 17.5197 9.90254C17.5292 9.07394 17.0956 8.13325 16.3581 7.38396C15.618 6.63236 14.7259 6.20908 13.9145 6.22868Z"
                                            fill="#768A9E"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <a href="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.003 0H11.997C5.3805 0 0 5.382 0 12C0 14.625 0.846 17.058 2.2845 19.0335L0.789 23.4915L5.4015 22.017C7.299 23.274 9.5625 24 12.003 24C18.6195 24 24 18.6165 24 12C24 5.3835 18.6195 0 12.003 0ZM18.9855 16.9455C18.696 17.763 17.547 18.441 16.6305 18.639C16.0035 18.7725 15.1845 18.879 12.4275 17.736C8.901 16.275 6.63 12.6915 6.453 12.459C6.2835 12.2265 5.028 10.5615 5.028 8.8395C5.028 7.1175 5.9025 6.279 6.255 5.919C6.5445 5.6235 7.023 5.4885 7.482 5.4885C7.6305 5.4885 7.764 5.496 7.884 5.502C8.2365 5.517 8.4135 5.538 8.646 6.0945C8.9355 6.792 9.6405 8.514 9.7245 8.691C9.81 8.868 9.8955 9.108 9.7755 9.3405C9.663 9.5805 9.564 9.687 9.387 9.891C9.21 10.095 9.042 10.251 8.865 10.47C8.703 10.6605 8.52 10.8645 8.724 11.217C8.928 11.562 9.633 12.7125 10.671 13.6365C12.0105 14.829 13.0965 15.21 13.485 15.372C13.7745 15.492 14.1195 15.4635 14.331 15.2385C14.5995 14.949 14.931 14.469 15.2685 13.9965C15.5085 13.6575 15.8115 13.6155 16.1295 13.7355C16.4535 13.848 18.168 14.6955 18.5205 14.871C18.873 15.048 19.1055 15.132 19.191 15.2805C19.275 15.429 19.275 16.1265 18.9855 16.9455Z"
                                        fill="#768A9E"/>
                                </svg>
                            </a>
                            <a href="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M9.41718 15.1804L9.02018 20.7644C9.58818 20.7644 9.83418 20.5204 10.1292 20.2274L12.7922 17.6824L18.3102 21.7234C19.3222 22.2874 20.0352 21.9904 20.3082 20.7924L23.9302 3.82043L23.9312 3.81943C24.2522 2.32343 23.3902 1.73843 22.4042 2.10543L1.11418 10.2564C-0.338822 10.8204 -0.316822 11.6304 0.867178 11.9974L6.31018 13.6904L18.9532 5.77943C19.5482 5.38543 20.0892 5.60343 19.6442 5.99743L9.41718 15.1804Z"
                                            fill="#768A9E"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="bt-page-autor">
                            <a href="" class="btn2">
                                <p>Страница автосервиса</p>
                            </a>
                        </div>
                    </div>
                    <div class="catalog__filt-baner-conteiner">
                        <a href="" class="baner-box">
                            <img src="{{ asset('assets/front/img/_src/baner1.jpg') }}" alt="">
                        </a>
                        <a href="" class="baner-box">
                            <img src="{{ asset('assets/front/img/_src/baner2.jpg') }}" alt="">
                        </a>
                        <a href="" class="baner-box">
                            <img src="{{ asset('assets/front/img/_src/baner1.jpg') }}" alt="">
                        </a>
                        <a href="" class="baner-box">
                            <img src="{{ asset('assets/front/img/_src/baner2.jpg') }}" alt="">
                        </a>
                        <a href="" class="baner-box">
                            <img src="{{ asset('assets/front/img/_src/baner1.jpg') }}" alt="">
                        </a>
                        <a href="" class="baner-box">
                            <img src="{{ asset('assets/front/img/_src/baner2.jpg') }}" alt="">
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
