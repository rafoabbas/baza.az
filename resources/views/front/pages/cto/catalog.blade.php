@extends('front.layouts.app')

@section('content')
    <section class="catalog-sec-page service-station-search">
        <div class="general-conteiner">
            <h2 class="general-title">Поиск СТО</h2>
            <div class="catalog_bread-crumbs">
                <a href="">Главная</a>
                <p>/ Поиск СТО</p>
            </div>
            <div class="catalog__header-val">
                <div class="catalog__filtr-select">
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
                <div class="catalog__del-filtr-visyal">
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
            </div>
            <div class="catalog__conteiner-ads">
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
                        <p>Фильтр</p>
                    </div>
                    <div class="sorting-conteiner__element sorting-conteiner__date">
                        <select name="" id="">
                            <option value="">По дате</option>
                            <option value="">По цене</option>
                        </select>
                    </div>
                </div>
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
                                    <option value="">Mercedes benz2</option>
                                    <option value="">Mercedes benz3</option>
                                    <option value="">Mercedes benz4</option>
                                </select>
                            </div>
                        </div>
                        <div class="catalog__filtr__filtr-element">
                            <h5>Категория СТО:</h5>
                            <div class="filtr-element__select">
                                <select name="" id="" class="full-select">
                                    <option value="">Двигатель</option>
                                    <option value="">Vito2</option>
                                    <option value="">Vito3</option>
                                    <option value="">Vito4</option>
                                </select>
                            </div>
                        </div>
                        <div class="catalog__filtr__filtr-element">
                            <h5>Услуга:</h5>
                            <div class="filtr-element__select">
                                <select name="" id="" class="full-select">
                                    <option value="">Диагностика двигателя</option>
                                    <option value="">Vito2</option>
                                    <option value="">Vito3</option>
                                    <option value="">Vito4</option>
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
                                <p>Найти СТО</p>
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
                <div class="catalog__ads-body conteiner-old">
                    <div class="ads-body__header">
                        <div class="banerV2">
                            <img src="{{ asset('assets/front/img/_src/baner3.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="ads-body__conteiner ads-services-conteiner">
                        @foreach([0,1,2,3,4,5,6,7] as $item)
                        <div class="ads-services-conteiner__box">
                            <a href="{{ route('cto.show') }}" class="overlay"></a>
                            <div class="ads-services-conteiner__image-claster">
                                <div class="ads-services-conteiner__image-box">
                                    <img src="{{ asset('assets/front/img/_src/sto1.jpg') }}" alt="">
                                </div>
                                <ul class="cart-main-info__location-conteiner">
                                    <li>г. Баку, Хатаинский р., пр. Бабека, (Автомобильный рынок)</li>
                                </ul>
                                <div class="ads-services-conteiner__services-list ads-services-conteiner__services-list-mobile">
                                    <div class="ads-services-conteiner__services-box">
                                        <div class="ads-services-conteiner__services-icon">
                                            <img src="{{ asset('assets/front/img/_src/s1.svg') }}" alt="">
                                        </div>
                                        <p class="ads-services-conteiner__services-title">Двигатель</p>
                                    </div>
                                    <div class="ads-services-conteiner__services-box">
                                        <div class="ads-services-conteiner__services-icon">
                                            <img src="{{ asset('assets/front/img/_src/s2.svg') }}" alt="">
                                        </div>
                                        <p class="ads-services-conteiner__services-title">Автомойки</p>
                                    </div>
                                    <div class="ads-services-conteiner__services-box">
                                        <div class="ads-services-conteiner__services-icon">
                                            <img src="{{ asset('assets/front/img/_src/s3.svg') }}" alt="">
                                        </div>
                                        <p class="ads-services-conteiner__services-title">Ходовая система</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ads-services-conteiner__info-claster">
                                <h3 class="ads-services-conteiner__ads-title">
                                    <div class="showroom-box__verified">
                                        <div class="showroom-box__verified__anons">
                                            <p>Verified Salon</p>
                                        </div>
                                        <svg height="2500" width="2500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><g fill="none" fill-rule="evenodd"><path d="M256 472.153L176.892 512l-41.725-81.129-86.275-16.654 11.596-91.422L0 256l60.488-66.795-11.596-91.422 86.275-16.654L176.892 0 256 39.847 335.108 0l41.725 81.129 86.275 16.654-11.596 91.422L512 256l-60.488 66.795 11.596 91.422-86.275 16.654L335.108 512z" fill="#4285f4"/><path d="M211.824 284.5L171 243.678l-36 36 40.824 40.824-.063.062 36 36 .063-.062.062.062 36-36-.062-.062L376.324 192l-36-36z" fill="#fff"/></g></svg>
                                    </div>
                                    AUDI VIPos
                                </h3>
                                <div class="ads-services-conteiner__ads-contact">
                                    <ul class="cart-main-info__phone-conteiner">
                                        <li><a href="tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                                        <li><a href="tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                                        <li><a href="tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                                    </ul>
                                    <ul class="cart-main-info__time-work">
                                        <li>Пн-Пт: 08:00-20:00</li>
                                        <li>Сб-Вс: 12:00-17:00</li>
                                    </ul>
                                    <ul class="cart-main-info__location-conteiner mobile-location-sto">
                                        <li>г. Баку, Хатаинский р., пр. Бабека, (Автомобильный рынок)</li>
                                    </ul>
                                </div>
                                <div class="ads-services-conteiner__services-list">
                                    <div class="ads-services-conteiner__services-box">
                                        <div class="ads-services-conteiner__services-icon">
                                            <img src="{{ asset('assets/front/img/_src/s1.svg') }}" alt="">
                                        </div>
                                        <p class="ads-services-conteiner__services-title">Двигатель</p>
                                    </div>
                                    <div class="ads-services-conteiner__services-box">
                                        <div class="ads-services-conteiner__services-icon">
                                            <img src="{{ asset('assets/front/img/_src/s2.svg') }}" alt="">
                                        </div>
                                        <p class="ads-services-conteiner__services-title">Автомойки</p>
                                    </div>
                                    <div class="ads-services-conteiner__services-box">
                                        <div class="ads-services-conteiner__services-icon">
                                            <img src="{{ asset('assets/front/img/_src/s3.svg') }}" alt="">
                                        </div>
                                        <p class="ads-services-conteiner__services-title">Ходовая система</p>
                                    </div>
                                    <div class="ads-services-conteiner__services-box">
                                        <div class="btn-more-photo">
                                            Еще 4...
                                        </div>
                                    </div>
                                </div>
                                <div class="ads-services-conteiner__marks-conteiner">
                                    <h4 class="ads-services-conteiner__mark-title">Марки автомобилей:</h4>
                                    <div class="ads-services-conteiner__mark-line">
                                        <div class="ads-services-conteiner__mark-box">
                                            <div class="ads-services-conteiner__mark-icon">
                                                <img src="{{ asset('assets/front/img/_src/mark1.svg') }}" alt="">
                                            </div>
                                            <p class="ads-services-conteiner__mark-element-title">Audi</p>
                                        </div>
                                        <div class="ads-services-conteiner__mark-box">
                                            <div class="ads-services-conteiner__mark-icon">
                                                <img src="{{ asset('assets/front/img/_src/mark2.svg') }}" alt="">
                                            </div>
                                            <p class="ads-services-conteiner__mark-element-title">Infiniti</p>
                                        </div>
                                        <div class="ads-services-conteiner__mark-box">
                                            <div class="ads-services-conteiner__mark-icon">
                                                <img src="{{ asset('assets/front/img/_src/mark3.svg') }}" alt="">
                                            </div>
                                            <p class="ads-services-conteiner__mark-element-title">Acura</p>
                                        </div>
                                        <div class="ads-services-conteiner__mark-box">
                                            <div class="ads-services-conteiner__mark-icon">
                                                <img src="{{ asset('assets/front/img/_src/mark4.svg') }}" alt="">
                                            </div>
                                            <p class="ads-services-conteiner__mark-element-title">Lexus</p>
                                        </div>
                                        <div class="ads-services-conteiner__mark-box">
                                            <div class="ads-services-conteiner__mark-icon">
                                                <img src="{{ asset('assets/front/img/_src/mark5.svg') }}" alt="">
                                            </div>
                                            <p class="ads-services-conteiner__mark-element-title">Mercedes</p>
                                        </div>
                                    </div>
                                    <div class="btn-more-photo">
                                        Еще 12 марок
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
