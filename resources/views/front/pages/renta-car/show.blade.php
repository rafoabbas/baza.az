@extends('front.layouts.app')

@section('content')
    <section class="cart-main-info singl-rent-car">
        <div class="general-conteiner">
            <h2 class="cart-main-info__title">Аренда Ford Focus Sport Plus 2017</h2>
            <div class="catalog_bread-crumbs">
                <a href="">Главная</a>
                <a href="">/ Авто в аренду</a>
                <p>/ Аренда Ford Focus Sport Plus 2017</p>
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
                    <div class="cart-main-info__slider-conteiner">
                        <div class="cart-main-info__big-slider-conteiner singl-rent-info-big">
                            <div class="singl-rent-info-big__big-slider cart-main-info__big-slider " data-advantages-open="galery-photo">
                                <div class="cart-main-info__big-slider__element open_advantages-popup" data-advantages-open="galery-photo">
                                    <img src="{{ asset('assets/front/img/_src/carslider.jpg') }}" alt="">
                                </div>
                                <div class="cart-main-info__big-slider__element open_advantages-popup" data-advantages-open="galery-photo">
                                    <img src="{{ asset('assets/front/img/_src/baner2.jpg') }}" alt="">
                                </div>
                                <div class="cart-main-info__big-slider__element open_advantages-popup" data-advantages-open="galery-photo">
                                    <img src="{{ asset('assets/front/img/_src/carslider.jpg') }}" alt="">
                                </div>
                                <div class="cart-main-info__big-slider__element open_advantages-popup" data-advantages-open="galery-photo">
                                    <img src="{{ asset('assets/front/img/_src/carslider.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="singl-rent-info__info-list">
                            <ul class="cart-main-info__haracteristic-ul">
                                <li>
                                    <span class="har-value">Класс автомобиля</span>
                                    <span class="har-var">эконом</span>
                                </li>
                                <li>
                                    <span class="har-value">Тип топлива</span>
                                    <span class="har-var">бензин, 2 л</span>
                                </li>
                                <li>
                                    <span class="har-value">Коробка</span>
                                    <span class="har-var">автомат</span>
                                </li>
                                <li>
                                    <span class="har-value">Расход топлива</span>
                                    <span class="har-var">7л/100 км</span>
                                </li>
                                <li>
                                    <span class="har-value">Привод</span>
                                    <span class="har-var">задний</span>
                                </li>
                                <li>
                                    <span class="har-value">Привод</span>
                                    <span class="har-var">задний</span>
                                </li>
                                <li>
                                    <span class="har-value">Количество мест</span>
                                    <span class="har-var">5</span>
                                </li>
                                <li>
                                    <span class="har-value">Количество дверей</span>
                                    <span class="har-var">5</span>
                                </li>
                                <li>
                                    <span class="har-value">Год</span>
                                    <span class="har-var">2021</span>
                                </li>
                            </ul>
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
                                    <path d="M12 4L4 12" stroke="#0D417B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M4 4L12 12" stroke="#0D417B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <p>Удалить</p>
                            </div>
                        </div>
                    </div>
                    <div class="cart-main-info__text-info">
                        <div class="rent-car-prise">
                            <h4 class="cart-main-info__title-ul">Стоимость аренды</h4>
                            <div class="rent-car-prise__line">
                                <div class="rent-car-prise__box rent-car-prise__namevar">
                                    <p class="rent-car-prise__name">
                                        <b>Дней:</b>
                                    </p>
                                    <p class="rent-car-prise__prise">
                                        <b>$/день:</b>
                                    </p>
                                </div>
                                <div class="rent-car-prise__box">
                                    <p class="rent-car-prise__name">1 - 3</p>
                                    <p class="rent-car-prise__prise">30</p>
                                </div>
                                <div class="rent-car-prise__box">
                                    <p class="rent-car-prise__name">1 - 3</p>
                                    <p class="rent-car-prise__prise">30</p>
                                </div>
                                <div class="rent-car-prise__box">
                                    <p class="rent-car-prise__name">1 - 3</p>
                                    <p class="rent-car-prise__prise">30</p>
                                </div>
                                <div class="rent-car-prise__box">
                                    <p class="rent-car-prise__name">1 - 3</p>
                                    <p class="rent-car-prise__prise">30</p>
                                </div>
                                <div class="rent-car-prise__box">
                                    <p class="rent-car-prise__name">1 - 3</p>
                                    <p class="rent-car-prise__prise">30</p>
                                </div>
                            </div>
                        </div>
                        <div class="rent-car-characteristic-mobile">
                            <h4 class="cart-main-info__title-ul">Характеристика</h4>
                            <div class="singl-rent-info__info-list">
                                <ul class="cart-main-info__haracteristic-ul">
                                    <li>
                                        <span class="har-value">Класс автомобиля</span>
                                        <span class="har-var">эконом</span>
                                    </li>
                                    <li>
                                        <span class="har-value">Тип топлива</span>
                                        <span class="har-var">бензин, 2 л</span>
                                    </li>
                                    <li>
                                        <span class="har-value">Коробка</span>
                                        <span class="har-var">автомат</span>
                                    </li>
                                    <li>
                                        <span class="har-value">Расход топлива</span>
                                        <span class="har-var">7л/100 км</span>
                                    </li>
                                    <li>
                                        <span class="har-value">Привод</span>
                                        <span class="har-var">задний</span>
                                    </li>
                                    <li>
                                        <span class="har-value">Привод</span>
                                        <span class="har-var">задний</span>
                                    </li>
                                    <li>
                                        <span class="har-value">Количество мест</span>
                                        <span class="har-var">5</span>
                                    </li>
                                    <li>
                                        <span class="har-value">Количество дверей</span>
                                        <span class="har-var">5</span>
                                    </li>
                                    <li>
                                        <span class="har-value">Год</span>
                                        <span class="har-var">2021</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
                            <div class="singl-sto-sitebar__header">
                                <ul class="cart-main-info__ul-info">
                                    <li>
                                        <p>Объявление №</p>
                                        <span>242 569 22</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="rent-cat-sitebar__autor">
                                <h4>Арендодатель</h4>
                                <ul class="rent-cat-sitebar__autor-name">
                                    <li>Назим</li>
                                </ul>
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
                            <div class="bt-page-autor">
                                <a href="" class="btn2">
                                    <p>Забронировать авто</p>
                                </a>
                            </div>
                        </div>
                        <div class="rent-car-list-rules">
                            <h4 class="cart-main-info__title-ul">Стоимость аренды</h4>
                            <ul class="cart-main-info__haracteristic-ul">
                                <li>
                                    <span class="har-value">Класс автомобиля</span>
                                    <span class="har-var">эконом</span>
                                </li>
                                <li>
                                    <span class="har-value">Тип топлива</span>
                                    <span class="har-var">бензин, 2 л</span>
                                </li>
                                <li>
                                    <span class="har-value">Коробка</span>
                                    <span class="har-var">автомат</span>
                                </li>
                                <li>
                                    <span class="har-value">Расход топлива</span>
                                    <span class="har-var">7л/100 км</span>
                                </li>
                                <li>
                                    <span class="har-value">Привод</span>
                                    <span class="har-var">задний</span>
                                </li>
                                <li>
                                    <span class="har-value">Привод</span>
                                    <span class="har-var">задний</span>
                                </li>
                                <li>
                                    <span class="har-value">Количество мест</span>
                                    <span class="har-var">5</span>
                                </li>
                                <li>
                                    <span class="har-value">Количество дверей</span>
                                    <span class="har-var">5</span>
                                </li>
                                <li>
                                    <span class="har-value">Год</span>
                                    <span class="har-var">2021</span>
                                </li>
                            </ul>
                        </div>
                        <div class="cart-main-info__map-conteiner">
                            <h4 class="cart-main-info__title-ul">Места получения/сдачи авто</h4>
                            <div id="map3"></div>
                        </div>
                    </div>
                </div>
                <aside class="catalog__filtr ads-sitebar catalog__filtr-auto-store rent-cat-sitebar">
                    <div class="catalog__filtr-wrapper">
                        <div class="singl-sto-sitebar__header">
                            <ul class="cart-main-info__ul-info">
                                <li>
                                    <p>Объявление №</p>
                                    <span>242 569 22</span>
                                </li>
                            </ul>
                        </div>
                        <div class="rent-cat-sitebar__autor">
                            <h4>Арендодатель</h4>
                            <ul class="rent-cat-sitebar__autor-name">
                                <li>Назим</li>
                            </ul>
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
    @php($items = collect([0,1,2,3,4,5]))
    @includeWhen($items->count(), 'front.pages.partials.renta-cars.section', [
        'title' => 'Похожие автомобили этой же модели',
        'className' => 'other-car',
        'paginationType' => 'loader',
        'items' => $items,
        'route' => route('salon-cart'),
        'showFilter' => false
    ])
    <section class="big-baner-section">
        <img src="{{ asset('assets/front/img/_src/baner3.jpg') }}" alt="">
    </section>
    @includeWhen($items->count(), 'front.pages.partials.renta-cars.section', [
        'title' => 'Похожие автомобили этой же модели',
        'className' => 'other-car',
        'paginationType' => 'loader',
        'items' => $items,
        'route' => route('salon-cart'),
        'showFilter' => false
    ])
@endsection

@push('scripts')
@endpush
