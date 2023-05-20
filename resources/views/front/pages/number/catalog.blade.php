@extends('front.layouts.app')

@section('content')
    <section class="catalog-sec-page  catalog-rent-cars catalog-nambers">
        <div class="general-conteiner">
            <h2 class="general-title">Автомобильные номера</h2>
            <div class="catalog_bread-crumbs">
                <a href="">Главная</a>
                <p>/ Автомобильные номера</p>
            </div>
            <div class="catalog__conteiner-ads catalog-nambers__body">
                <div class="select-namber-conteiner select-namber-conteiner__mobile">
                    <div class="select-namber-conteiner__line">
                        <div class="select-namber-conteiner__select-claster">
                            <div class="select-namber-conteiner__num-country">
                                <div class="select-namber-conteiner__logo-country">
                                    <img src="{{ asset('assets/front/img/_src/map.png') }}" alt="">
                                </div>
                                <div class="select-namber-conteiner__slug-country">AZ</div>
                            </div>
                            <div class="select-namber-conteiner__select-box">
                                <select name="" id="">
                                    <option value="">00</option>
                                    <option value="">11</option>
                                    <option value="">22</option>
                                    <option value="">33</option>
                                    <option value="">44</option>
                                    <option value="">55</option>
                                    <option value="">66</option>
                                    <option value="">77</option>
                                    <option value="">88</option>
                                </select>
                            </div>
                            <div class="select-namber-conteiner__drop"></div>
                            <div class="select-namber-conteiner__select-box">
                                <select name="" id="">
                                    <option value="">HH</option>
                                    <option value="">KK</option>
                                    <option value="">FF</option>
                                    <option value="">EE</option>
                                    <option value="">SS</option>
                                </select>
                            </div>
                            <div class="select-namber-conteiner__drop"></div>
                            <div class="select-namber-conteiner__select-box">
                                <select name="" id="">
                                    <option value="">000</option>
                                    <option value="">111</option>
                                    <option value="">222</option>
                                    <option value="">333</option>
                                    <option value="">444</option>
                                </select>
                            </div>
                        </div>
                        <div class="btn2 btn-search-number">
                            <div class="icon-btn2">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.8067 12.86L11.54 10.6C12.2713 9.66831 12.6681 8.51777 12.6667 7.33334C12.6667 6.2785 12.3539 5.24736 11.7678 4.37029C11.1818 3.49323 10.3489 2.80965 9.37431 2.40598C8.39977 2.00231 7.32742 1.89669 6.29285 2.10248C5.25829 2.30827 4.30798 2.81622 3.5621 3.5621C2.81622 4.30798 2.30827 5.25829 2.10248 6.29285C1.89669 7.32742 2.00231 8.39977 2.40598 9.37431C2.80965 10.3489 3.49323 11.1818 4.37029 11.7678C5.24736 12.3539 6.2785 12.6667 7.33334 12.6667C8.51777 12.6681 9.66831 12.2713 10.6 11.54L12.86 13.8067C12.922 13.8692 12.9957 13.9188 13.077 13.9526C13.1582 13.9864 13.2453 14.0039 13.3333 14.0039C13.4213 14.0039 13.5085 13.9864 13.5897 13.9526C13.671 13.9188 13.7447 13.8692 13.8067 13.8067C13.8692 13.7447 13.9188 13.671 13.9526 13.5897C13.9864 13.5085 14.0039 13.4213 14.0039 13.3333C14.0039 13.2453 13.9864 13.1582 13.9526 13.077C13.9188 12.9957 13.8692 12.922 13.8067 12.86V12.86ZM3.33334 7.33334C3.33334 6.54221 3.56793 5.76885 4.00746 5.11106C4.44698 4.45326 5.0717 3.94057 5.8026 3.63782C6.53351 3.33507 7.33777 3.25585 8.1137 3.41019C8.88962 3.56454 9.60235 3.9455 10.1618 4.50491C10.7212 5.06432 11.1021 5.77705 11.2565 6.55297C11.4108 7.3289 11.3316 8.13317 11.0289 8.86407C10.7261 9.59497 10.2134 10.2197 9.55562 10.6592C8.89782 11.0987 8.12446 11.3333 7.33334 11.3333C6.27247 11.3333 5.25505 10.9119 4.50491 10.1618C3.75476 9.41162 3.33334 8.3942 3.33334 7.33334Z" fill="#768A9E"></path>
                                </svg>
                            </div>
                            <p>Найти номер</p>
                        </div>
                    </div>
                </div>
                <div class="catalog-filtr__mobile-controls">
                    <div class="btn2 catalog-mobile-filtr">
                        <div class="icon-btn2">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path d="M5.8533 8.39744C6.1047 8.76125 6.02955 8.45809 6.02955 15.7098C6.02955 16.3588 6.76992 16.7302 7.29173 16.342C9.52152 14.6609 9.96702 14.5153 9.96702 13.7289C9.96702 8.44444 9.90542 8.74162 10.1433 8.39744L13.7642 3.46875H2.23242L5.8533 8.39744Z" fill="#768A9E"/>
                                    <path d="M15.1322 0.901875C15.0029 0.654062 14.7491 0.5 14.4698 0.5H1.52739C0.924109 0.5 0.569141 1.18053 0.915203 1.675C0.918047 1.67975 0.875922 1.62209 1.54395 2.53125H14.4532C15.0225 1.75647 15.403 1.42172 15.1322 0.901875Z" fill="#768A9E"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="16" height="16" fill="white" transform="translate(0 0.5)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <p>Подбор по типу номера</p>
                    </div>
                </div>
                <aside class="catalog__filtr catalog-page__aside catalog-nambers__aside aside-old">
                    <div class="catalog__filtr-wrapper">
                        <div class="catalog__filtr__filtr-element catalog-page__filtr-element">
                            <h5>Тип номера:</h5>
                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="nambers" value="Зеркальные номера">
                                    <span>Зеркальные номера</span>
                                    <p class="catalog-page__filtr-element-subtitle">Номера с зеркальным отображением цифр. <br>Пример: 3223, 8558, 1441</p>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="nambers" value="Зеркальные номера">
                                    <span>Три цифры подряд</span>
                                    <p class="catalog-page__filtr-element-subtitle">Номера с тремя цифрами подряд.<br>Пример: 0111, 7772, 2228</p>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="nambers" value="Зеркальные номера">
                                    <span>Три нуля + цифра</span>
                                    <p class="catalog-page__filtr-element-subtitle">Номера с комбинацией трех нулей и одной цифрой.<br>Пример: 0001, 1000, 2000</p>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="nambers" value="Зеркальные номера">
                                    <span>Четыре одинаковые цифры</span>
                                    <p class="catalog-page__filtr-element-subtitle">Номера с полностью одинаковыми цифрами.<br>Пример: 0000, 1111, 2222</p>
                                </label>
                            </div>
                        </div>
                        <div class="catalog__filtr__deletefiltr">
                            <button  class="bt_del">
                                <p>Сбросить все фильтры</p>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 4H3.33333H14" stroke="#0D417B" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5.33398 4.00016V2.66683C5.33398 2.31321 5.47446 1.97407 5.72451 1.72402C5.97456 1.47397 6.3137 1.3335 6.66732 1.3335H9.33398C9.68761 1.3335 10.0267 1.47397 10.2768 1.72402C10.5268 1.97407 10.6673 2.31321 10.6673 2.66683V4.00016M12.6673 4.00016V13.3335C12.6673 13.6871 12.5268 14.0263 12.2768 14.2763C12.0267 14.5264 11.6876 14.6668 11.334 14.6668H4.66732C4.3137 14.6668 3.97456 14.5264 3.72451 14.2763C3.47446 14.0263 3.33398 13.6871 3.33398 13.3335V4.00016H12.6673Z" stroke="#0D417B" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6.66602 7.3335V11.3335" stroke="#0D417B" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.33398 7.3335V11.3335" stroke="#0D417B" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <div class="catalog__filtr__upgraide-search-bt-line">
                            <div class="btn2">
                                <p>Применить</p>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__filt-baner-conteiner">
                        <div class="baner-box">
                            <img src="{{ asset('assets/front/img/_src/baner1.jpg') }}" alt="">
                        </div>
                        <div class="baner-box">
                            <img src="{{ asset('assets/front/img/_src/baner2.jpg') }}" alt="">
                        </div>
                    </div>
                </aside>
                <div class="catalog__ads-body conteiner-old">
                    <div class="select-namber-conteiner">
                        <h4 class="select-namber-conteiner__title">Найти номер</h4>
                        <div class="select-namber-conteiner__line">
                            <div class="select-namber-conteiner__select-claster">
                                <div class="select-namber-conteiner__num-country">
                                    <div class="select-namber-conteiner__logo-country">
                                        <img src="{{ asset('assets/front/img/_src/map.png') }}" alt="">
                                    </div>
                                    <div class="select-namber-conteiner__slug-country">AZ</div>
                                </div>
{{--                                <div class="main-search__select-element">--}}
{{--                                    <div class="main-search__list-car-search list-car-search">--}}
{{--                                        <div class="list-car-search__search-line">--}}
{{--                                            <input type="text" placeholder="11">--}}
{{--                                            <span class="main-search__list-car-search__arrow"></span>--}}
{{--                                        </div>--}}
{{--                                        <div class="list-car-search__decision">--}}
{{--                                            <ul class="list-car-search__decision-list">--}}
{{--                                                <li>00</li>--}}
{{--                                                <li>11</li>--}}
{{--                                                <li>22</li>--}}
{{--                                                <li>33</li>--}}
{{--                                                <li>44</li>--}}
{{--                                                <li>55</li>--}}
{{--                                                <li>66</li>--}}
{{--                                                <li>77</li>--}}
{{--                                                <li>88</li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="select-namber-conteiner__select-box">
                                    <select name="" id="">
                                        <option value="">00</option>
                                        <option value="">11</option>
                                        <option value="">22</option>
                                        <option value="">33</option>
                                        <option value="">44</option>
                                        <option value="">55</option>
                                        <option value="">66</option>
                                        <option value="">77</option>
                                        <option value="">88</option>
                                    </select>
                                </div>
                                <div class="select-namber-conteiner__drop"></div>
                                <div class="select-number-conteiner__digits select-number-conteiner__digits-alphabetic">
                                    <input class="number-filter-input" type="text" placeholder="H" maxlength="1" id="number-filter-digit-1">
                                    <input class="number-filter-input" type="text" placeholder="H" maxlength="1" id="number-filter-digit-2">
                                </div>
{{--                                <div class="select-namber-conteiner__select-box">--}}
{{--                                    <select name="" id="">--}}
{{--                                        <option value="">HH</option>--}}
{{--                                        <option value="">KK</option>--}}
{{--                                        <option value="">FF</option>--}}
{{--                                        <option value="">EE</option>--}}
{{--                                        <option value="">SS</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
                                <div class="select-namber-conteiner__drop"></div>
{{--                                <div class="select-namber-conteiner__select-box">--}}
{{--                                    <select name="" id="">--}}
{{--                                        <option value="">000</option>--}}
{{--                                        <option value="">111</option>--}}
{{--                                        <option value="">222</option>--}}
{{--                                        <option value="">333</option>--}}
{{--                                        <option value="">444</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}

                                <div class="select-number-conteiner__digits">
                                    <input class="number-filter-input" type="text" placeholder="0" maxlength="1" id="number-filter-digit-3">
                                    <input class="number-filter-input" type="text" placeholder="0" maxlength="1" id="number-filter-digit-4">
                                    <input class="number-filter-input" type="text" placeholder="0" maxlength="1" id="number-filter-digit-5">
                                </div>
                            </div>
                            <div class="btn2 btn-search-number">
                                <div class="icon-btn2">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.8067 12.86L11.54 10.6C12.2713 9.66831 12.6681 8.51777 12.6667 7.33334C12.6667 6.2785 12.3539 5.24736 11.7678 4.37029C11.1818 3.49323 10.3489 2.80965 9.37431 2.40598C8.39977 2.00231 7.32742 1.89669 6.29285 2.10248C5.25829 2.30827 4.30798 2.81622 3.5621 3.5621C2.81622 4.30798 2.30827 5.25829 2.10248 6.29285C1.89669 7.32742 2.00231 8.39977 2.40598 9.37431C2.80965 10.3489 3.49323 11.1818 4.37029 11.7678C5.24736 12.3539 6.2785 12.6667 7.33334 12.6667C8.51777 12.6681 9.66831 12.2713 10.6 11.54L12.86 13.8067C12.922 13.8692 12.9957 13.9188 13.077 13.9526C13.1582 13.9864 13.2453 14.0039 13.3333 14.0039C13.4213 14.0039 13.5085 13.9864 13.5897 13.9526C13.671 13.9188 13.7447 13.8692 13.8067 13.8067C13.8692 13.7447 13.9188 13.671 13.9526 13.5897C13.9864 13.5085 14.0039 13.4213 14.0039 13.3333C14.0039 13.2453 13.9864 13.1582 13.9526 13.077C13.9188 12.9957 13.8692 12.922 13.8067 12.86V12.86ZM3.33334 7.33334C3.33334 6.54221 3.56793 5.76885 4.00746 5.11106C4.44698 4.45326 5.0717 3.94057 5.8026 3.63782C6.53351 3.33507 7.33777 3.25585 8.1137 3.41019C8.88962 3.56454 9.60235 3.9455 10.1618 4.50491C10.7212 5.06432 11.1021 5.77705 11.2565 6.55297C11.4108 7.3289 11.3316 8.13317 11.0289 8.86407C10.7261 9.59497 10.2134 10.2197 9.55562 10.6592C8.89782 11.0987 8.12446 11.3333 7.33334 11.3333C6.27247 11.3333 5.25505 10.9119 4.50491 10.1618C3.75476 9.41162 3.33334 8.3942 3.33334 7.33334Z" fill="#768A9E"></path>
                                    </svg>
                                </div>
                                <p>Найти номер</p>
                            </div>
                        </div>
                    </div>
                    <div class="ads-body__header">
                        <div class="banerV2">
                            <img src="{{ asset('assets/front/img/_src/baner3.jpg') }}" alt="">
                        </div>
                    </div>
{{--                    <div class="ads-namber-conteiner">--}}
{{--                        <div class="sing-numbers-section__img-box sing-numbers-section__img-carV1">--}}
{{--                            <div class="ads-namber-box__statys">--}}
{{--                                <div class="ads-namber-box__statys-element ads-namber-box__status-vip">VIP</div>--}}
{{--                            </div>--}}
{{--                            <div class="sing-numbers-section__nam-image nam-value">--}}
{{--                                <div class="select-namber-conteiner__num-country">--}}
{{--                                    <div class="select-namber-conteiner__logo-country">--}}
{{--                                        <img src="{{ asset('assets/front/img/_src/map.png') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="select-namber-conteiner__slug-country">AZ</div>--}}
{{--                                </div>--}}
{{--                                <h4 class="am-value__nm">00</h4>--}}
{{--                                <div class="select-namber-conteiner__drop"></div>--}}
{{--                                <h4 class="am-value__nm">HH</h4>--}}
{{--                                <div class="select-namber-conteiner__drop"></div>--}}
{{--                                <h4 class="am-value__nm">000</h4>--}}
{{--                            </div>--}}
{{--                            <img src="{{ asset('assets/front/img/_src/nam-car1.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="ads-vip-namber-conteiner">
                        <h4 class="cart-main-info__title-ul">VIP номера</h4>
                        <div class="ads-namber-box">
                            <a href="{{ route('number.show') }}" class="sing-numbers-section__img-box sing-numbers-section__img-carV1">
                                <div class="ads-namber-box__statys">
                                    <div class="ads-namber-box__statys-element ads-namber-box__status-vip">VIP</div>
                                </div>
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
                            </a>
                            <h4 class="namber-image__prise">950$</h4>
                            <p class="namber-image__date-post">08.02.2021, 16:58</p>
                        </div>
                        <div class="ads-namber-box">
                            <a href="{{ route('number.show') }}" class="sing-numbers-section__img-box sing-numbers-section__img-carV1">
                                <div class="ads-namber-box__statys">
                                    <div class="ads-namber-box__statys-element ads-namber-box__status-vip">VIP</div>
                                </div>
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
                            </a>
                            <h4 class="namber-image__prise">950$</h4>
                            <p class="namber-image__date-post">08.02.2021, 16:58</p>
                        </div>
                    </div>
                    <div class="ads-namber-conteiner">
                        <h4 class="cart-main-info__title-ul">Другие номера</h4>
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
                    <div class="line-pagination">
                        <a href="" class="line-pagination__ar parination-prev">
                            <img src="{{ asset('assets/front/img/_src/pagination_ar.png') }}" alt="">
                        </a>
                        <div class="line-pagination__page-nam">
                            <a href="" class="line-pagination__link-page line-pagination__activ-page">1</a>
                            <a href="" class="line-pagination__link-page">2</a>
                            <a href="" class="line-pagination__link-page">3</a>
                            <a href="" class="line-pagination__link-page">4</a>
                            <a href="" class="line-pagination__link-page">..</a>
                            <a href="" class="line-pagination__link-page">10</a>
                        </div>
                        <a href="" class="line-pagination__ar parination-next">
                            <img src="{{ asset('assets/front/img/_src/pagination_ar.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>

        // Number Filter
        const input = document.querySelectorAll(".number-filter-input");
        const inputField = document.querySelector(".select-number-conteiner__digits");
        const submitButton = document.getElementById("number-submit");
        let inputCount = 0,
            finalInput = "";

        const numberFilterSubmit = (e) => {
            e.preventDefault();
            e.stopPropagation();

            let searchParams = '';
            input.forEach((item) => {
                searchParams += `${item.getAttribute('data-name')}=${item.value}`;
            })
            console.log({searchParams});
        }

        //Update input
        const updateInputConfig = (element, disabledStatus) => {
            // element.disabled = disabledStatus;
            if (!disabledStatus) {
                element.focus();
            } else {
                element.blur();
            }
        };

        input.forEach((element) => {
            element.addEventListener("keyup", (e) => {
                let isAlphabetic = e.target.closest(".select-number-conteiner__digits-alphabetic");
                let regex = !isAlphabetic ? /[a-zA-Z]/g : /[0-9]/g;
                e.target.value = e.target.value.replace(regex, "");
                let { value } = e.target;

                if (value.length == 1) {
                    updateInputConfig(e.target, true);
                    if (inputCount <= 6 && e.key != "Backspace") {
                        finalInput += value;
                        if (inputCount < 6) {
                            updateInputConfig(e.target.nextElementSibling, false);
                        }
                    }
                    inputCount += 1;
                } else if (value.length == 0 && e.key == "Backspace") {
                    finalInput = finalInput.substring(0, finalInput.length - 1);
                    if (inputCount == 0) {
                        updateInputConfig(e.target, false);
                        return false;
                    }
                    updateInputConfig(e.target, true);
                    e.target.previousElementSibling.value = "";
                    updateInputConfig(e.target.previousElementSibling, false);
                    inputCount -= 1;
                } else if (value.length > 1) {
                    e.target.value = value.split("")[0];
                }
                submitButton.classList.add("hide");
            });
        });

        window.addEventListener("keyup", (e) => {
            if (inputCount > 6) {
                submitButton.classList.remove("hide");
                submitButton.classList.add("show");
                if (e.key == "Backspace") {
                    finalInput = finalInput.substring(0, finalInput.length - 1);
                    updateInputConfig(inputField.lastElementChild, false);
                    inputField.lastElementChild.value = "";
                    inputCount -= 1;
                    submitButton.classList.add("hide");
                }
            }
        });

        //Start
        const startInput = () => {
            inputCount = 0;
            finalInput = "";

            input.forEach((element) => {
                element.value = "";
            });

            updateInputConfig(inputField.firstElementChild, false);
        };

        window.onload = startInput();
    </script>
@endpush
