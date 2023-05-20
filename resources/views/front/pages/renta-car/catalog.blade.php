@extends('front.layouts.app')

@section('content')
    <section class="catalog-sec-page  catalog-rent-cars">
        <div class="general-conteiner">
            <h2 class="general-title">Авто в аренду</h2>
            <div class="catalog_bread-crumbs">
                <a href="">Главная</a>
                <p>/ Авто в аренду</p>
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
                    <div class="sorting-conteiner__element sorting-conteiner_nam-ads">
                        <p>Показать по:</p>
                        <select name="" id="">
                            <option value="">36 авто на странице</option>
                            <option value="">26 авто на странице</option>
                        </select>
                    </div>
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
                        <p>Подобрать авто</p>
                    </div>
                </div>
                <aside class="catalog__filtr catalog-page__aside aside-old">
                    <div class="catalog__filtr-wrapper">
                        <div class="catalog__filtr__filtr-element">
                            <h5>Цена, $:</h5>
                            <div class="filtr-element__select">
                                <div class="input-main__prise-inp">
                                    <input type="text" placeholder="Цена, $ от">
                                </div>
                                <div class="input-main__prise-inp">
                                    <input type="text" placeholder="Цена, $ до">
                                </div>
                            </div>
                        </div>
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
                            <h5>Класс автомобиля:</h5>
                            <div class="filtr-element__select">
                                <select name="" id="" class="full-select">
                                    <option value="">Эконом</option>
                                    <option value="">Mercedes benz2</option>
                                    <option value="">Mercedes benz3</option>
                                    <option value="">Mercedes benz4</option>
                                </select>
                            </div>
                        </div>
                        <div class="catalog__filtr__filtr-element">
                            <h5>Коробка передач:</h5>
                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="transmision" value="Механика">
                                    <span>Механика</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="transmision" value="Автомат">
                                    <span>Автомат</span>
                                </label>
                            </div>
                        </div>
                        <div class="catalog__filtr__filtr-element">
                            <h5>Тип топлива:</h5>
                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="fuel" value="Бензин">
                                    <span>Бензин</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="fuel" value="Дизель">
                                    <span>Дизель</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="fuel" value="Газ">
                                    <span>Газ</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="fuel" value="Гибрид">
                                    <span>Гибрид</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="fuel" value="Газ/бензин">
                                    <span>Газ/бензин</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="fuel" value="Электро">
                                    <span>Электро</span>
                                </label>
                            </div>
                        </div>
                        <div class="catalog__filtr__filtr-element">
                            <h5>Привод:</h5>
                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="drive" value="Полный">
                                    <span>Полный</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="drive" value="Передний">
                                    <span>Передний</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="drive" value="Задний">
                                    <span>Задний</span>
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
                                <p>Подобрать авто</p>
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
                    <div class="ads-body__conteiner ads-rent-car-conteiner">
                        @foreach([0,1,2,3,4,5,6,7,8,9] as $item)
                            @include('front.pages.partials.renta-cars.list-item', [
                                'item' => $item
                            ])
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
