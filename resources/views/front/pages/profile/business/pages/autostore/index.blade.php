@extends('front.layouts.app')

@section('content')
    <section class="cart-main-info">
        <div class="general-conteiner">
            <h2 class="cart-main-info__title">Мой автомагазин</h2>
            <div class="catalog_bread-crumbs">
                <a href="">Главная</a>
                <a href="">/ Личный кабинет</a>
                <p>Мой автомагазин</p>
            </div>
            <div class="cart-main-info__conteiner">
                @include('front.pages.profile.business.layout.partials.navbar')
                <div class="cart-main-info__body-info cart-main-info__body-info_account">
                    <div class="user-account-busines-claster">
                        <div class="user-account-busines-claster__rent-car-conteiner">
                            <div class="acordeon-conteiner__box  acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">Контактная информация CTO</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/01</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper information-about-company">
                                        <div class="information-about-company__info-claster">
                                            <div class="information-about-company__info-line information-about-company__info-line-V1">
                                                <div class="information-about-company__info-box">
                                                    <span>Название компании:</span>
                                                    <p>Автосалон Mercedes-Benz Baku</p>
                                                </div>
                                            </div>
                                            <div class="information-about-company__info-line information-about-company__info-line-V2">
                                                <div class="information-about-company__info-box">
                                                    <span>Город:</span>
                                                    <p>Бейлаган</p>
                                                </div>
                                                <div class="information-about-company__info-box">
                                                    <span>Номер салона:</span>
                                                    <p>25 55</p>
                                                </div>
                                            </div>
                                            <div class="information-about-company__info-line information-about-company__info-line-V1">
                                                <div class="information-about-company__info-box">
                                                    <span>Адрес салона:</span>
                                                    <p>Хатаинский р., пр. Бабека, (Автомобильный рынок)</p>
                                                </div>
                                            </div>
                                            <div class="information-about-company__info-line information-about-company__info-line-V2">
                                                <div class="information-about-company__info-box">
                                                    <span>Номер телефона:</span>
                                                    <ul>
                                                        <li>
                                                            <a href="tel:+994123602040">+ 994 12 360 20 40</a>
                                                        </li>
                                                        <li>
                                                            <a href="tel:+994123602040">+ 994 12 360 20 40</a>
                                                        </li>
                                                        <li>
                                                            <a href="tel:+994123602040">+ 994 12 360 20 40</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="information-about-company__info-box">
                                                    <span>Время работы:</span>
                                                    <ul>
                                                        <li>
                                                            Пн-Пт: 08:00 — 20:00
                                                        </li>
                                                        <li>
                                                            Пн-Пт: 08:00 — 20:00
                                                        </li>
                                                        <li>
                                                            Пн-Пт: 08:00 — 20:00
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="information-about-company__info-line information-about-company__info-line-V2">
                                                <div class="information-about-company__info-box">
                                                    <span>Почта:</span>
                                                    <a href="mailto:info@avto.com" class="qurient-link">info@avto.com</a>
                                                </div>
                                                <div class="information-about-company__info-box">
                                                    <span>Ссылка на сайт:</span>
                                                    <a href="bazasale.com" class="qurient-link">bazasale.com</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="acordeon-conteiner__box  acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">Фотографии</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/02</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper">
                                        <div class="acordeon-conteiner__photo-claster">
                                            <div class="acordeon-conteiner__main-photo-claster">
                                                <h4 class="cart-main-info__title-ul">Главное фото:</h4>
                                                <div class="photo-conteiner-add__main-image-conteiner add-new-image-main">
                                                    <div class="file-image-add">
                                                        <div class="file-image-add__element">
                                                            <img src="{{ asset('assets/front/img/_src/sto1.jpg') }}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="acordeon-conteiner__other-photo-conteiner">
                                                <h4 class="cart-main-info__title-ul">Другие фото:</h4>
                                                <div class="photo-conteiner-add__other-photo-conteiner">
                                                    <div class="other-box hoto-conteiner-add__other-box">
                                                        <div class="other-box__image">
                                                            <img src="{{ asset('assets/front/img/_src/det1.jpg') }}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="other-box hoto-conteiner-add__other-box">
                                                        <div class="other-box__image">
                                                            <img src="{{ asset('assets/front/img/_src/det2.jpg') }}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="other-box hoto-conteiner-add__other-box">
                                                        <div class="other-box__image">
                                                            <img src="{{ asset('assets/front/img/_src/det3.jpg') }}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="other-box hoto-conteiner-add__other-box">
                                                        <div class="other-box__image">
                                                            <img src="{{ asset('assets/front/img/_src/det4.jpg') }}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="other-box hoto-conteiner-add__other-box">
                                                        <div class="other-box__image">
                                                            <img src="{{ asset('assets/front/img/_src/det5.jpg') }}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="other-box hoto-conteiner-add__other-box">
                                                        <div class="other-box__image">
                                                            <img src="{{ asset('assets/front/img/_src/det1.jpg') }}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="other-box hoto-conteiner-add__other-box">
                                                        <div class="other-box__image">
                                                            <img src="{{ asset('assets/front/img/_src/det2.jpg') }}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="acordeon-conteiner__baner-claster">
                                            <h4 class="cart-main-info__title-ul">Ваши баннера размером 1280 х 400:</h4>
                                            <div class="rent-car__baners">
                                                <img src="{{ asset('assets/front/img/_src/baner-sto.jpg') }}" alt="">
                                            </div>
                                            <div class="rent-car__baners">
                                                <img src="{{ asset('assets/front/img/_src/baner-sto.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="acordeon-conteiner__box  acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">Описание</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/03</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper">
                                        <div class="box-redactor-text">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="acordeon-conteiner__box  acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">Направление автомагазина</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/04</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper">
                                        <div class="acordeon-conteiner__services-container">
                                            <div class="direction__claster">
                                                <div class="direction__box">
                                                    <div class="direction__header">
                                                        <div class="direction__ic-header">
                                                            <img src="{{ asset('assets/front/img/_src/stor-ic1.png') }}" alt="">
                                                        </div>
                                                        <h5 class="direction__header-title">Автозапчасти</h5>
                                                    </div>
                                                    <div class="direction__body-text">
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</p>
                                                    </div>
                                                </div>
                                                <div class="direction__box">
                                                    <div class="direction__header">
                                                        <div class="direction__ic-header">
                                                            <img src="{{ asset('assets/front/img/_src/stor-ic2.png') }}" alt="">
                                                        </div>
                                                        <h5 class="direction__header-title">Шины</h5>
                                                    </div>
                                                    <div class="direction__body-text">
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="acordeon-conteiner__box  acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">Товары в магазине для следующих брендов</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/05</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper">
                                        <div class="brend-conteiner__claster acordeon-conteiner__brends">
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
                                </div>
                            </div>
                            <div class="acordeon-conteiner__box  acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">Автомагазин на карте</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/06</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper">
                                        <div id="map3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
