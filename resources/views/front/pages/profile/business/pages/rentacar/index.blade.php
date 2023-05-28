@extends('front.layouts.app')

@section('content')
    <section class="cart-main-info">
        <div class="general-conteiner">
            <h2 class="cart-main-info__title">Личный кабинет</h2>
            <div class="catalog_bread-crumbs">
                <a href="">Главная</a>
                <p>/ Личный кабинет</p>
            </div>
            <div class="cart-main-info__conteiner">
                @include('front.pages.profile.business.layout.partials.navbar')
                <div class="cart-main-info__body-info cart-main-info__body-info_account">
                    <div class="user-account-busines-claster">
                        <div class="user-account-busines-claster__rent-car-conteiner">

                            <div class="acordeon-conteiner__box acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">Контактная информация</h4>
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

                                        <div class="rent-car__balans-ads balans-ads">
                                            <h5 class="balans-ads__title">У вас на счету:</h5>
                                            <ul class="balans-ads__list">
                                                <li>
                                                    <p>публикаций: <b>1</b></p>
                                                </li>
                                                <li>
                                                    <p>VIP публикаций: <b>0</b></p>
                                                </li>
                                            </ul>
                                            <div class="balans-ads__btn-box">
                                                <a href="" class="btn1">Купить еще</a>
                                                <a href="" class="btn1">Подать объявление</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="acordeon-conteiner__box acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">Ваши баннера</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/02</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>

                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper">
                                        <div class="rent-car__baners">
                                            <img src="img/_src/baner-sto.jpg" alt="">
                                        </div>
                                        <div class="rent-car__baners">
                                            <img src="img/_src/baner-sto.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="acordeon-conteiner__box acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">Ваши автомобили</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/03</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>

                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper">
                                        <div class="user-account-ads__ads-line ads-body__conteiner ads-body__conteiner_rent-car-account">
                                            <div class="ads-box ads-box-user ads-box-user__rent-car">
                                                <div class="ads_image">
                                                    <img src="img/_src/car7.jpg" alt="">
                                                </div>

                                                <div class="ads-box__info">
                                                    <h3 class="ads-box__title">
                                                        <a href="">Ford Focus Sport Plus Ford Focus Sport</a>
                                                    </h3>
                                                    <div class="ads-box-user__line-data">
                                                        <p class="ads-box__date">08.02.2021, 16:58</p>
                                                        <p class="ads-box__date"><b>Объявление №</b> 234 345 345</p>
                                                    </div>

                                                    <div class="ads-box-user__prise-line">
																<span class="ads-box-user__viev">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<g clip-path="url(#clip0)">
																	<path d="M12 4.84668C7.41454 4.84668 3.25621 7.35543 0.187788 11.4303C-0.0625959 11.7641 -0.0625959 12.2305 0.187788 12.5644C3.25621 16.6442 7.41454 19.1529 12 19.1529C16.5855 19.1529 20.7438 16.6442 23.8122 12.5693C24.0626 12.2354 24.0626 11.769 23.8122 11.4352C20.7438 7.35543 16.5855 4.84668 12 4.84668ZM12.3289 17.0369C9.28506 17.2284 6.7714 14.7196 6.96287 11.6709C7.11998 9.1572 9.15741 7.11977 11.6711 6.96267C14.7149 6.7712 17.2286 9.27994 17.0371 12.3287C16.8751 14.8375 14.8377 16.8749 12.3289 17.0369ZM12.1767 14.7098C10.537 14.8129 9.18196 13.4628 9.28997 11.8231C9.37343 10.468 10.4732 9.37322 11.8282 9.28485C13.4679 9.18175 14.823 10.5319 14.7149 12.1716C14.6266 13.5316 13.5268 14.6264 12.1767 14.7098Z" fill="#324153"></path>
																	</g>
																	<defs>
																	<clipPath id="clip0">
																	<rect width="24" height="24" fill="white"></rect>
																	</clipPath>
																	</defs>
																	</svg>
																	<p>3 484</p>
																</span>
                                                    </div>
                                                    <div class="prise-day">
                                                        <div class="rent-car__day">
                                                            <h5>Дней:</h5>
                                                            <div class="rent-car__day__line">
                                                                <a href="">1 - 3</a>
                                                                <a href="">4 - 10</a>
                                                                <a href="">10 - 20</a>
                                                                <a href="">20 - 30</a>
                                                                <a href="">30 +</a>
                                                            </div>
                                                        </div>
                                                        <div class="rent-car__dayprise">
                                                            <h5>$/день:</h5>
                                                            <div class="rent-car__dayprise__line">
                                                                <a href="">30</a>
                                                                <a href="">27</a>
                                                                <a href="">24</a>
                                                                <a href="">21</a>
                                                                <a href="">18</a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="ads-box-user__controls-conteiner">
                                                        <div class="ads-box-user__controls-box controls-box-ads">
                                                            <div class="controls-box-ads__icon">
                                                                <img src="img/_src/c_redact.png" alt="">
                                                            </div>
                                                            <p>Редактировать</p>
                                                        </div>

                                                        <div class="ads-box-user__controls-box controls-box-ads">
                                                            <div class="controls-box-ads__icon">
                                                                <img src="img/_src/c_viev.png" alt="">
                                                            </div>
                                                            <p>Просмотреть</p>
                                                        </div>

                                                        <div class="ads-box-user__controls-box controls-box-ads controls-box-ads_remove-style">
                                                            <div class="controls-box-ads__icon">
                                                                <img src="img/_src/c_remove.png" alt="">
                                                            </div>
                                                            <p>Удалить</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ads-box ads-box-user ads-box-user__rent-car">
                                                <div class="ads_image">
                                                    <img src="img/_src/car7.jpg" alt="">
                                                </div>

                                                <div class="ads-box__info">
                                                    <h3 class="ads-box__title">
                                                        <a href="">Ford Focus Sport Plus Ford Focus Sport</a>
                                                    </h3>
                                                    <div class="ads-box-user__line-data">
                                                        <p class="ads-box__date">08.02.2021, 16:58</p>
                                                        <p class="ads-box__date"><b>Объявление №</b> 234 345 345</p>
                                                    </div>

                                                    <div class="ads-box-user__prise-line">
																<span class="ads-box-user__viev">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<g clip-path="url(#clip0)">
																	<path d="M12 4.84668C7.41454 4.84668 3.25621 7.35543 0.187788 11.4303C-0.0625959 11.7641 -0.0625959 12.2305 0.187788 12.5644C3.25621 16.6442 7.41454 19.1529 12 19.1529C16.5855 19.1529 20.7438 16.6442 23.8122 12.5693C24.0626 12.2354 24.0626 11.769 23.8122 11.4352C20.7438 7.35543 16.5855 4.84668 12 4.84668ZM12.3289 17.0369C9.28506 17.2284 6.7714 14.7196 6.96287 11.6709C7.11998 9.1572 9.15741 7.11977 11.6711 6.96267C14.7149 6.7712 17.2286 9.27994 17.0371 12.3287C16.8751 14.8375 14.8377 16.8749 12.3289 17.0369ZM12.1767 14.7098C10.537 14.8129 9.18196 13.4628 9.28997 11.8231C9.37343 10.468 10.4732 9.37322 11.8282 9.28485C13.4679 9.18175 14.823 10.5319 14.7149 12.1716C14.6266 13.5316 13.5268 14.6264 12.1767 14.7098Z" fill="#324153"></path>
																	</g>
																	<defs>
																	<clipPath id="clip0">
																	<rect width="24" height="24" fill="white"></rect>
																	</clipPath>
																	</defs>
																	</svg>
																	<p>3 484</p>
																</span>
                                                    </div>
                                                    <div class="prise-day">
                                                        <div class="rent-car__day">
                                                            <h5>Дней:</h5>
                                                            <div class="rent-car__day__line">
                                                                <a href="">1 - 3</a>
                                                                <a href="">4 - 10</a>
                                                                <a href="">10 - 20</a>
                                                                <a href="">20 - 30</a>
                                                                <a href="">30 +</a>
                                                            </div>
                                                        </div>
                                                        <div class="rent-car__dayprise">
                                                            <h5>$/день:</h5>
                                                            <div class="rent-car__dayprise__line">
                                                                <a href="">30</a>
                                                                <a href="">27</a>
                                                                <a href="">24</a>
                                                                <a href="">21</a>
                                                                <a href="">18</a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="ads-box-user__controls-conteiner">
                                                        <div class="ads-box-user__controls-box controls-box-ads">
                                                            <div class="controls-box-ads__icon">
                                                                <img src="img/_src/c_redact.png" alt="">
                                                            </div>
                                                            <p>Редактировать</p>
                                                        </div>

                                                        <div class="ads-box-user__controls-box controls-box-ads">
                                                            <div class="controls-box-ads__icon">
                                                                <img src="img/_src/c_viev.png" alt="">
                                                            </div>
                                                            <p>Просмотреть</p>
                                                        </div>

                                                        <div class="ads-box-user__controls-box controls-box-ads controls-box-ads_remove-style">
                                                            <div class="controls-box-ads__icon">
                                                                <img src="img/_src/c_remove.png" alt="">
                                                            </div>
                                                            <p>Удалить</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ads-box ads-box-user ads-box-user__rent-car">
                                                <div class="ads_image">
                                                    <img src="img/_src/car7.jpg" alt="">
                                                </div>

                                                <div class="ads-box__info">
                                                    <h3 class="ads-box__title">
                                                        <a href="">Ford Focus Sport Plus Ford Focus Sport</a>
                                                    </h3>
                                                    <div class="ads-box-user__line-data">
                                                        <p class="ads-box__date">08.02.2021, 16:58</p>
                                                        <p class="ads-box__date"><b>Объявление №</b> 234 345 345</p>
                                                    </div>

                                                    <div class="ads-box-user__prise-line">
																<span class="ads-box-user__viev">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<g clip-path="url(#clip0)">
																	<path d="M12 4.84668C7.41454 4.84668 3.25621 7.35543 0.187788 11.4303C-0.0625959 11.7641 -0.0625959 12.2305 0.187788 12.5644C3.25621 16.6442 7.41454 19.1529 12 19.1529C16.5855 19.1529 20.7438 16.6442 23.8122 12.5693C24.0626 12.2354 24.0626 11.769 23.8122 11.4352C20.7438 7.35543 16.5855 4.84668 12 4.84668ZM12.3289 17.0369C9.28506 17.2284 6.7714 14.7196 6.96287 11.6709C7.11998 9.1572 9.15741 7.11977 11.6711 6.96267C14.7149 6.7712 17.2286 9.27994 17.0371 12.3287C16.8751 14.8375 14.8377 16.8749 12.3289 17.0369ZM12.1767 14.7098C10.537 14.8129 9.18196 13.4628 9.28997 11.8231C9.37343 10.468 10.4732 9.37322 11.8282 9.28485C13.4679 9.18175 14.823 10.5319 14.7149 12.1716C14.6266 13.5316 13.5268 14.6264 12.1767 14.7098Z" fill="#324153"></path>
																	</g>
																	<defs>
																	<clipPath id="clip0">
																	<rect width="24" height="24" fill="white"></rect>
																	</clipPath>
																	</defs>
																	</svg>
																	<p>3 484</p>
																</span>
                                                    </div>
                                                    <div class="prise-day">
                                                        <div class="rent-car__day">
                                                            <h5>Дней:</h5>
                                                            <div class="rent-car__day__line">
                                                                <a href="">1 - 3</a>
                                                                <a href="">4 - 10</a>
                                                                <a href="">10 - 20</a>
                                                                <a href="">20 - 30</a>
                                                                <a href="">30 +</a>
                                                            </div>
                                                        </div>
                                                        <div class="rent-car__dayprise">
                                                            <h5>$/день:</h5>
                                                            <div class="rent-car__dayprise__line">
                                                                <a href="">30</a>
                                                                <a href="">27</a>
                                                                <a href="">24</a>
                                                                <a href="">21</a>
                                                                <a href="">18</a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="ads-box-user__controls-conteiner">
                                                        <div class="ads-box-user__controls-box controls-box-ads">
                                                            <div class="controls-box-ads__icon">
                                                                <img src="img/_src/c_redact.png" alt="">
                                                            </div>
                                                            <p>Редактировать</p>
                                                        </div>

                                                        <div class="ads-box-user__controls-box controls-box-ads">
                                                            <div class="controls-box-ads__icon">
                                                                <img src="img/_src/c_viev.png" alt="">
                                                            </div>
                                                            <p>Просмотреть</p>
                                                        </div>

                                                        <div class="ads-box-user__controls-box controls-box-ads controls-box-ads_remove-style">
                                                            <div class="controls-box-ads__icon">
                                                                <img src="img/_src/c_remove.png" alt="">
                                                            </div>
                                                            <p>Удалить</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ads-box ads-box-user ads-box-user__rent-car">
                                                <div class="ads_image">
                                                    <img src="img/_src/car7.jpg" alt="">
                                                </div>

                                                <div class="ads-box__info">
                                                    <h3 class="ads-box__title">
                                                        <a href="">Ford Focus Sport Plus Ford Focus Sport</a>
                                                    </h3>
                                                    <div class="ads-box-user__line-data">
                                                        <p class="ads-box__date">08.02.2021, 16:58</p>
                                                        <p class="ads-box__date"><b>Объявление №</b> 234 345 345</p>
                                                    </div>

                                                    <div class="ads-box-user__prise-line">
																<span class="ads-box-user__viev">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<g clip-path="url(#clip0)">
																	<path d="M12 4.84668C7.41454 4.84668 3.25621 7.35543 0.187788 11.4303C-0.0625959 11.7641 -0.0625959 12.2305 0.187788 12.5644C3.25621 16.6442 7.41454 19.1529 12 19.1529C16.5855 19.1529 20.7438 16.6442 23.8122 12.5693C24.0626 12.2354 24.0626 11.769 23.8122 11.4352C20.7438 7.35543 16.5855 4.84668 12 4.84668ZM12.3289 17.0369C9.28506 17.2284 6.7714 14.7196 6.96287 11.6709C7.11998 9.1572 9.15741 7.11977 11.6711 6.96267C14.7149 6.7712 17.2286 9.27994 17.0371 12.3287C16.8751 14.8375 14.8377 16.8749 12.3289 17.0369ZM12.1767 14.7098C10.537 14.8129 9.18196 13.4628 9.28997 11.8231C9.37343 10.468 10.4732 9.37322 11.8282 9.28485C13.4679 9.18175 14.823 10.5319 14.7149 12.1716C14.6266 13.5316 13.5268 14.6264 12.1767 14.7098Z" fill="#324153"></path>
																	</g>
																	<defs>
																	<clipPath id="clip0">
																	<rect width="24" height="24" fill="white"></rect>
																	</clipPath>
																	</defs>
																	</svg>
																	<p>3 484</p>
																</span>
                                                    </div>
                                                    <div class="prise-day">
                                                        <div class="rent-car__day">
                                                            <h5>Дней:</h5>
                                                            <div class="rent-car__day__line">
                                                                <a href="">1 - 3</a>
                                                                <a href="">4 - 10</a>
                                                                <a href="">10 - 20</a>
                                                                <a href="">20 - 30</a>
                                                                <a href="">30 +</a>
                                                            </div>
                                                        </div>
                                                        <div class="rent-car__dayprise">
                                                            <h5>$/день:</h5>
                                                            <div class="rent-car__dayprise__line">
                                                                <a href="">30</a>
                                                                <a href="">27</a>
                                                                <a href="">24</a>
                                                                <a href="">21</a>
                                                                <a href="">18</a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="ads-box-user__controls-conteiner">
                                                        <div class="ads-box-user__controls-box controls-box-ads">
                                                            <div class="controls-box-ads__icon">
                                                                <img src="img/_src/c_redact.png" alt="">
                                                            </div>
                                                            <p>Редактировать</p>
                                                        </div>

                                                        <div class="ads-box-user__controls-box controls-box-ads">
                                                            <div class="controls-box-ads__icon">
                                                                <img src="img/_src/c_viev.png" alt="">
                                                            </div>
                                                            <p>Просмотреть</p>
                                                        </div>

                                                        <div class="ads-box-user__controls-box controls-box-ads controls-box-ads_remove-style">
                                                            <div class="controls-box-ads__icon">
                                                                <img src="img/_src/c_remove.png" alt="">
                                                            </div>
                                                            <p>Удалить</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ads-box ads-box-user ads-box-user__rent-car">
                                                <div class="ads_image">
                                                    <img src="img/_src/car7.jpg" alt="">
                                                </div>

                                                <div class="ads-box__info">
                                                    <h3 class="ads-box__title">
                                                        <a href="">Ford Focus Sport Plus Ford Focus Sport</a>
                                                    </h3>
                                                    <div class="ads-box-user__line-data">
                                                        <p class="ads-box__date">08.02.2021, 16:58</p>
                                                        <p class="ads-box__date"><b>Объявление №</b> 234 345 345</p>
                                                    </div>

                                                    <div class="ads-box-user__prise-line">
																<span class="ads-box-user__viev">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<g clip-path="url(#clip0)">
																	<path d="M12 4.84668C7.41454 4.84668 3.25621 7.35543 0.187788 11.4303C-0.0625959 11.7641 -0.0625959 12.2305 0.187788 12.5644C3.25621 16.6442 7.41454 19.1529 12 19.1529C16.5855 19.1529 20.7438 16.6442 23.8122 12.5693C24.0626 12.2354 24.0626 11.769 23.8122 11.4352C20.7438 7.35543 16.5855 4.84668 12 4.84668ZM12.3289 17.0369C9.28506 17.2284 6.7714 14.7196 6.96287 11.6709C7.11998 9.1572 9.15741 7.11977 11.6711 6.96267C14.7149 6.7712 17.2286 9.27994 17.0371 12.3287C16.8751 14.8375 14.8377 16.8749 12.3289 17.0369ZM12.1767 14.7098C10.537 14.8129 9.18196 13.4628 9.28997 11.8231C9.37343 10.468 10.4732 9.37322 11.8282 9.28485C13.4679 9.18175 14.823 10.5319 14.7149 12.1716C14.6266 13.5316 13.5268 14.6264 12.1767 14.7098Z" fill="#324153"></path>
																	</g>
																	<defs>
																	<clipPath id="clip0">
																	<rect width="24" height="24" fill="white"></rect>
																	</clipPath>
																	</defs>
																	</svg>
																	<p>3 484</p>
																</span>
                                                    </div>
                                                    <div class="prise-day">
                                                        <div class="rent-car__day">
                                                            <h5>Дней:</h5>
                                                            <div class="rent-car__day__line">
                                                                <a href="">1 - 3</a>
                                                                <a href="">4 - 10</a>
                                                                <a href="">10 - 20</a>
                                                                <a href="">20 - 30</a>
                                                                <a href="">30 +</a>
                                                            </div>
                                                        </div>
                                                        <div class="rent-car__dayprise">
                                                            <h5>$/день:</h5>
                                                            <div class="rent-car__dayprise__line">
                                                                <a href="">30</a>
                                                                <a href="">27</a>
                                                                <a href="">24</a>
                                                                <a href="">21</a>
                                                                <a href="">18</a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="ads-box-user__controls-conteiner">
                                                        <div class="ads-box-user__controls-box controls-box-ads">
                                                            <div class="controls-box-ads__icon">
                                                                <img src="img/_src/c_redact.png" alt="">
                                                            </div>
                                                            <p>Редактировать</p>
                                                        </div>

                                                        <div class="ads-box-user__controls-box controls-box-ads">
                                                            <div class="controls-box-ads__icon">
                                                                <img src="img/_src/c_viev.png" alt="">
                                                            </div>
                                                            <p>Просмотреть</p>
                                                        </div>

                                                        <div class="ads-box-user__controls-box controls-box-ads controls-box-ads_remove-style">
                                                            <div class="controls-box-ads__icon">
                                                                <img src="img/_src/c_remove.png" alt="">
                                                            </div>
                                                            <p>Удалить</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ads-box ads-box-user ads-box-user__rent-car">
                                                <div class="ads_image">
                                                    <img src="img/_src/car7.jpg" alt="">
                                                </div>

                                                <div class="ads-box__info">
                                                    <h3 class="ads-box__title">
                                                        <a href="">Ford Focus Sport Plus Ford Focus Sport</a>
                                                    </h3>
                                                    <div class="ads-box-user__line-data">
                                                        <p class="ads-box__date">08.02.2021, 16:58</p>
                                                        <p class="ads-box__date"><b>Объявление №</b> 234 345 345</p>
                                                    </div>

                                                    <div class="ads-box-user__prise-line">
																<span class="ads-box-user__viev">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<g clip-path="url(#clip0)">
																	<path d="M12 4.84668C7.41454 4.84668 3.25621 7.35543 0.187788 11.4303C-0.0625959 11.7641 -0.0625959 12.2305 0.187788 12.5644C3.25621 16.6442 7.41454 19.1529 12 19.1529C16.5855 19.1529 20.7438 16.6442 23.8122 12.5693C24.0626 12.2354 24.0626 11.769 23.8122 11.4352C20.7438 7.35543 16.5855 4.84668 12 4.84668ZM12.3289 17.0369C9.28506 17.2284 6.7714 14.7196 6.96287 11.6709C7.11998 9.1572 9.15741 7.11977 11.6711 6.96267C14.7149 6.7712 17.2286 9.27994 17.0371 12.3287C16.8751 14.8375 14.8377 16.8749 12.3289 17.0369ZM12.1767 14.7098C10.537 14.8129 9.18196 13.4628 9.28997 11.8231C9.37343 10.468 10.4732 9.37322 11.8282 9.28485C13.4679 9.18175 14.823 10.5319 14.7149 12.1716C14.6266 13.5316 13.5268 14.6264 12.1767 14.7098Z" fill="#324153"></path>
																	</g>
																	<defs>
																	<clipPath id="clip0">
																	<rect width="24" height="24" fill="white"></rect>
																	</clipPath>
																	</defs>
																	</svg>
																	<p>3 484</p>
																</span>
                                                    </div>
                                                    <div class="prise-day">
                                                        <div class="rent-car__day">
                                                            <h5>Дней:</h5>
                                                            <div class="rent-car__day__line">
                                                                <a href="">1 - 3</a>
                                                                <a href="">4 - 10</a>
                                                                <a href="">10 - 20</a>
                                                                <a href="">20 - 30</a>
                                                                <a href="">30 +</a>
                                                            </div>
                                                        </div>
                                                        <div class="rent-car__dayprise">
                                                            <h5>$/день:</h5>
                                                            <div class="rent-car__dayprise__line">
                                                                <a href="">30</a>
                                                                <a href="">27</a>
                                                                <a href="">24</a>
                                                                <a href="">21</a>
                                                                <a href="">18</a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="ads-box-user__controls-conteiner">
                                                        <div class="ads-box-user__controls-box controls-box-ads">
                                                            <div class="controls-box-ads__icon">
                                                                <img src="img/_src/c_redact.png" alt="">
                                                            </div>
                                                            <p>Редактировать</p>
                                                        </div>

                                                        <div class="ads-box-user__controls-box controls-box-ads">
                                                            <div class="controls-box-ads__icon">
                                                                <img src="img/_src/c_viev.png" alt="">
                                                            </div>
                                                            <p>Просмотреть</p>
                                                        </div>

                                                        <div class="ads-box-user__controls-box controls-box-ads controls-box-ads_remove-style">
                                                            <div class="controls-box-ads__icon">
                                                                <img src="img/_src/c_remove.png" alt="">
                                                            </div>
                                                            <p>Удалить</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="acordeon-conteiner__box acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">Локация</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/04</span>
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