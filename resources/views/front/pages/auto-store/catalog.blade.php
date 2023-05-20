@extends('front.layouts.app')

@section('content')
    <section class="catalog-sec-page  catalog-rent-cars catalog-auto-service-shop">
        <div class="general-conteiner">
            <h2 class="general-title">Поиск автомагазина</h2>
            <div class="catalog_bread-crumbs">
                <a href="">Главная</a>
                <p>/ Поиск автомагазина</p>
            </div>
            <div class="catalog__header-val">
                <div class="catalog__filtr-select catalog_filtr-select-auto-store">
                    <div class="filtr-select__element">
                        <p>Баку</p>
                        <div class="filtr-select__delete">
                            <img src="{{ asset('assets/front/img/_src/close.png') }}" alt="">
                        </div>
                    </div>
                    <div class="filtr-select__element">
                        <p>Audi</p>
                        <div class="filtr-select__delete">
                            <img src="{{ asset('assets/front/img/_src/close.png') }}" alt="">
                        </div>
                    </div>
                    <div class="filtr-select__element">
                        <p>Двигатель</p>
                        <div class="filtr-select__delete">
                            <img src="{{ asset('assets/front/img/_src/close.png') }}" alt="">
                        </div>
                    </div>
                    <div class="filtr-select__element">
                        <p>Диагностика двигателя</p>
                        <div class="filtr-select__delete">
                            <img src="{{ asset('assets/front/img/_src/close.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="catalog__del-filtr-visyal search-conteiner">
                    <div class="input-box">
                        <input type="text" placeholder="Что ищите?">
                    </div>
                    <div class="btn2">
                        <div class="icon-btn2">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.8067 12.86L11.54 10.6C12.2713 9.66831 12.6681 8.51777 12.6667 7.33334C12.6667 6.2785 12.3539 5.24736 11.7678 4.37029C11.1818 3.49323 10.3489 2.80965 9.37431 2.40598C8.39977 2.00231 7.32742 1.89669 6.29285 2.10248C5.25829 2.30827 4.30798 2.81622 3.5621 3.5621C2.81622 4.30798 2.30827 5.25829 2.10248 6.29285C1.89669 7.32742 2.00231 8.39977 2.40598 9.37431C2.80965 10.3489 3.49323 11.1818 4.37029 11.7678C5.24736 12.3539 6.2785 12.6667 7.33334 12.6667C8.51777 12.6681 9.66831 12.2713 10.6 11.54L12.86 13.8067C12.922 13.8692 12.9957 13.9188 13.077 13.9526C13.1582 13.9864 13.2453 14.0039 13.3333 14.0039C13.4213 14.0039 13.5085 13.9864 13.5897 13.9526C13.671 13.9188 13.7447 13.8692 13.8067 13.8067C13.8692 13.7447 13.9188 13.671 13.9526 13.5897C13.9864 13.5085 14.0039 13.4213 14.0039 13.3333C14.0039 13.2453 13.9864 13.1582 13.9526 13.077C13.9188 12.9957 13.8692 12.922 13.8067 12.86V12.86ZM3.33334 7.33334C3.33334 6.54221 3.56793 5.76885 4.00746 5.11106C4.44698 4.45326 5.0717 3.94057 5.8026 3.63782C6.53351 3.33507 7.33777 3.25585 8.1137 3.41019C8.88962 3.56454 9.60235 3.9455 10.1618 4.50491C10.7212 5.06432 11.1021 5.77705 11.2565 6.55297C11.4108 7.3289 11.3316 8.13317 11.0289 8.86407C10.7261 9.59497 10.2134 10.2197 9.55562 10.6592C8.89782 11.0987 8.12446 11.3333 7.33334 11.3333C6.27247 11.3333 5.25505 10.9119 4.50491 10.1618C3.75476 9.41162 3.33334 8.3942 3.33334 7.33334Z" fill="#768A9E"></path>
                            </svg>
                        </div>
                        <p>Найти</p>
                    </div>
                </div>
            </div>
            <div class="catalog__conteiner-ads">
                <aside class="catalog__filtr catalog-page__aside aside-old">
                    <div class="catalog__filtr-wrapper">
                        <div class="catalog__filtr__filtr-element">
                            <h5>Город:</h5>
                            <div class="filtr-element__select">
                                <select name="" id="" class="full-select">
                                    <option value="">Баку</option>
                                    <option value="">Mercedes benz2</option>
                                    <option value="">Mercedes benz3</option>
                                    <option value="">Mercedes benz4</option>
                                </select>
                            </div>
                        </div>
                        <div class="catalog__filtr__filtr-element">
                            <h5>Марка автомобиля:</h5>
                            <div class="filtr-element__select">
                                <select name="" id="" class="full-select">
                                    <option value="">Mercedes benz</option>
                                    <option value="">Mercedes benz3</option>
                                    <option value="">Mercedes benz4</option>
                                </select>
                            </div>
                        </div>
                        <div class="catalog__filtr__filtr-element">
                            <h5>Тип автомагазина:</h5>
                            <div class="filtr-element__select">
                                <select name="" id="" class="full-select">
                                    <option value="">Автозапчасти</option>
                                    <option value="">Шины</option>
                                    <option value="">Мультимедиа</option>
                                </select>
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
                                <p>Найти магазин</p>
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
                        <div class="baner-box">
                            <img src="{{ asset('assets/front/img/_src/baner1.jpg') }}" alt="">
                        </div>
                        <div class="baner-box">
                            <img src="{{ asset('assets/front/img/_src/baner2.jpg') }}" alt="">
                        </div>
                    </div>
                </aside>
                <div class="catalog__ads-body  conteiner-old">
                    <div class="ads-body__header">
                        <div class="banerV2">
                            <img src="{{ asset('assets/front/img/_src/baner3.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="ads-body__conteiner ads-rent-car-conteiner">
                        @foreach([0,1,2,3,4,5,6,7,8,9] as $item)
                        <div class="ads-box rent-car-box auto-store-box">
                            <a href="{{ route('auto-store.show') }}" class="overlay"></a>
                            <div class="ads_image">
                                <div class="ads_image_dop-info">
                                    <!-- <div class="dop-info__element dop_busines">бизнес</div> -->
                                </div>
                                <img src="{{ asset('assets/front/img/_src/store1.jpg') }}" alt="">
                            </div>
                            <div class="ads-box__info">
                                <div class="auto-store__title">
                                    <h3 class="ads-box__title">ТОП Запчасти Запчасти Запчасти 2</h3>
                                    <div class="ads-box__location">
                                        <span>
                                            <img src="{{ asset('assets/front/img/_src/location.svg') }}" alt="">
                                        </span>
                                        <p>г. Баку</p>
                                    </div>
                                </div>
                                <div class="ads-box__location">
                                    <span>
                                        <img src="{{ asset('assets/front/img/_src/date.png') }}" alt="">
                                    </span>
                                    <p>Пн-Пт: 08:00-20:00. Сб-Вс: 12:00-17:00</p>
                                </div>
                                <div class="auto-store__brend-line">
                                    <p>Audi, BMW, Ford, Mersedes</p>
                                    <a href="">еще 12 брендов</a>
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
@endpush
