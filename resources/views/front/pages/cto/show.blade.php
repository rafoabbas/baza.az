@extends('front.layouts.app')

@section('content')
    <section class="cart-main-info single-sto">
        <div class="general-conteiner">
            <h2 class="cart-main-info__title">СТО Бусик Авто Спец Авто</h2>
            <div class="catalog_bread-crumbs">
                <a href="">Главная</a>
                <a href="">/ Каталог СТО</a>
                <p>/ СТО Бусик Авто Спец Авто</p>
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
                    <h2 class="general-titleV2">Услуги СТО Бусик Авто Спец Авто</h2>
                    <div class="setings-search__acordeon-conteiner catalog-sto-section__acordeon-conteiner">
                        <div class="acordeon-conteiner__box acordeon-element">
                            <div class="acordeon-conteiner__box-title acordeon-element__title">
                                <h4 class="cart-main-info__title">Двигатель</h4>
                                <span class="acordeon-conteiner__box__nam-element">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.7951 16.6583C13.734 17.0325 13.6369 17.394 13.506 17.7397L14.6801 18.8036C14.5155 19.1501 14.328 19.4831 14.1116 19.7959L12.6041 19.3099C12.3664 19.6005 12.1001 19.8664 11.8095 20.1041L12.2955 21.6116C11.9827 21.828 11.6497 22.0151 11.3033 22.1801L10.2394 21.006C9.89363 21.1369 9.5325 21.234 9.15788 21.2951L8.823 22.8461C8.63363 22.8611 8.4435 22.875 8.25 22.875C8.0565 22.875 7.86638 22.8611 7.67663 22.8461L7.34175 21.2951C6.9675 21.234 6.606 21.1369 6.26025 21.006L5.19637 22.1801C4.84988 22.0155 4.51688 21.828 4.20413 21.6116L4.69012 20.1041C4.3995 19.8664 4.13363 19.6001 3.89587 19.3099L2.38838 19.7959C2.172 19.4831 1.98488 19.1501 1.81988 18.8036L2.994 17.7397C2.86313 17.394 2.766 17.0329 2.70487 16.6583L1.15387 16.3234C1.13887 16.1336 1.125 15.9435 1.125 15.75C1.125 15.5565 1.13887 15.3664 1.15387 15.1766L2.70487 14.8417C2.766 14.4675 2.86313 14.106 2.994 13.7603L1.81988 12.6964C1.9845 12.3499 2.172 12.0169 2.38838 11.7041L3.89587 12.1901C4.13363 11.8995 4.39988 11.6336 4.6905 11.3959L4.2045 9.88837C4.51725 9.672 4.85025 9.48488 5.19675 9.31988L6.26062 10.494C6.60637 10.3631 6.9675 10.266 7.34212 10.2049L7.677 8.65387C7.86637 8.63887 8.0565 8.625 8.25 8.625C8.4435 8.625 8.63362 8.63887 8.82337 8.65387L9.15825 10.2049C9.5325 10.266 9.894 10.3631 10.2397 10.494L11.3036 9.31988C11.6501 9.4845 11.9831 9.672 12.2959 9.88837L11.8099 11.3959C12.1005 11.6336 12.3664 11.8999 12.6041 12.1905L14.1116 11.7045C14.328 12.0173 14.5151 12.3503 14.6801 12.6968L13.506 13.7606C13.6369 14.1064 13.734 14.4675 13.7951 14.8421L15.3461 15.177C15.3611 15.3664 15.375 15.5565 15.375 15.75C15.375 15.9435 15.3611 16.1336 15.3461 16.3234L13.7951 16.6583ZM8.25 12C6.17887 12 4.5 13.6789 4.5 15.75C4.5 17.8211 6.17887 19.5 8.25 19.5C10.3211 19.5 12 17.8211 12 15.75C12 13.6789 10.3211 12 8.25 12Z" fill="#768A9E"></path>
                                        <path d="M18.9971 6.11438C18.9386 6.30825 18.8621 6.49425 18.768 6.66937L19.3601 7.80413C19.1602 8.05688 18.9323 8.28487 18.6795 8.48475L17.5447 7.89263C17.3696 7.98713 17.1836 8.06363 16.9897 8.12175L16.6058 9.34425C16.4475 9.363 16.2877 9.375 16.125 9.375C15.9622 9.375 15.8025 9.363 15.6446 9.34463L15.2606 8.12213C15.0667 8.064 14.8808 7.98712 14.7056 7.893L13.5709 8.48513C13.3181 8.28525 13.0901 8.05725 12.8903 7.8045L13.4824 6.66975C13.3879 6.49462 13.3114 6.30862 13.2532 6.11475L12.0308 5.73075C12.012 5.5725 12 5.41275 12 5.25C12 5.08725 12.012 4.9275 12.0304 4.76962L13.2529 4.38562C13.311 4.19175 13.3879 4.00575 13.482 3.83063L12.8899 2.69588C13.0898 2.44313 13.3177 2.21513 13.5705 2.01525L14.7053 2.60738C14.8804 2.51288 15.0664 2.43638 15.2603 2.37825L15.6442 1.15575C15.8025 1.137 15.9622 1.125 16.125 1.125C16.2877 1.125 16.4475 1.137 16.6054 1.15538L16.9894 2.37788C17.1832 2.436 17.3692 2.51288 17.5444 2.607L18.6791 2.01488C18.9319 2.21475 19.1599 2.44275 19.3597 2.6955L18.7676 3.83025C18.8621 4.00537 18.9386 4.19138 18.9968 4.38525L20.2192 4.76925C20.238 4.9275 20.25 5.08725 20.25 5.25C20.25 5.41275 20.238 5.5725 20.2196 5.73038L18.9971 6.11438ZM16.125 3.75C15.2966 3.75 14.625 4.42162 14.625 5.25C14.625 6.07837 15.2966 6.75 16.125 6.75C16.9534 6.75 17.625 6.07837 17.625 5.25C17.625 4.42162 16.9534 3.75 16.125 3.75Z" fill="#768A9E"></path>
                                        <path d="M22.0271 14.5766C21.9694 14.7847 21.888 14.982 21.7838 15.1661L22.1569 15.9514C21.9874 16.1677 21.7927 16.3624 21.5764 16.5319L20.7911 16.1588C20.6074 16.263 20.4097 16.3444 20.2016 16.4021L19.9099 17.2226C19.7752 17.2391 19.6391 17.25 19.5 17.25C19.3609 17.25 19.2248 17.2391 19.0901 17.2226L18.7984 16.4021C18.5903 16.3444 18.393 16.263 18.2089 16.1588L17.4236 16.5319C17.2073 16.3624 17.0126 16.1677 16.8431 15.9514L17.2162 15.1661C17.112 14.9824 17.0306 14.7848 16.9729 14.577L16.1524 14.2853C16.1359 14.1503 16.125 14.0141 16.125 13.875C16.125 13.7359 16.1359 13.5998 16.1524 13.4651L16.9729 13.1734C17.0306 12.9653 17.112 12.768 17.2162 12.5842L16.8431 11.799C17.0126 11.5826 17.2073 11.388 17.4236 11.2185L18.2089 11.5916C18.3926 11.4874 18.5903 11.406 18.7984 11.3482L19.0901 10.5277C19.2248 10.5109 19.3609 10.5 19.5 10.5C19.6391 10.5 19.7752 10.5109 19.9099 10.5274L20.2016 11.3479C20.4097 11.4056 20.607 11.487 20.7911 11.5912L21.5764 11.2181C21.7927 11.3876 21.9874 11.5822 22.1569 11.7986L21.7838 12.5839C21.888 12.7676 21.9694 12.9653 22.0271 13.1734L22.8476 13.4651C22.8641 13.5998 22.875 13.7359 22.875 13.875C22.875 14.0141 22.8641 14.1502 22.8476 14.2849L22.0271 14.5766ZM19.5 12.75C18.8786 12.75 18.375 13.2536 18.375 13.875C18.375 14.4964 18.8786 15 19.5 15C20.1214 15 20.625 14.4964 20.625 13.875C20.625 13.2536 20.1214 12.75 19.5 12.75Z" fill="#768A9E"></path>
                                        <path d="M22.9472 1.88258L20.7044 1.43408L20.2559 3.67658L20.9912 3.82396L21.1934 2.81446C21.5567 3.57046 21.7487 4.40371 21.7487 5.25008C21.7487 6.54308 21.322 7.75883 20.515 8.76571L21.1004 9.23483C22.0022 8.10946 22.4987 6.69458 22.4987 5.25008C22.4987 4.26796 22.2719 3.29971 21.8402 2.42596L22.8002 2.61796L22.9472 1.88258Z" fill="#768A9E"></path>
                                        <path d="M8.88969 4.98486L8.35944 5.51511L8.86906 6.02474C8.66281 6.01161 8.45619 5.99999 8.24956 5.99999C5.34856 5.99999 2.61781 7.27911 0.757812 9.50961L1.33381 9.98998C3.05094 7.93086 5.57131 6.74999 8.24956 6.74999C8.44044 6.74999 8.63094 6.76086 8.82144 6.77286L8.35944 7.23486L8.88969 7.76511L10.2798 6.37499L8.88969 4.98486Z" fill="#768A9E"></path>
                                    </svg>
                                </span>
                                <div class="acordeon-conteiner__open-icon">
                                    <span class="ac-icV1"></span>
                                    <span class="ac-icV2"></span>
                                </div>
                            </div>
                            <div class="acordeon-conteiner__claster acordeon-element__claster">
                                <div class="acordeon-conteiner__claster-wrapper">
                                    <ul class="acordeon-conteiner__link-conteiner">
                                        <li><a href="{{ route('cto.catalog') }}">Капитальный ремонт двигателя</a></li>
                                        <li><a href="{{ route('cto.catalog') }}">Диагностика двигателя</a></li>
                                        <li><a href="{{ route('cto.catalog') }}">Замена и ремонт турбины</a></li>
                                        <li><a href="{{ route('cto.catalog') }}">Чип-тюнинг двигателя</a></li>
                                        <li><a href="{{ route('cto.catalog') }}">Ремонт головки блока цилиндров (ГБЦ)</a></li>
                                        <li><a href="{{ route('cto.catalog') }}">Замена прокладки блока цилиндров (ГБЦ)</a></li>
                                        <li><a href="{{ route('cto.catalog') }}">Замена водяной помпы</a></li>
                                        <li><a href="{{ route('cto.catalog') }}">Замена термостата</a></li>
                                        <li><a href="{{ route('cto.catalog') }}">Замена и ремонт радиатора охлаждения двигателя</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon-conteiner__box acordeon-element">
                            <div class="acordeon-conteiner__box-title acordeon-element__title">
                                <h4 class="cart-main-info__title">Ходовая система</h4>
                                <span class="acordeon-conteiner__box__nam-element">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.9167 7.83332H18.75C19.4393 7.83332 20 7.27262 20 6.58332V3.25C20 2.5607 19.4393 2 18.75 2H17.9167C17.2274 2 16.6667 2.5607 16.6667 3.25V4.11941L13.6324 4.3952C13.4341 3.96648 13.0027 3.66668 12.5 3.66668C11.9973 3.66668 11.566 3.96645 11.3676 4.3952L8.33332 4.11941V3.25C8.33332 2.5607 7.77262 2 7.08332 2H6.25C5.5607 2 5 2.5607 5 3.25V6.58332C5 7.27262 5.5607 7.83332 6.25 7.83332H7.08332C7.77262 7.83332 8.33332 7.27262 8.33332 6.58332V5.71395L11.3676 5.43816C11.4402 5.59504 11.5447 5.73246 11.6722 5.84613L11.9759 10.355C11.7991 10.4032 11.6666 10.5578 11.6666 10.75V13.25C11.6666 13.4351 11.789 13.5866 11.9558 13.641L11.6728 17.32C11.4155 17.5492 11.25 17.8791 11.25 18.25V18.5513L8.33332 18.2861V17.4166C8.33332 16.7273 7.77262 16.1666 7.08332 16.1666H6.25C5.5607 16.1666 5 16.7273 5 17.4166V20.75C5 21.4393 5.5607 22 6.25 22H7.08332C7.77262 22 8.33332 21.4393 8.33332 20.75V19.8806L11.25 19.6154V19.9166C11.25 20.6059 11.8107 21.1666 12.5 21.1666C13.1893 21.1666 13.75 20.6059 13.75 19.9166V19.6154L16.6667 19.8806V20.75C16.6667 21.4393 17.2274 22 17.9167 22H18.75C19.4393 22 20 21.4393 20 20.75V17.4167C20 16.7274 19.4393 16.1667 18.75 16.1667H17.9167C17.2274 16.1667 16.6667 16.7274 16.6667 17.4167V18.2861L13.75 18.5513V18.25C13.75 17.879 13.5844 17.549 13.3269 17.3199L13.0412 13.6416C13.2095 13.588 13.3333 13.4361 13.3333 13.25V10.75C13.3333 10.559 13.2025 10.4049 13.0273 10.3557L13.3279 5.84609C13.4553 5.73242 13.5598 5.59504 13.6324 5.43824L16.6666 5.71402V6.5834C16.6667 7.27262 17.2274 7.83332 17.9167 7.83332Z" fill="#768A9E"></path>
                                    </svg>
                                </span>
                                <div class="acordeon-conteiner__open-icon">
                                    <span class="ac-icV1"></span>
                                    <span class="ac-icV2"></span>
                                </div>
                            </div>
                            <div class="acordeon-conteiner__claster acordeon-element__claster">
                                <div class="acordeon-conteiner__claster-wrapper">
                                    <ul class="acordeon-conteiner__link-conteiner">
                                        <li><a href="{{ route('cto.catalog') }}">Капитальный ремонт двигателя</a></li>
                                        <li><a href="{{ route('cto.catalog') }}">Диагностика двигателя</a></li>
                                        <li><a href="{{ route('cto.catalog') }}">Замена и ремонт турбины</a></li>
                                        <li><a href="{{ route('cto.catalog') }}">Чип-тюнинг двигателя</a></li>
                                        <li><a href="{{ route('cto.catalog') }}">Ремонт головки блока цилиндров (ГБЦ)</a></li>
                                        <li><a href="{{ route('cto.catalog') }}">Замена прокладки блока цилиндров (ГБЦ)</a></li>
                                        <li><a href="{{ route('cto.catalog') }}">Замена водяной помпы</a></li>
                                        <li><a href="{{ route('cto.catalog') }}">Замена термостата</a></li>
                                        <li><a href="{{ route('cto.catalog') }}">Замена и ремонт радиатора охлаждения двигателя</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cart-main-info__autor-info-mobile">
                        <div class="singl-sto-sitebar__header">
                            <p>СТО № <b>2 543</b></p>
                        </div>
                        <ul class="cart-main-info__location-conteiner">
                            <li>г. Баку, Хатаинский р., пр. Бабека, (Автомобильный рынок)</li>
                        </ul>
                        <ul class="cart-main-info__phone-conteiner">
                            <li><a href="{{ route('cto.catalog') }}tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                            <li><a href="{{ route('cto.catalog') }}tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                            <li><a href="{{ route('cto.catalog') }}tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                        </ul>
                        <ul class="cart-main-info__time-work">
                            <li>Пн-Пт: 08:00-20:00</li>
                            <li>Сб-Вс: 12:00-17:00</li>
                        </ul>
                        <ul class="cart-main-info__email">
                            <li><a href="{{ route('cto.catalog') }}mailto:baza.az@gmail.com">baza.az@gmail.com</a></li>
                        </ul>
                        <ul class="cart-main-info__link-website">
                            <li><a href="{{ route('cto.catalog') }}avto.com">avto.com</a></li>
                        </ul>
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
                    </div>
                    <div class="brend-conteiner">
                        <h2 class="general-titleV2">Услуги СТО Бусик Авто Спец Авто</h2>
                        <div class="brend-conteiner__claster">
                            <div class="brend-conteiner__box">
                                <div class="brend-conteiner__icon">
                                    <img src="{{ asset('assets/front/img/_src/mark1.svg') }}" alt="">
                                </div>
                                <h5 class="brend-conteiner__title">Audi</h5>
                            </div>
                            <div class="brend-conteiner__box">
                                <div class="brend-conteiner__icon">
                                    <img src="{{ asset('assets/front/img/_src/mark2.svg') }}" alt="">
                                </div>
                                <h5 class="brend-conteiner__title">Infiniti</h5>
                            </div>
                            <div class="brend-conteiner__box">
                                <div class="brend-conteiner__icon">
                                    <img src="{{ asset('assets/front/img/_src/mark3.svg') }}" alt="">
                                </div>
                                <h5 class="brend-conteiner__title">Mercedes</h5>
                            </div>
                            <div class="brend-conteiner__box">
                                <div class="brend-conteiner__icon">
                                    <img src="{{ asset('assets/front/img/_src/mark4.svg') }}" alt="">
                                </div>
                                <h5 class="brend-conteiner__title">Lexus</h5>
                            </div>
                            <div class="brend-conteiner__box">
                                <div class="brend-conteiner__icon">
                                    <img src="{{ asset('assets/front/img/_src/mark5.svg') }}" alt="">
                                </div>
                                <h5 class="brend-conteiner__title">Acura</h5>
                            </div>
                            <div class="brend-conteiner__box">
                                <div class="brend-conteiner__icon">
                                    <img src="{{ asset('assets/front/img/_src/mark1.svg') }}" alt="">
                                </div>
                                <h5 class="brend-conteiner__title">Audi</h5>
                            </div>
                            <div class="brend-conteiner__box">
                                <div class="brend-conteiner__icon">
                                    <img src="{{ asset('assets/front/img/_src/mark2.svg') }}" alt="">
                                </div>
                                <h5 class="brend-conteiner__title">Infiniti</h5>
                            </div>
                            <div class="brend-conteiner__box">
                                <div class="brend-conteiner__icon">
                                    <img src="{{ asset('assets/front/img/_src/mark3.svg') }}" alt="">
                                </div>
                                <h5 class="brend-conteiner__title">Mercedes</h5>
                            </div>
                            <div class="brend-conteiner__box">
                                <div class="brend-conteiner__icon">
                                    <img src="{{ asset('assets/front/img/_src/mark4.svg') }}" alt="">
                                </div>
                                <h5 class="brend-conteiner__title">Lexus</h5>
                            </div>
                            <div class="brend-conteiner__box">
                                <div class="brend-conteiner__icon">
                                    <img src="{{ asset('assets/front/img/_src/mark5.svg') }}" alt="">
                                </div>
                                <h5 class="brend-conteiner__title">Acura</h5>
                            </div>
                            <div class="brend-conteiner__box">
                                <div class="brend-conteiner__icon">
                                    <img src="{{ asset('assets/front/img/_src/mark1.svg') }}" alt="">
                                </div>
                                <h5 class="brend-conteiner__title">Audi</h5>
                            </div>
                            <div class="brend-conteiner__box">
                                <div class="brend-conteiner__icon">
                                    <img src="{{ asset('assets/front/img/_src/mark2.svg') }}" alt="">
                                </div>
                                <h5 class="brend-conteiner__title">Infiniti</h5>
                            </div>
                            <div class="brend-conteiner__box">
                                <div class="brend-conteiner__icon">
                                    <img src="{{ asset('assets/front/img/_src/mark3.svg') }}" alt="">
                                </div>
                                <h5 class="brend-conteiner__title">Mercedes</h5>
                            </div>
                            <div class="brend-conteiner__box">
                                <div class="brend-conteiner__icon">
                                    <img src="{{ asset('assets/front/img/_src/mark4.svg') }}" alt="">
                                </div>
                                <h5 class="brend-conteiner__title">Lexus</h5>
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
                                    <img src="{{ asset('assets/front/img/_src/ads2.svg') }}" alt="">
                                </div>
                                <h5 class="advantages-conteiner__title">Оплата по безналу</h5>
                            </div>
                            <div class="advantages-conteiner__box">
                                <div class="advantages-conteiner__icon">
                                    <img src="{{ asset('assets/front/img/_src/ads3.svg') }}" alt="">
                                </div>
                                <h5 class="advantages-conteiner__title">Зона для отдыха</h5>
                            </div>
                        </div>
                    </div>
                    <div class="description-sto-conteiner">
                        <h2 class="general-titleV2">Описание представителя СТО</h2>
                        <div class="description-sto-conteiner__claster">
                            <div class="description-sto-conteiner__column">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
                            </div>
                            <div class="description-sto-conteiner__column">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="sing-sto-slider">
                        <div class="sing-sto-slider__big-slider">
                            <div class="sing-sto-slider__element">
                                <img src="{{ asset('assets/front/img/_src/sl1.jpg') }}" alt="">
                            </div>
                            <div class="sing-sto-slider__element">
                                <img src="{{ asset('assets/front/img/_src/sl1.jpg') }}" alt="">
                            </div>
                            <div class="sing-sto-slider__element">
                                <img src="{{ asset('assets/front/img/_src/sl1.jpg') }}" alt="">
                            </div>
                            <div class="sing-sto-slider__element">
                                <img src="{{ asset('assets/front/img/_src/sl1.jpg') }}" alt="">
                            </div>
                            <div class="sing-sto-slider__element">
                                <img src="{{ asset('assets/front/img/_src/sl1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="sing-sto-slider__spall-slider">
                            <div class="sing-sto-slider__element">
                                <img src="{{ asset('assets/front/img/_src/sl1.jpg') }}" alt="">
                            </div>
                            <div class="sing-sto-slider__element">
                                <img src="{{ asset('assets/front/img/_src/sl1.jpg') }}" alt="">
                            </div>
                            <div class="sing-sto-slider__element">
                                <img src="{{ asset('assets/front/img/_src/sl1.jpg') }}" alt="">
                            </div>
                            <div class="sing-sto-slider__element">
                                <img src="{{ asset('assets/front/img/_src/sl1.jpg') }}" alt="">
                            </div>
                            <div class="sing-sto-slider__element">
                                <img src="{{ asset('assets/front/img/_src/sl1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="cart-main-info__map-conteiner">
                        <div id="map3"></div>
                    </div>
                </div>
                <aside class="catalog__filtr ads-sitebar catalog__filtr-auto-store singl-sto-sitebar">
                    <div class="catalog__filtr-wrapper">
                        <div class="singl-sto-sitebar__header">
                            <p>СТО № <b>2 543</b></p>
                        </div>
                        <ul class="cart-main-info__location-conteiner">
                            <li>г. Баку, Хатаинский р., пр. Бабека, (Автомобильный рынок)</li>
                        </ul>
                        <ul class="cart-main-info__phone-conteiner">
                            <li><a href="{{ route('cto.catalog') }}tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                            <li><a href="{{ route('cto.catalog') }}tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                            <li><a href="{{ route('cto.catalog') }}tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                        </ul>
                        <ul class="cart-main-info__time-work">
                            <li>Пн-Пт: 08:00-20:00</li>
                            <li>Сб-Вс: 12:00-17:00</li>
                        </ul>
                        <ul class="cart-main-info__email">
                            <li><a href="{{ route('cto.catalog') }}mailto:baza.az@gmail.com">baza.az@gmail.com</a></li>
                        </ul>
                        <ul class="cart-main-info__link-website">
                            <li><a href="{{ route('cto.catalog') }}avto.com">avto.com</a></li>
                        </ul>
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
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
