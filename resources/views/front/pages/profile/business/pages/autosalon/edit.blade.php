@extends('front.layouts.app')

@section('content')
    <section class="cart-main-info">
        <div class="general-conteiner">
            <h2 class="cart-main-info__title">Редактировать информацию</h2>
            <div class="catalog_bread-crumbs">
                <a href="">Главная</a>
                <a href="">/ Личный кабинет</a>
                <p>Редактировать информацию</p>
            </div>
            <div class="cart-main-info__conteiner">
                @include('front.pages.profile.business.layout.partials.navbar')
                <div class="cart-main-info__body-info cart-main-info__body-info_account">
                    <div class="user-account-busines-claster">
                        <div class="user-account-busines-claster__rent-car-conteiner">

                            <div class="acordeon-conteiner__box acordeon-element activ-acordeon">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">Контактная информация автосалона</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/01</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>

                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper information-about-company">
                                        <div class="information-about-company__redact-claster">
                                            <p class="redact-info-subtitle">Все поля обязательные для заполнения</p>
                                            <div class="information-about-company__main-info-redact main-info-redact">
                                                <div class="user-main-info__inp-info input-form-conteiner">
                                                    <h5 class="input-form-conteiner__title">Название компании:</h5>
                                                    <div class="input-form-conteiner__claster">
                                                        <input type="text" class="input-form-conteiner__input" placeholder="Автосалон Mercedes-Benz Baku" value="Автосалон Mercedes-Benz Baku">
                                                    </div>
                                                </div>

                                                <div class="user-main-info__inp-info input-form-conteiner">
                                                    <h5 class="input-form-conteiner__title">Адрес салона:</h5>
                                                    <div class="input-form-conteiner__claster">
                                                        <input type="text" class="input-form-conteiner__input" placeholder="Адрес салона" value="Хатаинский р., пр. Бабека, (Автомобильный рынок)">
                                                    </div>
                                                </div>

                                                <div class="main-info-redact__flex-line-V1">
                                                    <div class="user-main-info__inp-info input-form-conteiner">
                                                        <h5 class="input-form-conteiner__title">Почта:</h5>
                                                        <div class="input-form-conteiner__claster">
                                                            <input type="text" class="input-form-conteiner__input" placeholder="info@avto.com" value="info@avto.com">
                                                        </div>
                                                    </div>

                                                    <div class="user-main-info__inp-info input-form-conteiner">
                                                        <h5 class="input-form-conteiner__title">Ссылка на сайт:</h5>
                                                        <div class="input-form-conteiner__claster">
                                                            <input type="text" class="input-form-conteiner__input" placeholder="avto.com" value="avto.com">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="main-info-redact__flex-line-V2">
                                                    <h5 class="main-info-redact__title-flex-line">Время работы:</h5>
                                                    <div class="input-form-conteiner">
                                                        <h5 class="input-form-conteiner__title">Пн. — Пт.:</h5>
                                                        <div class="input-form-conteiner__claster">
                                                            <input type="text" class="input-form-conteiner__input" placeholder="08:00 — 20:00" value="08:00 — 20:00">
                                                        </div>
                                                    </div>

                                                    <div class="input-form-conteiner">
                                                        <h5 class="input-form-conteiner__title">Сб.:</h5>
                                                        <div class="input-form-conteiner__claster">
                                                            <input type="text" class="input-form-conteiner__input" placeholder="08:00 — 20:00" value="08:00 — 20:00">
                                                        </div>
                                                    </div>

                                                    <div class="input-form-conteiner">
                                                        <h5 class="input-form-conteiner__title">Вс.:</h5>
                                                        <div class="input-form-conteiner__claster">
                                                            <input type="text" class="input-form-conteiner__input" placeholder="08:00 — 20:00" value="08:00 — 20:00">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="information-about-company__dop-info-redact">
                                                <div class="select-form-conteiner">
                                                    <h5 class="select-form-conteiner__title">Город</h5>
                                                    <select name="" id="">
                                                        <option value="">Город</option>
                                                        <option value="">Баку</option>
                                                        <option value="">Баку 2</option>
                                                    </select>
                                                </div>

                                                <div class="information-about-company__phone-conteiner">

                                                    <div class="user-main-info__inp-info input-form-conteiner phone-company-conteiner defoult-phone-namber">
                                                        <h5 class="input-form-conteiner__title">Номер телефона:</h5>
                                                        <div class="input-form-conteiner__claster">
                                                            <input type="text" class="input-form-conteiner__input" placeholder="+ 994 12 360 20 40" value="+ 994 12 360 20 40">
                                                        </div>
                                                        <div class="input-form-conteiner__check-box-row">
                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="Viber">
                                                                    <span>Viber</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="Telegram">
                                                                    <span>Telegram</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>WhatsApp</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="btn-add-del del-phone">
                                                            <div class="btn-add-del__icon">
                                                                <img src="img/_src/del-ic.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="information-about-company__add-more-phone-conteiner">

                                                        <div class="btn-add-del add-phone-btn">
                                                            <div class="btn-add-del__icon">
                                                                <img src="img/_src/add-ic.png" alt="">
                                                            </div>
                                                            <span>Добавить телефон</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="acordeon-conteiner__box acordeon-element activ-acordeon">
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

                                            <div class="photo-conteiner-add__main-photo user-acc-red-photo">

                                                <!-- при выборе фото в коде будет создаватся обьект с добавленым фото для пред просмотра -->
                                                <div class="photo-conteiner-add__main-image-conteiner add-new-image-main">
                                                    <h4 class="cart-main-info__title-ul">Главное фото:</h4>

                                                    <a class="ads-box-user__add-ads" style="display: none;">
                                                        <label class="custom-file-upload">
                                                            <input type="file"  accept="image/heic, image/png, image/jpeg, image/webp" id="main-car-photo-donload" >
                                                            <div class="ads-box-user__add-ads-conteiner ads-box-user__add-ads-conteiner_big">
                                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M31.6665 18.3332H21.6665V8.33317C21.6665 7.89114 21.4909 7.46722 21.1783 7.15466C20.8658 6.8421 20.4419 6.6665 19.9998 6.6665C19.5578 6.6665 19.1339 6.8421 18.8213 7.15466C18.5088 7.46722 18.3332 7.89114 18.3332 8.33317V18.3332H8.33317C7.89114 18.3332 7.46722 18.5088 7.15466 18.8213C6.8421 19.1339 6.6665 19.5578 6.6665 19.9998C6.6665 20.4419 6.8421 20.8658 7.15466 21.1783C7.46722 21.4909 7.89114 21.6665 8.33317 21.6665H18.3332V31.6665C18.3332 32.1085 18.5088 32.5325 18.8213 32.845C19.1339 33.1576 19.5578 33.3332 19.9998 33.3332C20.4419 33.3332 20.8658 33.1576 21.1783 32.845C21.4909 32.5325 21.6665 32.1085 21.6665 31.6665V21.6665H31.6665C32.1085 21.6665 32.5325 21.4909 32.845 21.1783C33.1576 20.8658 33.3332 20.4419 33.3332 19.9998C33.3332 19.5578 33.1576 19.1339 32.845 18.8213C32.5325 18.5088 32.1085 18.3332 31.6665 18.3332Z" fill="#768A9E"></path>
                                                                </svg>
                                                                <p>Добавить основное фото</p>
                                                            </div>
                                                        </label>
                                                    </a>
                                                    <div class="file-image-add">
                                                        <div class="file-image-add__remove-image other-box__close"></div>
                                                        <div class="file-image-add__element">
                                                            <img src="img/_src/car5.jpg" alt="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="photo-conteiner-add__main-image-info">
                                                    <div class="waring-text">
                                                        <span>Важно:</span>
                                                        <p>на главном фото автосалона должно быть Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="logo-download-conteiner add-new-image-main logo-redact-claster">
                                                <h4 class="cart-main-info__title-ul">Логотип:</h4>

                                                <a class="ads-box-user__add-ads" style="display: none;">
                                                    <label class="custom-file-upload">
                                                        <input type="file"  accept="image/heic, image/png, image/jpeg, image/webp" id="logo-photo-donload" >
                                                        <div class="ads-box-user__add-ads-conteiner ads-box-user__add-ads-conteiner_big">
                                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M31.6665 18.3332H21.6665V8.33317C21.6665 7.89114 21.4909 7.46722 21.1783 7.15466C20.8658 6.8421 20.4419 6.6665 19.9998 6.6665C19.5578 6.6665 19.1339 6.8421 18.8213 7.15466C18.5088 7.46722 18.3332 7.89114 18.3332 8.33317V18.3332H8.33317C7.89114 18.3332 7.46722 18.5088 7.15466 18.8213C6.8421 19.1339 6.6665 19.5578 6.6665 19.9998C6.6665 20.4419 6.8421 20.8658 7.15466 21.1783C7.46722 21.4909 7.89114 21.6665 8.33317 21.6665H18.3332V31.6665C18.3332 32.1085 18.5088 32.5325 18.8213 32.845C19.1339 33.1576 19.5578 33.3332 19.9998 33.3332C20.4419 33.3332 20.8658 33.1576 21.1783 32.845C21.4909 32.5325 21.6665 32.1085 21.6665 31.6665V21.6665H31.6665C32.1085 21.6665 32.5325 21.4909 32.845 21.1783C33.1576 20.8658 33.3332 20.4419 33.3332 19.9998C33.3332 19.5578 33.1576 19.1339 32.845 18.8213C32.5325 18.5088 32.1085 18.3332 31.6665 18.3332Z" fill="#768A9E"></path>
                                                            </svg>

                                                        </div>
                                                    </label>
                                                </a>
                                                <div class="file-image-add">
                                                    <div class="file-image-add__remove-image other-box__close"></div>
                                                    <div class="file-image-add__element">
                                                        <img src="img/_src/lx.png" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="acordeon-conteiner__other-photo-conteiner">
                                                <h4 class="cart-main-info__title-ul">Другие фото:</h4>
                                                <div class="photo-conteiner-add__other-photo-conteiner other-photo__user">

                                                    <!-- при выборе фото в коде будет создаватся обьект с добавленым фото для пред просмотра -->

                                                    <a  class="ads-box-user__add-ads ads-box-user__add-ads_filedonload" >
                                                        <label class="custom-file-upload">
                                                            <input type="file"  accept="image/heic, image/png, image/jpeg, image/webp" id="addotherimage" >
                                                            <div class="ads-box-user__add-ads-conteiner">
                                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M31.6665 18.3332H21.6665V8.33317C21.6665 7.89114 21.4909 7.46722 21.1783 7.15466C20.8658 6.8421 20.4419 6.6665 19.9998 6.6665C19.5578 6.6665 19.1339 6.8421 18.8213 7.15466C18.5088 7.46722 18.3332 7.89114 18.3332 8.33317V18.3332H8.33317C7.89114 18.3332 7.46722 18.5088 7.15466 18.8213C6.8421 19.1339 6.6665 19.5578 6.6665 19.9998C6.6665 20.4419 6.8421 20.8658 7.15466 21.1783C7.46722 21.4909 7.89114 21.6665 8.33317 21.6665H18.3332V31.6665C18.3332 32.1085 18.5088 32.5325 18.8213 32.845C19.1339 33.1576 19.5578 33.3332 19.9998 33.3332C20.4419 33.3332 20.8658 33.1576 21.1783 32.845C21.4909 32.5325 21.6665 32.1085 21.6665 31.6665V21.6665H31.6665C32.1085 21.6665 32.5325 21.4909 32.845 21.1783C33.1576 20.8658 33.3332 20.4419 33.3332 19.9998C33.3332 19.5578 33.1576 19.1339 32.845 18.8213C32.5325 18.5088 32.1085 18.3332 31.6665 18.3332Z" fill="#768A9E"></path>
                                                                </svg>
                                                                <p>Добавить фото</p>
                                                            </div>
                                                        </label>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="logo-download-conteiner add-new-image-main logo-redact-claster acordeon-conteiner__baner-claster">
                                            <h4 class="cart-main-info__title-ul">Логотип:</h4>

                                            <a class="ads-box-user__add-ads" style="display: none;">
                                                <label class="custom-file-upload">
                                                    <input type="file"  accept="image/heic, image/png, image/jpeg, image/webp" id="logo-photo-donload" >
                                                    <div class="ads-box-user__add-ads-conteiner ads-box-user__add-ads-conteiner_big">
                                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M31.6665 18.3332H21.6665V8.33317C21.6665 7.89114 21.4909 7.46722 21.1783 7.15466C20.8658 6.8421 20.4419 6.6665 19.9998 6.6665C19.5578 6.6665 19.1339 6.8421 18.8213 7.15466C18.5088 7.46722 18.3332 7.89114 18.3332 8.33317V18.3332H8.33317C7.89114 18.3332 7.46722 18.5088 7.15466 18.8213C6.8421 19.1339 6.6665 19.5578 6.6665 19.9998C6.6665 20.4419 6.8421 20.8658 7.15466 21.1783C7.46722 21.4909 7.89114 21.6665 8.33317 21.6665H18.3332V31.6665C18.3332 32.1085 18.5088 32.5325 18.8213 32.845C19.1339 33.1576 19.5578 33.3332 19.9998 33.3332C20.4419 33.3332 20.8658 33.1576 21.1783 32.845C21.4909 32.5325 21.6665 32.1085 21.6665 31.6665V21.6665H31.6665C32.1085 21.6665 32.5325 21.4909 32.845 21.1783C33.1576 20.8658 33.3332 20.4419 33.3332 19.9998C33.3332 19.5578 33.1576 19.1339 32.845 18.8213C32.5325 18.5088 32.1085 18.3332 31.6665 18.3332Z" fill="#768A9E"></path>
                                                        </svg>

                                                    </div>
                                                </label>
                                            </a>
                                            <div class="file-image-add">
                                                <div class="file-image-add__remove-image other-box__close"></div>
                                                <div class="file-image-add__element">
                                                    <img src="img/_src/lx.png" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="acordeon-conteiner__baner-claster">
                                            <h4 class="cart-main-info__title-ul">Ваши баннера размером 740 х 260:</h4>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="acordeon-conteiner__box acordeon-element activ-acordeon">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">Описание и преимущества</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/03</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>

                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper">

                                        <div class="box-redactor-text">
                                            <h4 class="cart-main-info__title-ul">Описание:</h4>
                                            <div class="acordeon-conteiner__description-conteiner">
                                                <textarea placeholder="Текст описание"></textarea>
                                            </div>
                                        </div>

                                        <div class="box-redactor-text">
                                            <h4 class="cart-main-info__title-ul">Преимущества:</h4>
                                            <div class="box-redactor-text__checbox-advantages">
                                                <div class="checkbox">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" name="carbody" value="WhatsApp">
                                                        <span>Преимущество</span>
                                                    </label>
                                                </div>

                                                <div class="checkbox">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" name="carbody" value="WhatsApp">
                                                        <span>Преимущество</span>
                                                    </label>
                                                </div>

                                                <div class="checkbox">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" name="carbody" value="WhatsApp">
                                                        <span>Преимущество</span>
                                                    </label>
                                                </div>

                                                <div class="checkbox">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" name="carbody" value="WhatsApp">
                                                        <span>Преимущество</span>
                                                    </label>
                                                </div>

                                                <div class="checkbox">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" name="carbody" value="WhatsApp">
                                                        <span>Преимущество</span>
                                                    </label>
                                                </div>

                                                <div class="checkbox">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" name="carbody" value="WhatsApp">
                                                        <span>Преимущество</span>
                                                    </label>
                                                </div>

                                                <div class="checkbox">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" name="carbody" value="WhatsApp">
                                                        <span>Преимущество</span>
                                                    </label>
                                                </div>

                                                <div class="checkbox">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" name="carbody" value="WhatsApp">
                                                        <span>Преимущество</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="acordeon-conteiner__box acordeon-element activ-acordeon">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">Автосалон на карте</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/04</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>

                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper">
                                        <div class="acordeon-conteiner__add-more-location add-more-location">
                                            <p class="redact-info-subtitle">Все поля обязательные для заполнения</p>
                                            <div class="add-more-location__row add-more-location__defoult-location">
                                                <div class="catalog__filtr__filtr-element add-more-location__big-select">
                                                    <h5>Адрес:</h5>
                                                    <div class="input-form-conteiner__claster">
                                                        <input type="text" class="input-form-conteiner__input" placeholder="info@avto.com" value="info@avto.com">
                                                    </div>
                                                </div>

                                                <div class="btn-add-del del-location">
                                                    <div class="btn-add-del__icon">
                                                        <img src="img/_src/del-ic.png" alt="">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="add-more-location__new-location">
                                                <div class="btn-add-del add-location">
                                                    <div class="btn-add-del__icon">
                                                        <img src="img/_src/add-ic.png" alt="">
                                                    </div>
                                                    <span>Добавить еще адрес</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div id="map3"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="save-btn-line">
                                <button class="btn1">Сохранить</button>
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
