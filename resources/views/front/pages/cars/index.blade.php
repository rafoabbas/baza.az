@extends('front.layouts.app')

@section('content')
    <section class="catalog-sec-page">
        <div class="general-conteiner">
            <div class="catalog__conteiner-ads">
                <aside class="catalog__filtr ">
                    <div class="catalog__filtr-wrapper aside-search">
                        <form>
                            <div class="aside-search__col">
                                <div class="main-search__select-element">
                                    <div class="main-search__list-car-search list-car-search">
                                        <div class="list-car-search__search-line">
                                            <input type="text" placeholder="Марка авто">
                                            <span class="list-car-search__icon">
                                            </span>
                                        </div>
                                        <div class="list-car-search__decision">
                                            <ul class="list-car-search__decision-list">
                                                <li>Audi</li>
                                                <li>Acura</li>
                                                <li>Alpha Romeo</li>
                                                <li>BMW</li>
                                                <li>Testa</li>
                                                <li>Lada</li>
                                                <li>Opel</li>
                                                <li>Nisan</li>
                                                <li>Ford</li>
                                                <li>Doge</li>
                                                <li>Renaup</li>
                                                <li>Pegayt</li>
                                                <li>Kamaz</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-search__select-element">
                                    <select name="" id="" class="select-type1">
                                        <option value="">Модель</option>
                                        <option value="">A6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="aside-search__col">
                                <div class="main-search__select-element select-main">
                                    <select name="" id="" class="select-type2">
                                        <option value="">Год от</option>
                                        <option value="">2019</option>
                                    </select>
                                    <select name="" id="" class="select-type2">
                                        <option value="">Год до</option>
                                        <option value="">2021</option>
                                    </select>
                                </div>
                                <div class="main-search__select-element input-main">
                                    <div class="input-main__prise-inp">
                                        <input type="text" placeholder="Цена, $ от">
                                    </div>
                                    <div class="input-main__prise-inp">
                                        <input type="text" placeholder="Цена, $ до">
                                    </div>
                                </div>
                            </div>
                            <div class="aside-search__col">
                                <div class="main-search__select-element">
                                    <select name="" id="" class="select-type1">
                                        <option value="">Город</option>
                                        <option value="">Город: Баку</option>
                                        <option value="">Город: Киев</option>
                                    </select>
                                </div>
                                <div class="main-search__checkbox-wrapper">
                                    <div class="checkbox">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" name="carbody" value="Универсал">
                                            <span>В кредите</span>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" name="carbody" value="Универсал">
                                            <span>Бартер</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="aside-search__col">
                                <div class="btn2">
                                    <div class="icon-btn2">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.8067 12.86L11.54 10.6C12.2713 9.66831 12.6681 8.51777 12.6667 7.33334C12.6667 6.2785 12.3539 5.24736 11.7678 4.37029C11.1818 3.49323 10.3489 2.80965 9.37431 2.40598C8.39977 2.00231 7.32742 1.89669 6.29285 2.10248C5.25829 2.30827 4.30798 2.81622 3.5621 3.5621C2.81622 4.30798 2.30827 5.25829 2.10248 6.29285C1.89669 7.32742 2.00231 8.39977 2.40598 9.37431C2.80965 10.3489 3.49323 11.1818 4.37029 11.7678C5.24736 12.3539 6.2785 12.6667 7.33334 12.6667C8.51777 12.6681 9.66831 12.2713 10.6 11.54L12.86 13.8067C12.922 13.8692 12.9957 13.9188 13.077 13.9526C13.1582 13.9864 13.2453 14.0039 13.3333 14.0039C13.4213 14.0039 13.5085 13.9864 13.5897 13.9526C13.671 13.9188 13.7447 13.8692 13.8067 13.8067C13.8692 13.7447 13.9188 13.671 13.9526 13.5897C13.9864 13.5085 14.0039 13.4213 14.0039 13.3333C14.0039 13.2453 13.9864 13.1582 13.9526 13.077C13.9188 12.9957 13.8692 12.922 13.8067 12.86V12.86ZM3.33334 7.33334C3.33334 6.54221 3.56793 5.76885 4.00746 5.11106C4.44698 4.45326 5.0717 3.94057 5.8026 3.63782C6.53351 3.33507 7.33777 3.25585 8.1137 3.41019C8.88962 3.56454 9.60235 3.9455 10.1618 4.50491C10.7212 5.06432 11.1021 5.77705 11.2565 6.55297C11.4108 7.3289 11.3316 8.13317 11.0289 8.86407C10.7261 9.59497 10.2134 10.2197 9.55562 10.6592C8.89782 11.0987 8.12446 11.3333 7.33334 11.3333C6.27247 11.3333 5.25505 10.9119 4.50491 10.1618C3.75476 9.41162 3.33334 8.3942 3.33334 7.33334Z" fill="#768A9E"/>
                                        </svg>
                                    </div>
                                    <p>Найти</p>
                                </div>
                                <a href="{{ route('advanced-search') }}" class="btn2">
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
                                    <p>Расширенный поиск</p>
                                </a>
                            </div>
                        </form>
                    </div>
                </aside>
                <div class="catalog__ads-body">
                    <div class="ads-body__header">
                        <h2 class="general-title">Легковые автомобили</h2>
                        <div class="ads-body__sorting-conteiner">
                            <div class="sorting-conteiner__element sorting-conteiner_nam-ads">
                                <select name="" id="">
                                    <option value="">36 авто на странице</option>
                                    <option value="">26 авто на странице</option>
                                </select>
                            </div>
                            <div class="sorting-conteiner__element sorting-conteiner__date">
                                <select name="" id="">
                                    <option value="">дате добавления</option>
                                    <option value="">дате изменения</option>
                                </select>
                            </div>
                            <div class="catalog__visyal-controller">
                                <div class="visyal_btn list-ads" style="display: flex!important;">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M4.58333 0H0.916667C0.410667 0 0 0.410667 0 0.916667V4.58333C0 5.08933 0.410667 5.5 0.916667 5.5H4.58333C5.08933 5.5 5.5 5.08933 5.5 4.58333V0.916667C5.5 0.410667 5.08933 0 4.58333 0Z" fill="#8395A7"></path>
                                            <path d="M21.082 0H8.2487C7.7427 0 7.33203 0.410667 7.33203 0.916667V4.58333C7.33203 5.08933 7.7427 5.5 8.2487 5.5H21.082C21.588 5.5 21.9987 5.08933 21.9987 4.58333V0.916667C21.9987 0.410667 21.588 0 21.082 0Z" fill="#8395A7"></path>
                                            <path d="M4.58333 8.25H0.916667C0.410667 8.25 0 8.66067 0 9.16667V12.8333C0 13.3393 0.410667 13.75 0.916667 13.75H4.58333C5.08933 13.75 5.5 13.3393 5.5 12.8333V9.16667C5.5 8.66067 5.08933 8.25 4.58333 8.25Z" fill="#8395A7"></path>
                                            <path d="M21.082 8.25H8.2487C7.7427 8.25 7.33203 8.66067 7.33203 9.16667V12.8333C7.33203 13.3393 7.7427 13.75 8.2487 13.75H21.082C21.588 13.75 21.9987 13.3393 21.9987 12.8333V9.16667C21.9987 8.66067 21.588 8.25 21.082 8.25Z" fill="#8395A7"></path>
                                            <path d="M4.58333 16.5H0.916667C0.410667 16.5 0 16.9107 0 17.4167V21.0833C0 21.5893 0.410667 22 0.916667 22H4.58333C5.08933 22 5.5 21.5893 5.5 21.0833V17.4167C5.5 16.9107 5.08933 16.5 4.58333 16.5Z" fill="#8395A7"></path>
                                            <path d="M21.082 16.5H8.2487C7.7427 16.5 7.33203 16.9107 7.33203 17.4167V21.0833C7.33203 21.5893 7.7427 22 8.2487 22H21.082C21.588 22 21.9987 21.5893 21.9987 21.0833V17.4167C21.9987 16.9107 21.588 16.5 21.082 16.5Z" fill="#8395A7"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="22" height="22" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="visyal_btn grid-ads activ-visyal-controller">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M4.58333 0H0.916667C0.410667 0 0 0.410667 0 0.916667V4.58333C0 5.08933 0.410667 5.5 0.916667 5.5H4.58333C5.08933 5.5 5.5 5.08933 5.5 4.58333V0.916667C5.5 0.410667 5.08933 0 4.58333 0Z" fill="#8395A7"></path>
                                            <path d="M4.58333 8.25H0.916667C0.410667 8.25 0 8.66067 0 9.16667V12.8333C0 13.3393 0.410667 13.75 0.916667 13.75H4.58333C5.08933 13.75 5.5 13.3393 5.5 12.8333V9.16667C5.5 8.66067 5.08933 8.25 4.58333 8.25Z" fill="#8395A7"></path>
                                            <path d="M4.58333 16.5H0.916667C0.410667 16.5 0 16.9107 0 17.4167V21.0833C0 21.5893 0.410667 22 0.916667 22H4.58333C5.08933 22 5.5 21.5893 5.5 21.0833V17.4167C5.5 16.9107 5.08933 16.5 4.58333 16.5Z" fill="#8395A7"></path>
                                            <path d="M12.8333 0H9.16667C8.66067 0 8.25 0.410667 8.25 0.916667V4.58333C8.25 5.08933 8.66067 5.5 9.16667 5.5H12.8333C13.3393 5.5 13.75 5.08933 13.75 4.58333V0.916667C13.75 0.410667 13.3393 0 12.8333 0Z" fill="#8395A7"></path>
                                            <path d="M12.8333 8.25H9.16667C8.66067 8.25 8.25 8.66067 8.25 9.16667V12.8333C8.25 13.3393 8.66067 13.75 9.16667 13.75H12.8333C13.3393 13.75 13.75 13.3393 13.75 12.8333V9.16667C13.75 8.66067 13.3393 8.25 12.8333 8.25Z" fill="#8395A7"></path>
                                            <path d="M12.8333 16.5H9.16667C8.66067 16.5 8.25 16.9107 8.25 17.4167V21.0833C8.25 21.5893 8.66067 22 9.16667 22H12.8333C13.3393 22 13.75 21.5893 13.75 21.0833V17.4167C13.75 16.9107 13.3393 16.5 12.8333 16.5Z" fill="#8395A7"></path>
                                            <path d="M21.0833 0H17.4167C16.9107 0 16.5 0.410667 16.5 0.916667V4.58333C16.5 5.08933 16.9107 5.5 17.4167 5.5H21.0833C21.5893 5.5 22 5.08933 22 4.58333V0.916667C22 0.410667 21.5893 0 21.0833 0Z" fill="#8395A7"></path>
                                            <path d="M21.0833 8.25H17.4167C16.9107 8.25 16.5 8.66067 16.5 9.16667V12.8333C16.5 13.3393 16.9107 13.75 17.4167 13.75H21.0833C21.5893 13.75 22 13.3393 22 12.8333V9.16667C22 8.66067 21.5893 8.25 21.0833 8.25Z" fill="#8395A7"></path>
                                            <path d="M21.0833 16.5H17.4167C16.9107 16.5 16.5 16.9107 16.5 17.4167V21.0833C16.5 21.5893 16.9107 22 17.4167 22H21.0833C21.5893 22 22 21.5893 22 21.0833V17.4167C22 16.9107 21.5893 16.5 21.0833 16.5Z" fill="#8395A7"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="22" height="22" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ads-body__wraper-ads">
                        <div class="ads-body__conteiner">
                            @foreach([0,1,2,3,4,5,6,7,8,9] as $item)
                                @include('front.pages.partials.cars.list-item', [
                                    'item' => $item,
                                ])
                            @endforeach
                        </div>
                        <div class="ads-body__baner-col">
                            <div class="baner-box">
                                <img src="{{ asset('assets/front/img/_src/baner1.jpg') }}" alt="">
                            </div>
                            <div class="baner-box">
                                <img src="{{ asset('assets/front/img/_src/baner2.jpg') }}" alt="">
                            </div>
                            <div class="baner-box">
                                <img src="{{ asset('assets/front/img/_src/baner3.jpg') }}" alt="">
                            </div>
                        </div>
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
