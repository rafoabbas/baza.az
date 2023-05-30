@extends('front.layouts.app')

@section('content')
    <section class="main-search">
        <div class="general-conteiner">
            <div class="main-search__search-conteiner">
                <form>
                    <div class="main-search__select-conteiner">
                        <div class="main-search__radio-element">
                            <input type="radio" name="type" id="car_type1" checked>
                            <label for="car_type1">@lang('Hamısı')</label>
                            <input type="radio" name="type" id="car_type2" >
                            <label for="car_type2">@lang('Yeni')</label>
                            <input type="radio" name="type" id="car_type3" >
                            <label for="car_type3">@lang('Sürülmüş')</label>
                        </div>
                        <div class="main-search__select-element">
                            <select name="" id="" class="select-type1">
                                <option value="">Город</option>
                                <option value="">Город: Баку</option>
                                <option value="">Город: Киев</option>
                            </select>
                        </div>
                        <div class="main-search__select-element">
                            <select name="" id="" class="select-type1">
                                <option value="">Тип кузова</option>
                                <option value="">Автобус</option>
                            </select>
                        </div>
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
                        <div class="main-search__select-element">
                            <select name="" id="" class="select-type1">
                                <option value="">Все марки </option>
                                <option value="">Audi</option>
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
                        <div class="main-search__select-element">
                            <select name="" id="" class="select-type1">
                                <option value="">Все модели </option>
                                <option value="">A6</option>
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
                    <div class="main-search__button-line">
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
            <a href="#" target="_blank" class="main-search__image" style="background-image:url({{asset('assets/front/img/_src/banner1.jpeg')}}); background-repeat: no-repeat; background-size:cover; background-position:center;">
            </a>
            <div class="main-search__baner">
                <img src="{{ asset('assets/front/img/_src/middle-banner.jpeg') }}" alt="">
            </div>
        </div>
    </section>
    @php($items = collect([0,1,2,3,4,5,6,7]))
    @includeWhen($items->count(), 'front.pages.partials.cars.section', [
        'title' => trans('front.Vip avtomobillər'),
        'subtitle' => '',
        'items' => $items
    ])
    <section class="what-nead-car">
        <div class="general-conteiner">
            <h2 class="general-title">Какой автомобиль нужен?</h2>
            <p class="general-subtitle">Подборки автомобилей в зависимости от назначения</p>
            <div class="what-nead-car__conteiner">
                <a href="" class="what-nead-car__element">
                    <h5>Экономный</h5>
                    <p>Расход до 8л топлива</p>
                </a>
                <a href="" class="what-nead-car__element">
                    <h5>Проходимый</h5>
                    <p>Полный привод, клиренс от 21 см.</p>
                </a>
                <a href="" class="what-nead-car__element">
                    <h5>Семейный</h5>
                    <p>5-7 мест, большой багажник</p>
                </a>
                <a href="" class="what-nead-car__element">
                    <h5>Дерзкий</h5>
                    <p>Разгон 0 - 100 меньше 6,5 секунд</p>
                </a>
                <a href="" class="what-nead-car__element">
                    <h5>Недорогой</h5>
                    <p>Цена до 10 000 $</p>
                </a>
                <a href="" class="what-nead-car__element">
                    <h5>Электромобиль</h5>
                    <p>Электромобиль</p>
                </a>
            </div>
        </div>
    </section>
    @includeWhen($items->count(), 'front.pages.partials.cars.section', [
        'title' => 'Продажа авто',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
        'items' => $items
    ])
    @php($services = collect([
        'Двигатель',
        'Ходовая система',
        'Электрика',
        'Коробка передач',
        'Система выхлопа',
        'Кондиционирование и печка',
        'Тормозная система',
        'Топливная система',
        'Кузовные работы',
        'Автомойки',
        'Другие услуги',
    ]))
    @includeWhen($services->count(), 'front.pages.partials.services.section', [
        'items' => $services
    ])
    @php($rentaCars = collect([0,1,2,3,4,5]))
    @includeWhen($rentaCars->count(), 'front.pages.partials.renta-cars.section', [
        'items' => $rentaCars
    ])
    @php($numbers = collect([0,1,2,3,4,5,6,7]))
    @includeWhen($numbers->count(), 'front.pages.partials.numbers.section', [
        'items' => $numbers
    ])
    @php($dealerships = collect([0,1,2,3,4,5]))
    @includeWhen($dealerships->count(), 'front.pages.partials.dealerships.section', [
        'items' => $dealerships
    ])
    <section class="partners">
        <div class="general-conteiner">
            <h2 class="general-title">Партнерство</h2>
            <div class="partners__conteiner">
                <div class="partners__claster">
                    <h3 class="partners__title">Частным лицам</h3>
                    <a href="" class="partners__box">
                        <span class="partners__icon">
                            <img src="{{ asset('assets/front/img/_src/p1.svg') }}" alt="">
                        </span>
                        <h5>Продать авто</h5>
                    </a>

                    <a href="" class="partners__box">
                        <span class="partners__icon">
                            <img src="{{ asset('assets/front/img/_src/p2.svg') }}" alt="">
                        </span>
                        <h5>Продать номера</h5>
                    </a>

                    <a href="" class="partners__box">
                        <span class="partners__icon">
                            <img src="{{ asset('assets/front/img/_src/p3.svg') }}" alt="">
                        </span>
                        <h5>Работа у нас</h5>
                    </a>
                </div>

                <div class="partners__claster">
                    <h3 class="partners__title">Бизнесу</h3>
                    <a href="" class="partners__box">
                        <span class="partners__icon">
                            <img src="{{ asset('assets/front/img/_src/p4.svg') }}" alt="">
                        </span>
                        <h5>Автосалонам</h5>
                    </a>

                    <a href="" class="partners__box">
                        <span class="partners__icon">
                            <img src="{{ asset('assets/front/img/_src/p5.svg') }}" alt="">
                        </span>
                        <h5>Для СТО</h5>
                    </a>

                    <a href="" class="partners__box">
                        <span class="partners__icon">
                            <img src="{{ asset('assets/front/img/_src/p6.svg') }}" alt="">
                        </span>
                        <h5>Сдать авто в аренду</h5>
                    </a>

                    <a href="" class="partners__box">
                        <span class="partners__icon">
                            <img src="{{ asset('assets/front/img/_src/p7.svg') }}" alt="">
                        </span>
                        <h5>Автомагазинам</h5>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="what-car-nead-v2">
        <div class="general-conteiner">
            <h2 class="general-title">Какой автомобиль нужен?</h2>
            <div class="what-car-nead-v2__conteiner">
                <ul class="what-car-nead-v2__nav">
                    <li class="activ-tab-nead-car">По типу кузова</li>
                    <li>По бренду</li>
                    <li>По региону</li>
                    <li>По году</li>
                    <li>По типу топлива</li>
                </ul>
                <div class="what-car-nead-v2__tab-conteiner">
                    <div class="what-car-nead-v2__tab-element activ-tab-element">
                        <ul>
                            <li><a href="">Универсал1 <span>(1983)</span></a></li>
                            <li><a href="">Кроссовер <span>(1983)</span></a></li>
                            <li><a href="">Седан <span>(1983)</span></a></li>
                            <li><a href="">Фургон <span>(1983)</span></a></li>
                            <li><a href="">Минивен <span>(1983)</span></a></li>
                            <li><a href="">Купе <span>(1983)</span></a></li>
                            <li><a href="">Хэтчбек <span>(1983)</span></a></li>
                            <li><a href="">Лимузин <span>(1983)</span></a></li>
                            <li><a href="">Пикап <span>(1983)</span></a></li>
                            <li><a href="">Кабриолет <span>(1983)</span></a></li>
                            <li><a href="">Тарга <span>(1983)</span></a></li>
                            <li><a href="">Другое <span>(1983)</span></a></li>
                        </ul>
                    </div>

                    <div class="what-car-nead-v2__tab-element">
                        <ul>
                            <li><a href="">Универсал2 <span>(1983)</span></a></li>
                            <li><a href="">Кроссовер <span>(1983)</span></a></li>
                            <li><a href="">Седан <span>(1983)</span></a></li>
                            <li><a href="">Фургон <span>(1983)</span></a></li>
                            <li><a href="">Минивен <span>(1983)</span></a></li>
                            <li><a href="">Купе <span>(1983)</span></a></li>
                            <li><a href="">Хэтчбек <span>(1983)</span></a></li>
                            <li><a href="">Лимузин <span>(1983)</span></a></li>
                            <li><a href="">Пикап <span>(1983)</span></a></li>
                            <li><a href="">Кабриолет <span>(1983)</span></a></li>
                            <li><a href="">Тарга <span>(1983)</span></a></li>
                            <li><a href="">Другое <span>(1983)</span></a></li>
                        </ul>
                    </div>

                    <div class="what-car-nead-v2__tab-element">
                        <ul>
                            <li><a href="">Универсал3 <span>(1983)</span></a></li>
                            <li><a href="">Кроссовер <span>(1983)</span></a></li>
                            <li><a href="">Седан <span>(1983)</span></a></li>
                            <li><a href="">Фургон <span>(1983)</span></a></li>
                            <li><a href="">Минивен <span>(1983)</span></a></li>
                            <li><a href="">Купе <span>(1983)</span></a></li>
                            <li><a href="">Хэтчбек <span>(1983)</span></a></li>
                            <li><a href="">Лимузин <span>(1983)</span></a></li>
                            <li><a href="">Пикап <span>(1983)</span></a></li>
                            <li><a href="">Кабриолет <span>(1983)</span></a></li>
                            <li><a href="">Тарга <span>(1983)</span></a></li>
                            <li><a href="">Другое <span>(1983)</span></a></li>
                        </ul>
                    </div>

                    <div class="what-car-nead-v2__tab-element">
                        <ul>
                            <li><a href="">Универсал4 <span>(1983)</span></a></li>
                            <li><a href="">Кроссовер <span>(1983)</span></a></li>
                            <li><a href="">Седан <span>(1983)</span></a></li>
                            <li><a href="">Фургон <span>(1983)</span></a></li>
                            <li><a href="">Минивен <span>(1983)</span></a></li>
                            <li><a href="">Купе <span>(1983)</span></a></li>
                            <li><a href="">Хэтчбек <span>(1983)</span></a></li>
                            <li><a href="">Лимузин <span>(1983)</span></a></li>
                            <li><a href="">Пикап <span>(1983)</span></a></li>
                            <li><a href="">Кабриолет <span>(1983)</span></a></li>
                            <li><a href="">Тарга <span>(1983)</span></a></li>
                            <li><a href="">Другое <span>(1983)</span></a></li>
                        </ul>
                    </div>

                    <div class="what-car-nead-v2__tab-element">
                        <ul>
                            <li><a href="">Универсал5 <span>(1983)</span></a></li>
                            <li><a href="">Кроссовер <span>(1983)</span></a></li>
                            <li><a href="">Седан <span>(1983)</span></a></li>
                            <li><a href="">Фургон <span>(1983)</span></a></li>
                            <li><a href="">Минивен <span>(1983)</span></a></li>
                            <li><a href="">Купе <span>(1983)</span></a></li>
                            <li><a href="">Хэтчбек <span>(1983)</span></a></li>
                            <li><a href="">Лимузин <span>(1983)</span></a></li>
                            <li><a href="">Пикап <span>(1983)</span></a></li>
                            <li><a href="">Кабриолет <span>(1983)</span></a></li>
                            <li><a href="">Тарга <span>(1983)</span></a></li>
                            <li><a href="">Другое <span>(1983)</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="what-car-nead-v2__conteiner-mobile">
                <div class="what-car-nead-v2__tab-element-acordeon">
                    <div class="tab-element-acordeon__header">
                        <h5>По типу кузова</h5>
                        <div class="tab-element-acordeon__open-icon">
                            <svg width="15" height="8" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.9993 1.17032C14.9998 1.31972 14.9668 1.46733 14.9028 1.60231C14.8388 1.73729 14.7453 1.85621 14.6293 1.95032L8.6293 6.78032C8.45037 6.92741 8.22592 7.00781 7.9943 7.00781C7.76267 7.00781 7.53823 6.92741 7.3593 6.78032L1.3593 1.78032C1.15508 1.61059 1.02666 1.36667 1.00228 1.10225C0.977899 0.837822 1.05956 0.574541 1.2293 0.370325C1.39904 0.166108 1.64295 0.037684 1.90738 0.0133042C2.1718 -0.0110755 2.43508 0.0705857 2.6393 0.240325L7.9993 4.71032L13.3593 0.390325C13.5061 0.268042 13.6848 0.190365 13.8744 0.166485C14.0639 0.142606 14.2563 0.173523 14.4289 0.255579C14.6014 0.337635 14.7468 0.467395 14.8479 0.629505C14.949 0.791615 15.0015 0.979291 14.9993 1.17032Z" fill="#768A9E"/>
                            </svg>
                        </div>
                    </div>
                    <div class="tab-element-acordeon__body">
                        <ul>
                            <li><a href="">Универсал3 <span>(1983)</span></a></li>
                            <li><a href="">Кроссовер <span>(1983)</span></a></li>
                            <li><a href="">Седан <span>(1983)</span></a></li>
                            <li><a href="">Фургон <span>(1983)</span></a></li>
                            <li><a href="">Минивен <span>(1983)</span></a></li>
                            <li><a href="">Купе <span>(1983)</span></a></li>
                            <li><a href="">Хэтчбек <span>(1983)</span></a></li>
                            <li><a href="">Лимузин <span>(1983)</span></a></li>
                            <li><a href="">Пикап <span>(1983)</span></a></li>
                            <li><a href="">Кабриолет <span>(1983)</span></a></li>
                            <li><a href="">Тарга <span>(1983)</span></a></li>
                            <li><a href="">Другое <span>(1983)</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="what-car-nead-v2__tab-element-acordeon">
                    <div class="tab-element-acordeon__header">
                        <h5>По бренду</h5>
                        <div class="tab-element-acordeon__open-icon">
                            <svg width="15" height="8" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.9993 1.17032C14.9998 1.31972 14.9668 1.46733 14.9028 1.60231C14.8388 1.73729 14.7453 1.85621 14.6293 1.95032L8.6293 6.78032C8.45037 6.92741 8.22592 7.00781 7.9943 7.00781C7.76267 7.00781 7.53823 6.92741 7.3593 6.78032L1.3593 1.78032C1.15508 1.61059 1.02666 1.36667 1.00228 1.10225C0.977899 0.837822 1.05956 0.574541 1.2293 0.370325C1.39904 0.166108 1.64295 0.037684 1.90738 0.0133042C2.1718 -0.0110755 2.43508 0.0705857 2.6393 0.240325L7.9993 4.71032L13.3593 0.390325C13.5061 0.268042 13.6848 0.190365 13.8744 0.166485C14.0639 0.142606 14.2563 0.173523 14.4289 0.255579C14.6014 0.337635 14.7468 0.467395 14.8479 0.629505C14.949 0.791615 15.0015 0.979291 14.9993 1.17032Z" fill="#768A9E"/>
                            </svg>
                        </div>
                    </div>
                    <div class="tab-element-acordeon__body">
                        <ul>
                            <li><a href="">Универсал3 <span>(1983)</span></a></li>
                            <li><a href="">Кроссовер <span>(1983)</span></a></li>
                            <li><a href="">Седан <span>(1983)</span></a></li>
                            <li><a href="">Фургон <span>(1983)</span></a></li>
                            <li><a href="">Минивен <span>(1983)</span></a></li>
                            <li><a href="">Купе <span>(1983)</span></a></li>
                            <li><a href="">Хэтчбек <span>(1983)</span></a></li>
                            <li><a href="">Лимузин <span>(1983)</span></a></li>
                            <li><a href="">Пикап <span>(1983)</span></a></li>
                            <li><a href="">Кабриолет <span>(1983)</span></a></li>
                            <li><a href="">Тарга <span>(1983)</span></a></li>
                            <li><a href="">Другое <span>(1983)</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="what-car-nead-v2__tab-element-acordeon">
                    <div class="tab-element-acordeon__header">
                        <h5>По региону</h5>
                        <div class="tab-element-acordeon__open-icon">
                            <svg width="15" height="8" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.9993 1.17032C14.9998 1.31972 14.9668 1.46733 14.9028 1.60231C14.8388 1.73729 14.7453 1.85621 14.6293 1.95032L8.6293 6.78032C8.45037 6.92741 8.22592 7.00781 7.9943 7.00781C7.76267 7.00781 7.53823 6.92741 7.3593 6.78032L1.3593 1.78032C1.15508 1.61059 1.02666 1.36667 1.00228 1.10225C0.977899 0.837822 1.05956 0.574541 1.2293 0.370325C1.39904 0.166108 1.64295 0.037684 1.90738 0.0133042C2.1718 -0.0110755 2.43508 0.0705857 2.6393 0.240325L7.9993 4.71032L13.3593 0.390325C13.5061 0.268042 13.6848 0.190365 13.8744 0.166485C14.0639 0.142606 14.2563 0.173523 14.4289 0.255579C14.6014 0.337635 14.7468 0.467395 14.8479 0.629505C14.949 0.791615 15.0015 0.979291 14.9993 1.17032Z" fill="#768A9E"/>
                            </svg>
                        </div>
                    </div>
                    <div class="tab-element-acordeon__body">
                        <ul>
                            <li><a href="">Универсал3 <span>(1983)</span></a></li>
                            <li><a href="">Кроссовер <span>(1983)</span></a></li>
                            <li><a href="">Седан <span>(1983)</span></a></li>
                            <li><a href="">Фургон <span>(1983)</span></a></li>
                            <li><a href="">Минивен <span>(1983)</span></a></li>
                            <li><a href="">Купе <span>(1983)</span></a></li>
                            <li><a href="">Хэтчбек <span>(1983)</span></a></li>
                            <li><a href="">Лимузин <span>(1983)</span></a></li>
                            <li><a href="">Пикап <span>(1983)</span></a></li>
                            <li><a href="">Кабриолет <span>(1983)</span></a></li>
                            <li><a href="">Тарга <span>(1983)</span></a></li>
                            <li><a href="">Другое <span>(1983)</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="what-car-nead-v2__tab-element-acordeon">
                    <div class="tab-element-acordeon__header">
                        <h5>По году</h5>
                        <div class="tab-element-acordeon__open-icon">
                            <svg width="15" height="8" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.9993 1.17032C14.9998 1.31972 14.9668 1.46733 14.9028 1.60231C14.8388 1.73729 14.7453 1.85621 14.6293 1.95032L8.6293 6.78032C8.45037 6.92741 8.22592 7.00781 7.9943 7.00781C7.76267 7.00781 7.53823 6.92741 7.3593 6.78032L1.3593 1.78032C1.15508 1.61059 1.02666 1.36667 1.00228 1.10225C0.977899 0.837822 1.05956 0.574541 1.2293 0.370325C1.39904 0.166108 1.64295 0.037684 1.90738 0.0133042C2.1718 -0.0110755 2.43508 0.0705857 2.6393 0.240325L7.9993 4.71032L13.3593 0.390325C13.5061 0.268042 13.6848 0.190365 13.8744 0.166485C14.0639 0.142606 14.2563 0.173523 14.4289 0.255579C14.6014 0.337635 14.7468 0.467395 14.8479 0.629505C14.949 0.791615 15.0015 0.979291 14.9993 1.17032Z" fill="#768A9E"/>
                            </svg>
                        </div>
                    </div>
                    <div class="tab-element-acordeon__body">
                        <ul>
                            <li><a href="">Универсал3 <span>(1983)</span></a></li>
                            <li><a href="">Кроссовер <span>(1983)</span></a></li>
                            <li><a href="">Седан <span>(1983)</span></a></li>
                            <li><a href="">Фургон <span>(1983)</span></a></li>
                            <li><a href="">Минивен <span>(1983)</span></a></li>
                            <li><a href="">Купе <span>(1983)</span></a></li>
                            <li><a href="">Хэтчбек <span>(1983)</span></a></li>
                            <li><a href="">Лимузин <span>(1983)</span></a></li>
                            <li><a href="">Пикап <span>(1983)</span></a></li>
                            <li><a href="">Кабриолет <span>(1983)</span></a></li>
                            <li><a href="">Тарга <span>(1983)</span></a></li>
                            <li><a href="">Другое <span>(1983)</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="what-car-nead-v2__tab-element-acordeon">
                    <div class="tab-element-acordeon__header">
                        <h5>По типу топлива</h5>
                        <div class="tab-element-acordeon__open-icon">
                            <svg width="15" height="8" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.9993 1.17032C14.9998 1.31972 14.9668 1.46733 14.9028 1.60231C14.8388 1.73729 14.7453 1.85621 14.6293 1.95032L8.6293 6.78032C8.45037 6.92741 8.22592 7.00781 7.9943 7.00781C7.76267 7.00781 7.53823 6.92741 7.3593 6.78032L1.3593 1.78032C1.15508 1.61059 1.02666 1.36667 1.00228 1.10225C0.977899 0.837822 1.05956 0.574541 1.2293 0.370325C1.39904 0.166108 1.64295 0.037684 1.90738 0.0133042C2.1718 -0.0110755 2.43508 0.0705857 2.6393 0.240325L7.9993 4.71032L13.3593 0.390325C13.5061 0.268042 13.6848 0.190365 13.8744 0.166485C14.0639 0.142606 14.2563 0.173523 14.4289 0.255579C14.6014 0.337635 14.7468 0.467395 14.8479 0.629505C14.949 0.791615 15.0015 0.979291 14.9993 1.17032Z" fill="#768A9E"/>
                            </svg>
                        </div>
                    </div>
                    <div class="tab-element-acordeon__body">
                        <ul>
                            <li><a href="">Универсал3 <span>(1983)</span></a></li>
                            <li><a href="">Кроссовер <span>(1983)</span></a></li>
                            <li><a href="">Седан <span>(1983)</span></a></li>
                            <li><a href="">Фургон <span>(1983)</span></a></li>
                            <li><a href="">Минивен <span>(1983)</span></a></li>
                            <li><a href="">Купе <span>(1983)</span></a></li>
                            <li><a href="">Хэтчбек <span>(1983)</span></a></li>
                            <li><a href="">Лимузин <span>(1983)</span></a></li>
                            <li><a href="">Пикап <span>(1983)</span></a></li>
                            <li><a href="">Кабриолет <span>(1983)</span></a></li>
                            <li><a href="">Тарга <span>(1983)</span></a></li>
                            <li><a href="">Другое <span>(1983)</span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="seo">
        <div class="general-conteiner">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br><br>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
