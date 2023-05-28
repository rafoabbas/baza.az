@extends('front.layouts.app')

@section('content')
    <section class="cart-main-info sing-numbers-section">
        <div class="general-conteiner">
            <h2 class="cart-main-info__title">00 — HH — 000</h2>
            <div class="catalog_bread-crumbs">
                <a href="">Главная</a>
                <a href="">/  VIP номера</a>
                <p>/ 00 — НН — 000</p>
            </div>
            <div class="cart-main-info__conteiner">
                <div class="cart-main-info__body-info content-oldV2">
                    <div class="cart-main-info__slider-conteiner">
                        <div class="sing-numbers-section__image-car-conteiner ">
                            <div class="sing-numbers-section__img-box sing-numbers-section__img-carV1">
                                <div class="sing-numbers-section__nam-image nam-value">
                                    <div class="select-namber-conteiner__num-country">
                                        <div class="select-namber-conteiner__logo-country">
                                            <img src="{{ asset('assets/front/img/_src/map.png') }}" alt="">
                                        </div>
                                        <div class="select-namber-conteiner__slug-country">AZ</div>
                                    </div>
                                    <h4 class="am-value__nm">00</h4>
                                    <div class="select-namber-conteiner__drop"></div>
                                    <h4 class="am-value__nm">HH</h4>
                                    <div class="select-namber-conteiner__drop"></div>
                                    <h4 class="am-value__nm">000</h4>
                                </div>
                                <img src="{{ asset('assets/front/img/_src/nam-car1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="big-slider-conteiner__mobile-ads-info">
                            <div class="cart-main-info__prise-conteiner">
                                <p class="cart-main-info__prise-title">Цена:</p>
                                <div class="cart-main-info__prise-box">
                                    <span class="card-box__prise">8900$</span>
                                    <span class="card-box__prise_other-money">6500 € </span>
                                    <span class="card-box__prise_other-money">78500 azn </span>
                                </div>
                            </div>
                            <ul class="cart-main-info__ul-info">
                                <li>
                                    <p>Объявление №</p>
                                    <span>242 569 22</span>
                                </li>
                                <li>
                                    <p>Опубликовано:</p>
                                    <span>вчера, 19:30</span>
                                </li>
                                <li>
                                    <p>Просмотров:</p>
                                    <span>2 255</span>
                                </li>
                            </ul>
                            <div class="mobile-ads-info__ads-info">
                                <ul class="cart-main-info__ul-info">
                                    <li>
                                        <p>Опубликовано:</p>
                                        <span>вчера, 19:30</span>
                                    </li>
                                </ul>
                                <div class="mobile-ads-info__ads-info__views">
                                    <div class="ic-vievs">
                                        <img src="{{ asset('assets/front/img/_src/views.png') }}" alt="">
                                    </div>
                                    <p>2 569</p>
                                </div>
                                <div class="mobile-ads-info__ads-info__nam-ads">№ 242 569 22</div>
                            </div>
                        </div>
                        <div class="big-slider-conteiner__btn-line">
                            <div class="btn-ads">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 12.666V15.9998H3.33379L13.1707 6.1629L9.8369 2.8291L0 12.666Z" fill="#0D417B"/>
                                    <path d="M15.74 2.33586L13.6642 0.260036C13.3174 -0.0866786 12.7529 -0.0866786 12.4062 0.260036L10.7793 1.88693L14.1131 5.22072L15.74 3.59383C16.0867 3.24711 16.0867 2.68258 15.74 2.33586Z" fill="#0D417B"/>
                                </svg>
                                <p>Редактировать</p>
                            </div>
                            <div class="btn-ads">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.2833 4.06426V1.15186H9.18359L12.2833 4.06426Z" fill="#0D417B"/>
                                    <path d="M4.43164 4.67902H11.5686L8.0001 1.32617L4.43164 4.67902Z" fill="#0D417B"/>
                                    <path d="M12.0357 5.6167H3.96484L8.00028 14.8485L12.0357 5.6167Z" fill="#0D417B"/>
                                    <path d="M3.7168 4.06426L6.81652 1.15186H3.7168V4.06426Z" fill="#0D417B"/>
                                    <path d="M2.77931 4.67917V1.85791L0.101562 4.67917H2.77931Z" fill="#0D417B"/>
                                    <path d="M13.2207 4.67917H15.8985L13.2207 1.85791V4.67917Z" fill="#0D417B"/>
                                    <path d="M13.0589 5.6167L9.76758 13.1462L16.0003 5.6167H13.0589Z" fill="#0D417B"/>
                                    <path d="M2.94141 5.6167H0L6.23272 13.1462L2.94141 5.6167Z" fill="#0D417B"/>
                                </svg>
                                <p>Сделать VIP</p>
                            </div>
                            <div class="btn-ads">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4L4 12" stroke="#0D417B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M4 4L12 12" stroke="#0D417B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <p>Удалить</p>
                            </div>
                        </div>
                    </div>
                    <div class="cart-main-info__text-info">
                        <div class="rent-car-info-text">
                            <div class="cart-main-info__description">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur. Quis autem vel eum iure reprehenderit qui in ea.</p>
                            </div>
                            <div class="cart-main-info__description">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur. Quis autem vel eum iure reprehenderit qui in ea.</p>
                            </div>
                        </div>
                        <div class="cart-main-info__autor-info-mobile">
                            <ul class="cart-main-info__ul-info ul-seller">
                                <li>
                                    <p>Продавец:</p>
                                    <span><b>Ceyhun</b></span>
                                </li>
                            </ul>
                            <ul class="cart-main-info__phone-conteiner">
                                <li><a href="tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                                <li><a href="tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                                <li><a href="tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                            </ul>
                            <div class="autor-info-mobile_location-sotial-line">
                                <ul class="cart-main-info__location-conteiner">
                                    <li>г. Баку</li>
                                </ul>
                                <div class="cart-main-info__sotial-conteiner">
                                    <a href="">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0)">
                                                <path d="M20.529 10.0708C20.5579 6.68713 17.6759 3.58517 14.1048 3.15622C14.0337 3.1478 13.9564 3.13498 13.8745 3.12142C13.6977 3.09212 13.5148 3.06201 13.3304 3.06201C12.5984 3.06201 12.4028 3.57615 12.3513 3.88278C12.3012 4.18092 12.349 4.43128 12.493 4.62723C12.7354 4.95682 13.1619 5.01533 13.5045 5.06221C13.6049 5.07607 13.6996 5.08897 13.7789 5.10678C16.9875 5.82373 18.0678 6.95091 18.5958 10.1322C18.6087 10.2099 18.6145 10.3057 18.6207 10.4073C18.6438 10.7876 18.6918 11.5787 19.5423 11.5787H19.5424C19.6132 11.5787 19.6893 11.5726 19.7686 11.5605C20.5606 11.4402 20.5358 10.717 20.5239 10.3695C20.5205 10.2716 20.5173 10.1791 20.5256 10.1175C20.5278 10.102 20.5289 10.0864 20.529 10.0708Z" fill="#768A9E"></path>
                                                <path d="M13.1265 1.91463C13.2215 1.92149 13.3115 1.92805 13.3864 1.93953C18.6551 2.74979 21.0782 5.24609 21.7496 10.556C21.761 10.6463 21.7628 10.7564 21.7647 10.873C21.7714 11.2878 21.7852 12.1509 22.712 12.1687L22.7408 12.169C23.0315 12.169 23.2627 12.0814 23.4281 11.9083C23.7166 11.6065 23.6965 11.1582 23.6802 10.7979C23.6763 10.7095 23.6725 10.6263 23.6734 10.5534C23.7405 5.12266 19.0396 0.198112 13.6137 0.0149814C13.5912 0.014236 13.5697 0.0154286 13.548 0.0184845C13.5374 0.0200497 13.5176 0.0219876 13.4838 0.0219876C13.4297 0.0219876 13.3631 0.0172919 13.2925 0.0125217C13.2072 0.00670807 13.1105 0 13.0124 0C12.1483 0 11.984 0.614161 11.963 0.980273C11.9145 1.82639 12.7331 1.88594 13.1265 1.91463Z" fill="#768A9E"></path>
                                                <path d="M21.4927 17.4188C21.3806 17.3332 21.2648 17.2446 21.1564 17.1573C20.5811 16.6944 19.9691 16.2676 19.3772 15.855C19.2544 15.7694 19.1316 15.6837 19.0092 15.5979C18.251 15.0653 17.5694 14.8066 16.9254 14.8066C16.0581 14.8066 15.3019 15.2858 14.6777 16.2308C14.4012 16.6498 14.0657 16.8535 13.6523 16.8535C13.4078 16.8535 13.13 16.7837 12.8267 16.6461C10.3796 15.5363 8.6321 13.8349 7.63282 11.5889C7.14977 10.5034 7.30636 9.79384 8.1565 9.21634C8.63926 8.88869 9.53784 8.27871 9.47419 7.11061C9.40212 5.78412 6.47531 1.79289 5.24214 1.33958C4.72003 1.14758 4.17146 1.14579 3.60872 1.3351C2.19108 1.81167 1.17377 2.64862 0.666488 3.7553C0.176277 4.82464 0.198413 6.08025 0.730513 7.38638C2.26875 11.1627 4.43143 14.4552 7.15871 17.1722C9.82823 19.8319 13.1093 22.0105 16.9107 23.6474C17.2533 23.7948 17.6127 23.8752 17.8752 23.9339C17.9646 23.954 18.0418 23.9711 18.0981 23.9866C18.129 23.995 18.1609 23.9995 18.1929 23.9998L18.2229 24C18.223 24 18.2229 24 18.2231 24C20.011 24 22.1578 22.3662 22.8171 20.5036C23.3948 18.8726 22.3401 18.0665 21.4927 17.4188Z" fill="#768A9E"></path>
                                                <path d="M13.9145 6.22868C13.6084 6.23643 12.9713 6.25223 12.7478 6.90105C12.6432 7.20426 12.6558 7.46751 12.7851 7.68351C12.9748 8.00043 13.3384 8.09755 13.6691 8.15084C14.8684 8.34328 15.4844 9.00649 15.6076 10.2378C15.6648 10.8119 16.0515 11.2128 16.5479 11.2128H16.5479C16.5846 11.2128 16.6221 11.2107 16.6594 11.2061C17.2564 11.1351 17.5459 10.6965 17.5197 9.90254C17.5292 9.07394 17.0956 8.13325 16.3581 7.38396C15.618 6.63236 14.7259 6.20908 13.9145 6.22868Z" fill="#768A9E"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <rect width="24" height="24" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.003 0H11.997C5.3805 0 0 5.382 0 12C0 14.625 0.846 17.058 2.2845 19.0335L0.789 23.4915L5.4015 22.017C7.299 23.274 9.5625 24 12.003 24C18.6195 24 24 18.6165 24 12C24 5.3835 18.6195 0 12.003 0ZM18.9855 16.9455C18.696 17.763 17.547 18.441 16.6305 18.639C16.0035 18.7725 15.1845 18.879 12.4275 17.736C8.901 16.275 6.63 12.6915 6.453 12.459C6.2835 12.2265 5.028 10.5615 5.028 8.8395C5.028 7.1175 5.9025 6.279 6.255 5.919C6.5445 5.6235 7.023 5.4885 7.482 5.4885C7.6305 5.4885 7.764 5.496 7.884 5.502C8.2365 5.517 8.4135 5.538 8.646 6.0945C8.9355 6.792 9.6405 8.514 9.7245 8.691C9.81 8.868 9.8955 9.108 9.7755 9.3405C9.663 9.5805 9.564 9.687 9.387 9.891C9.21 10.095 9.042 10.251 8.865 10.47C8.703 10.6605 8.52 10.8645 8.724 11.217C8.928 11.562 9.633 12.7125 10.671 13.6365C12.0105 14.829 13.0965 15.21 13.485 15.372C13.7745 15.492 14.1195 15.4635 14.331 15.2385C14.5995 14.949 14.931 14.469 15.2685 13.9965C15.5085 13.6575 15.8115 13.6155 16.1295 13.7355C16.4535 13.848 18.168 14.6955 18.5205 14.871C18.873 15.048 19.1055 15.132 19.191 15.2805C19.275 15.429 19.275 16.1265 18.9855 16.9455Z" fill="#768A9E"></path>
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0)">
                                                <path d="M9.41718 15.1804L9.02018 20.7644C9.58818 20.7644 9.83418 20.5204 10.1292 20.2274L12.7922 17.6824L18.3102 21.7234C19.3222 22.2874 20.0352 21.9904 20.3082 20.7924L23.9302 3.82043L23.9312 3.81943C24.2522 2.32343 23.3902 1.73843 22.4042 2.10543L1.11418 10.2564C-0.338822 10.8204 -0.316822 11.6304 0.867178 11.9974L6.31018 13.6904L18.9532 5.77943C19.5482 5.38543 20.0892 5.60343 19.6442 5.99743L9.41718 15.1804Z" fill="#768A9E"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <rect width="24" height="24" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="bt-page-autor">
                                <a href="" class="btn2">
                                    <p>Перейти на страницу автора</p>
                                </a>
                            </div>
                        </div>
                        <div class="singl-number__ads-conteiner">
                            <h4 class="cart-main-info__title-ul">Другие номера</h4>
                            <div class="ads-namber-conteiner">
                                @foreach([0,1,2,3,4,5] as $item)
                                    <div class="ads-namber-box">
                                        <a href="{{ route('number.show') }}" class="ads-namber-box__image-num">
                                            <div class="sing-numbers-section__nam-image nam-value">
                                                <div class="select-namber-conteiner__num-country">
                                                    <div class="select-namber-conteiner__logo-country">
                                                        <img src="{{ asset('assets/front/img/_src/map.png') }}" alt="">
                                                    </div>
                                                    <div class="select-namber-conteiner__slug-country">AZ</div>
                                                </div>
                                                <h4 class="am-value__nm">00</h4>
                                                <div class="select-namber-conteiner__drop"></div>
                                                <h4 class="am-value__nm">HH</h4>
                                                <div class="select-namber-conteiner__drop"></div>
                                                <h4 class="am-value__nm">000</h4>
                                            </div>
                                        </a>
                                        <h4 class="namber-image__prise">950$</h4>
                                        <p class="namber-image__date-post">08.02.2021, 16:58</p>
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
                    </div>
                </div>
                <aside class="catalog__filtr ads-sitebar aside-old">
                    <div class="catalog__filtr-wrapper">
                        <ul class="cart-main-info__ul-info">
                            <li>
                                <p>Объявление №</p>
                                <span>242 569 22</span>
                            </li>
                            <li>
                                <p>Опубликовано:</p>
                                <span>вчера, 19:30</span>
                            </li>
                            <li>
                                <p>Просмотров:</p>
                                <span>2 255</span>
                            </li>
                        </ul>
                        <ul class="cart-main-info__ul-info ul-seller">
                            <li>
                                <p>Продавец:</p>
                                <span><b>Ceyhun</b></span>
                            </li>
                        </ul>
                        <ul class="cart-main-info__phone-conteiner">
                            <li><a href="tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                        </ul>
                        <ul class="cart-main-info__location-conteiner">
                            <li>г. Баку</li>
                        </ul>
                        <div class="cart-main-info__prise-conteiner">
                            <p class="cart-main-info__prise-title">Цена:</p>
                            <div class="cart-main-info__prise-box">
                                <span class="card-box__prise">8900$</span>
                                <span class="card-box__prise_other-money">6500 € </span>
                                <span class="card-box__prise_other-money">78500 azn </span>
                            </div>
                            <div class="card-box__add-icon__conteiner">
                                <div class="card-box__add-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.5607 21.0002C17.4008 21.0008 17.2431 20.9631 17.1007 20.8902L12.0007 18.2202L6.90074 20.8902C6.73513 20.9773 6.54842 21.0162 6.36182 21.0024C6.17522 20.9887 5.99622 20.9228 5.84517 20.8124C5.69412 20.702 5.57708 20.5514 5.50735 20.3778C5.43763 20.2041 5.41801 20.0144 5.45074 19.8302L6.45074 14.2002L2.33074 10.2002C2.2022 10.0719 2.11101 9.91107 2.06697 9.7349C2.02292 9.55872 2.02768 9.37388 2.08074 9.2002C2.1387 9.02248 2.24532 8.86456 2.38849 8.74436C2.53166 8.62417 2.70566 8.54651 2.89074 8.5202L8.59074 7.6902L11.1007 2.5602C11.1826 2.39113 11.3105 2.24855 11.4697 2.14878C11.6288 2.04901 11.8129 1.99609 12.0007 1.99609C12.1886 1.99609 12.3727 2.04901 12.5318 2.14878C12.691 2.24855 12.8189 2.39113 12.9007 2.5602L15.4407 7.6802L21.1407 8.5102C21.3258 8.53651 21.4998 8.61417 21.643 8.73436C21.7862 8.85456 21.8928 9.01248 21.9507 9.1902C22.0038 9.36388 22.0086 9.54872 21.9645 9.7249C21.9205 9.90107 21.8293 10.0619 21.7007 10.1902L17.5807 14.1902L18.5807 19.8202C18.6164 20.0077 18.5977 20.2015 18.5269 20.3787C18.456 20.5559 18.3359 20.7091 18.1807 20.8202C17.9997 20.9471 17.7816 21.0104 17.5607 21.0002V21.0002Z" fill="#768A9E"/>
                                    </svg>
                                </div>
                                <div class="card-box__add-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.5663 16.5603C17.727 16.5603 16.9704 16.8861 16.3961 17.4107L8.52714 12.8218C8.58786 12.5733 8.62653 12.3138 8.62653 12.0487C8.62653 11.7837 8.58786 11.5242 8.52714 11.2757L16.3133 6.73097C16.9042 7.28319 17.6939 7.62555 18.5663 7.62555C20.3942 7.62555 21.8796 6.14012 21.8796 4.31228C21.8796 2.48445 20.3942 0.999023 18.5663 0.999023C16.7385 0.999023 15.2531 2.48445 15.2531 4.31228C15.2531 4.57735 15.2917 4.83687 15.3525 5.08536L7.56629 9.63002C6.97544 9.07779 6.18574 8.73544 5.31327 8.73544C3.48543 8.73544 2 10.2209 2 12.0487C2 13.8765 3.48543 15.362 5.31327 15.362C6.18574 15.362 6.97544 15.0196 7.56629 14.4674L15.4353 19.0562C15.3801 19.2882 15.3469 19.5311 15.3469 19.7796C15.3469 21.5578 16.7882 22.999 18.5663 22.999C20.3445 22.999 21.7857 21.5578 21.7857 19.7796C21.7857 18.0015 20.3445 16.5603 18.5663 16.5603Z" fill="#768A9E"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="cart-main-info__sotial-conteiner">
                            <a href="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M20.529 10.0708C20.5579 6.68713 17.6759 3.58517 14.1048 3.15622C14.0337 3.1478 13.9564 3.13498 13.8745 3.12142C13.6977 3.09212 13.5148 3.06201 13.3304 3.06201C12.5984 3.06201 12.4028 3.57615 12.3513 3.88278C12.3012 4.18092 12.349 4.43128 12.493 4.62723C12.7354 4.95682 13.1619 5.01533 13.5045 5.06221C13.6049 5.07607 13.6996 5.08897 13.7789 5.10678C16.9875 5.82373 18.0678 6.95091 18.5958 10.1322C18.6087 10.2099 18.6145 10.3057 18.6207 10.4073C18.6438 10.7876 18.6918 11.5787 19.5423 11.5787H19.5424C19.6132 11.5787 19.6893 11.5726 19.7686 11.5605C20.5606 11.4402 20.5358 10.717 20.5239 10.3695C20.5205 10.2716 20.5173 10.1791 20.5256 10.1175C20.5278 10.102 20.5289 10.0864 20.529 10.0708Z" fill="#768A9E"/>
                                        <path d="M13.1265 1.91463C13.2215 1.92149 13.3115 1.92805 13.3864 1.93953C18.6551 2.74979 21.0782 5.24609 21.7496 10.556C21.761 10.6463 21.7628 10.7564 21.7647 10.873C21.7714 11.2878 21.7852 12.1509 22.712 12.1687L22.7408 12.169C23.0315 12.169 23.2627 12.0814 23.4281 11.9083C23.7166 11.6065 23.6965 11.1582 23.6802 10.7979C23.6763 10.7095 23.6725 10.6263 23.6734 10.5534C23.7405 5.12266 19.0396 0.198112 13.6137 0.0149814C13.5912 0.014236 13.5697 0.0154286 13.548 0.0184845C13.5374 0.0200497 13.5176 0.0219876 13.4838 0.0219876C13.4297 0.0219876 13.3631 0.0172919 13.2925 0.0125217C13.2072 0.00670807 13.1105 0 13.0124 0C12.1483 0 11.984 0.614161 11.963 0.980273C11.9145 1.82639 12.7331 1.88594 13.1265 1.91463Z" fill="#768A9E"/>
                                        <path d="M21.4927 17.4188C21.3806 17.3332 21.2648 17.2446 21.1564 17.1573C20.5811 16.6944 19.9691 16.2676 19.3772 15.855C19.2544 15.7694 19.1316 15.6837 19.0092 15.5979C18.251 15.0653 17.5694 14.8066 16.9254 14.8066C16.0581 14.8066 15.3019 15.2858 14.6777 16.2308C14.4012 16.6498 14.0657 16.8535 13.6523 16.8535C13.4078 16.8535 13.13 16.7837 12.8267 16.6461C10.3796 15.5363 8.6321 13.8349 7.63282 11.5889C7.14977 10.5034 7.30636 9.79384 8.1565 9.21634C8.63926 8.88869 9.53784 8.27871 9.47419 7.11061C9.40212 5.78412 6.47531 1.79289 5.24214 1.33958C4.72003 1.14758 4.17146 1.14579 3.60872 1.3351C2.19108 1.81167 1.17377 2.64862 0.666488 3.7553C0.176277 4.82464 0.198413 6.08025 0.730513 7.38638C2.26875 11.1627 4.43143 14.4552 7.15871 17.1722C9.82823 19.8319 13.1093 22.0105 16.9107 23.6474C17.2533 23.7948 17.6127 23.8752 17.8752 23.9339C17.9646 23.954 18.0418 23.9711 18.0981 23.9866C18.129 23.995 18.1609 23.9995 18.1929 23.9998L18.2229 24C18.223 24 18.2229 24 18.2231 24C20.011 24 22.1578 22.3662 22.8171 20.5036C23.3948 18.8726 22.3401 18.0665 21.4927 17.4188Z" fill="#768A9E"/>
                                        <path d="M13.9145 6.22868C13.6084 6.23643 12.9713 6.25223 12.7478 6.90105C12.6432 7.20426 12.6558 7.46751 12.7851 7.68351C12.9748 8.00043 13.3384 8.09755 13.6691 8.15084C14.8684 8.34328 15.4844 9.00649 15.6076 10.2378C15.6648 10.8119 16.0515 11.2128 16.5479 11.2128H16.5479C16.5846 11.2128 16.6221 11.2107 16.6594 11.2061C17.2564 11.1351 17.5459 10.6965 17.5197 9.90254C17.5292 9.07394 17.0956 8.13325 16.3581 7.38396C15.618 6.63236 14.7259 6.20908 13.9145 6.22868Z" fill="#768A9E"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <a href="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.003 0H11.997C5.3805 0 0 5.382 0 12C0 14.625 0.846 17.058 2.2845 19.0335L0.789 23.4915L5.4015 22.017C7.299 23.274 9.5625 24 12.003 24C18.6195 24 24 18.6165 24 12C24 5.3835 18.6195 0 12.003 0ZM18.9855 16.9455C18.696 17.763 17.547 18.441 16.6305 18.639C16.0035 18.7725 15.1845 18.879 12.4275 17.736C8.901 16.275 6.63 12.6915 6.453 12.459C6.2835 12.2265 5.028 10.5615 5.028 8.8395C5.028 7.1175 5.9025 6.279 6.255 5.919C6.5445 5.6235 7.023 5.4885 7.482 5.4885C7.6305 5.4885 7.764 5.496 7.884 5.502C8.2365 5.517 8.4135 5.538 8.646 6.0945C8.9355 6.792 9.6405 8.514 9.7245 8.691C9.81 8.868 9.8955 9.108 9.7755 9.3405C9.663 9.5805 9.564 9.687 9.387 9.891C9.21 10.095 9.042 10.251 8.865 10.47C8.703 10.6605 8.52 10.8645 8.724 11.217C8.928 11.562 9.633 12.7125 10.671 13.6365C12.0105 14.829 13.0965 15.21 13.485 15.372C13.7745 15.492 14.1195 15.4635 14.331 15.2385C14.5995 14.949 14.931 14.469 15.2685 13.9965C15.5085 13.6575 15.8115 13.6155 16.1295 13.7355C16.4535 13.848 18.168 14.6955 18.5205 14.871C18.873 15.048 19.1055 15.132 19.191 15.2805C19.275 15.429 19.275 16.1265 18.9855 16.9455Z" fill="#768A9E"/>
                                </svg>
                            </a>
                            <a href="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M9.41718 15.1804L9.02018 20.7644C9.58818 20.7644 9.83418 20.5204 10.1292 20.2274L12.7922 17.6824L18.3102 21.7234C19.3222 22.2874 20.0352 21.9904 20.3082 20.7924L23.9302 3.82043L23.9312 3.81943C24.2522 2.32343 23.3902 1.73843 22.4042 2.10543L1.11418 10.2564C-0.338822 10.8204 -0.316822 11.6304 0.867178 11.9974L6.31018 13.6904L18.9532 5.77943C19.5482 5.38543 20.0892 5.60343 19.6442 5.99743L9.41718 15.1804Z" fill="#768A9E"/>
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
                                <p>Перейти на страницу автора</p>
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
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
