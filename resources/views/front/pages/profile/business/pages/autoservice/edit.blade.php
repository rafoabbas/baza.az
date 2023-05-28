@extends('front.layouts.app')

@section('content')
    <section class="cart-main-info">
        <div class="general-conteiner">
            <h2 class="cart-main-info__title">Редактировать информацию CTO</h2>
            <div class="catalog_bread-crumbs">
                <a href="">Главная</a>
                <a href="">/ Личный кабинет</a>
                <p>/ Редактировать информацию CTO</p>
            </div>
            <div class="cart-main-info__conteiner">
                @include('front.pages.profile.business.layout.partials.navbar')
                <div class="cart-main-info__body-info cart-main-info__body-info_account">
                    <div class="user-account-busines-claster">
                        <div class="user-account-busines-claster__rent-car-conteiner">

                            <div class="acordeon-conteiner__box acordeon-element">
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
                                        <div class="information-about-company__redact-claster">
                                            <p class="redact-info-subtitle">Все поля обязательные для заполнения</p>
                                            <div class="information-about-company__main-info-redact main-info-redact">
                                                <div class="user-main-info__inp-info input-form-conteiner">
                                                    <h5 class="input-form-conteiner__title">Название СТО:</h5>
                                                    <div class="input-form-conteiner__claster">
                                                        <input type="text" class="input-form-conteiner__input" placeholder="Автосалон Mercedes-Benz Baku" value="Автосалон Mercedes-Benz Baku">
                                                    </div>
                                                </div>

                                                <div class="user-main-info__inp-info input-form-conteiner">
                                                    <h5 class="input-form-conteiner__title">Адрес СТО:</h5>
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

                            <div class="acordeon-conteiner__box acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">Фотографии СТО</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/02</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>

                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper">
                                        <div class="acordeon-conteiner__photo-claster">

                                            <div class="photo-conteiner-add__main-photo">
                                                <h4 class="cart-main-info__title-ul">Главное фото:</h4>
                                                <div class="photo-conteiner-add__main-image-conteiner add-new-image-main">
                                                    <div class="file-image-add">
                                                        <div class="file-image-add__remove-image other-box__close"></div>
                                                        <div class="file-image-add__element">
                                                            <img src="img/_src/car5.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <a class="card-box-user__add-ads" style="display: none;">
                                                        <label class="custom-file-upload">
                                                            <input type="file"  accept="image/heic, image/png, image/jpeg, image/webp" id="main-car-photo-donload" >
                                                            <div class="card-box-user__add-ads-conteiner">
                                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M31.6665 18.3332H21.6665V8.33317C21.6665 7.89114 21.4909 7.46722 21.1783 7.15466C20.8658 6.8421 20.4419 6.6665 19.9998 6.6665C19.5578 6.6665 19.1339 6.8421 18.8213 7.15466C18.5088 7.46722 18.3332 7.89114 18.3332 8.33317V18.3332H8.33317C7.89114 18.3332 7.46722 18.5088 7.15466 18.8213C6.8421 19.1339 6.6665 19.5578 6.6665 19.9998C6.6665 20.4419 6.8421 20.8658 7.15466 21.1783C7.46722 21.4909 7.89114 21.6665 8.33317 21.6665H18.3332V31.6665C18.3332 32.1085 18.5088 32.5325 18.8213 32.845C19.1339 33.1576 19.5578 33.3332 19.9998 33.3332C20.4419 33.3332 20.8658 33.1576 21.1783 32.845C21.4909 32.5325 21.6665 32.1085 21.6665 31.6665V21.6665H31.6665C32.1085 21.6665 32.5325 21.4909 32.845 21.1783C33.1576 20.8658 33.3332 20.4419 33.3332 19.9998C33.3332 19.5578 33.1576 19.1339 32.845 18.8213C32.5325 18.5088 32.1085 18.3332 31.6665 18.3332Z" fill="#768A9E"></path>
                                                                </svg>
                                                                <p>Добавить основное фото</p>
                                                            </div>
                                                        </label>
                                                    </a>
                                                </div>
                                                <div class="photo-conteiner-add__main-image-info">
                                                    <div class="waring-text">
                                                        <span>Важно:</span>
                                                        <p>на главном фото автосалона должно быть Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="acordeon-conteiner__other-photo-conteiner">
                                                <h4 class="cart-main-info__title-ul">Другие фото (не более 20):</h4>
                                                <div class="photo-conteiner-add__other-photo-conteiner">
                                                    <div class="hoto-conteiner-add__other-box other-box">
                                                        <div class="other-box__close"></div>
                                                        <div class="other-box__image">
                                                            <img src="img/_src/car6.jpg" alt="">
                                                        </div>
                                                    </div>

                                                    <a  class="card-box-user__add-ads card-box-user__add-ads_filedonload" >
                                                        <label class="custom-file-upload">
                                                            <input type="file"  accept="image/heic, image/png, image/jpeg, image/webp" id="addotherimage" >
                                                            <div class="card-box-user__add-ads-conteiner">
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

                                        <div class="acordeon-conteiner__baner-claster">
                                            <h4 class="cart-main-info__title-ul">Ваши баннера размером 1280 х 400:</h4>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="acordeon-conteiner__box acordeon-element">
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
                                                <textarea placeholder="Текст описание">Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Quos aut consectetur, sunt sed. Ducimus laborum iure architecto, nesciunt, tempora porro quidem possimus quaerat repellendus doloribus, illum, nihil. Unde, odio quas.</textarea>
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

                            <div class="acordeon-conteiner__box acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">Ваши услуги</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/04</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>

                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper">
                                        <div class="acordeon-conteiner__services-container services-container services-container_redact">

                                            <div class="acordeon-conteiner__box acordeon-element">
                                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                                    <h4 class="cart-main-info__title">Двигатель</h4>
                                                    <span class="acordeon-conteiner__box__nam-element">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M13.7951 16.6583C13.734 17.0325 13.6369 17.394 13.506 17.7397L14.6801 18.8036C14.5155 19.1501 14.328 19.4831 14.1116 19.7959L12.6041 19.3099C12.3664 19.6005 12.1001 19.8664 11.8095 20.1041L12.2955 21.6116C11.9827 21.828 11.6497 22.0151 11.3033 22.1801L10.2394 21.006C9.89363 21.1369 9.5325 21.234 9.15788 21.2951L8.823 22.8461C8.63363 22.8611 8.4435 22.875 8.25 22.875C8.0565 22.875 7.86638 22.8611 7.67663 22.8461L7.34175 21.2951C6.9675 21.234 6.606 21.1369 6.26025 21.006L5.19637 22.1801C4.84988 22.0155 4.51688 21.828 4.20413 21.6116L4.69012 20.1041C4.3995 19.8664 4.13363 19.6001 3.89587 19.3099L2.38838 19.7959C2.172 19.4831 1.98488 19.1501 1.81988 18.8036L2.994 17.7397C2.86313 17.394 2.766 17.0329 2.70487 16.6583L1.15387 16.3234C1.13887 16.1336 1.125 15.9435 1.125 15.75C1.125 15.5565 1.13887 15.3664 1.15387 15.1766L2.70487 14.8417C2.766 14.4675 2.86313 14.106 2.994 13.7603L1.81988 12.6964C1.9845 12.3499 2.172 12.0169 2.38838 11.7041L3.89587 12.1901C4.13363 11.8995 4.39988 11.6336 4.6905 11.3959L4.2045 9.88837C4.51725 9.672 4.85025 9.48488 5.19675 9.31988L6.26062 10.494C6.60637 10.3631 6.9675 10.266 7.34212 10.2049L7.677 8.65387C7.86637 8.63887 8.0565 8.625 8.25 8.625C8.4435 8.625 8.63362 8.63887 8.82337 8.65387L9.15825 10.2049C9.5325 10.266 9.894 10.3631 10.2397 10.494L11.3036 9.31988C11.6501 9.4845 11.9831 9.672 12.2959 9.88837L11.8099 11.3959C12.1005 11.6336 12.3664 11.8999 12.6041 12.1905L14.1116 11.7045C14.328 12.0173 14.5151 12.3503 14.6801 12.6968L13.506 13.7606C13.6369 14.1064 13.734 14.4675 13.7951 14.8421L15.3461 15.177C15.3611 15.3664 15.375 15.5565 15.375 15.75C15.375 15.9435 15.3611 16.1336 15.3461 16.3234L13.7951 16.6583ZM8.25 12C6.17887 12 4.5 13.6789 4.5 15.75C4.5 17.8211 6.17887 19.5 8.25 19.5C10.3211 19.5 12 17.8211 12 15.75C12 13.6789 10.3211 12 8.25 12Z" fill="#768A9E"/>
																<path d="M18.9971 6.11438C18.9386 6.30825 18.8621 6.49425 18.768 6.66937L19.3601 7.80413C19.1602 8.05688 18.9323 8.28487 18.6795 8.48475L17.5447 7.89263C17.3696 7.98713 17.1836 8.06363 16.9897 8.12175L16.6058 9.34425C16.4475 9.363 16.2877 9.375 16.125 9.375C15.9622 9.375 15.8025 9.363 15.6446 9.34463L15.2606 8.12213C15.0667 8.064 14.8808 7.98712 14.7056 7.893L13.5709 8.48513C13.3181 8.28525 13.0901 8.05725 12.8903 7.8045L13.4824 6.66975C13.3879 6.49462 13.3114 6.30862 13.2532 6.11475L12.0308 5.73075C12.012 5.5725 12 5.41275 12 5.25C12 5.08725 12.012 4.9275 12.0304 4.76962L13.2529 4.38562C13.311 4.19175 13.3879 4.00575 13.482 3.83063L12.8899 2.69588C13.0898 2.44313 13.3177 2.21513 13.5705 2.01525L14.7053 2.60738C14.8804 2.51288 15.0664 2.43638 15.2603 2.37825L15.6442 1.15575C15.8025 1.137 15.9622 1.125 16.125 1.125C16.2877 1.125 16.4475 1.137 16.6054 1.15538L16.9894 2.37788C17.1832 2.436 17.3692 2.51288 17.5444 2.607L18.6791 2.01488C18.9319 2.21475 19.1599 2.44275 19.3597 2.6955L18.7676 3.83025C18.8621 4.00537 18.9386 4.19138 18.9968 4.38525L20.2192 4.76925C20.238 4.9275 20.25 5.08725 20.25 5.25C20.25 5.41275 20.238 5.5725 20.2196 5.73038L18.9971 6.11438ZM16.125 3.75C15.2966 3.75 14.625 4.42162 14.625 5.25C14.625 6.07837 15.2966 6.75 16.125 6.75C16.9534 6.75 17.625 6.07837 17.625 5.25C17.625 4.42162 16.9534 3.75 16.125 3.75Z" fill="#768A9E"/>
																<path d="M22.0271 14.5766C21.9694 14.7847 21.888 14.982 21.7838 15.1661L22.1569 15.9514C21.9874 16.1677 21.7927 16.3624 21.5764 16.5319L20.7911 16.1588C20.6074 16.263 20.4097 16.3444 20.2016 16.4021L19.9099 17.2226C19.7752 17.2391 19.6391 17.25 19.5 17.25C19.3609 17.25 19.2248 17.2391 19.0901 17.2226L18.7984 16.4021C18.5903 16.3444 18.393 16.263 18.2089 16.1588L17.4236 16.5319C17.2073 16.3624 17.0126 16.1677 16.8431 15.9514L17.2162 15.1661C17.112 14.9824 17.0306 14.7848 16.9729 14.577L16.1524 14.2853C16.1359 14.1503 16.125 14.0141 16.125 13.875C16.125 13.7359 16.1359 13.5998 16.1524 13.4651L16.9729 13.1734C17.0306 12.9653 17.112 12.768 17.2162 12.5842L16.8431 11.799C17.0126 11.5826 17.2073 11.388 17.4236 11.2185L18.2089 11.5916C18.3926 11.4874 18.5903 11.406 18.7984 11.3482L19.0901 10.5277C19.2248 10.5109 19.3609 10.5 19.5 10.5C19.6391 10.5 19.7752 10.5109 19.9099 10.5274L20.2016 11.3479C20.4097 11.4056 20.607 11.487 20.7911 11.5912L21.5764 11.2181C21.7927 11.3876 21.9874 11.5822 22.1569 11.7986L21.7838 12.5839C21.888 12.7676 21.9694 12.9653 22.0271 13.1734L22.8476 13.4651C22.8641 13.5998 22.875 13.7359 22.875 13.875C22.875 14.0141 22.8641 14.1502 22.8476 14.2849L22.0271 14.5766ZM19.5 12.75C18.8786 12.75 18.375 13.2536 18.375 13.875C18.375 14.4964 18.8786 15 19.5 15C20.1214 15 20.625 14.4964 20.625 13.875C20.625 13.2536 20.1214 12.75 19.5 12.75Z" fill="#768A9E"/>
																<path d="M22.9472 1.88258L20.7044 1.43408L20.2559 3.67658L20.9912 3.82396L21.1934 2.81446C21.5567 3.57046 21.7487 4.40371 21.7487 5.25008C21.7487 6.54308 21.322 7.75883 20.515 8.76571L21.1004 9.23483C22.0022 8.10946 22.4987 6.69458 22.4987 5.25008C22.4987 4.26796 22.2719 3.29971 21.8402 2.42596L22.8002 2.61796L22.9472 1.88258Z" fill="#768A9E"/>
																<path d="M8.88969 4.98486L8.35944 5.51511L8.86906 6.02474C8.66281 6.01161 8.45619 5.99999 8.24956 5.99999C5.34856 5.99999 2.61781 7.27911 0.757812 9.50961L1.33381 9.98998C3.05094 7.93086 5.57131 6.74999 8.24956 6.74999C8.44044 6.74999 8.63094 6.76086 8.82144 6.77286L8.35944 7.23486L8.88969 7.76511L10.2798 6.37499L8.88969 4.98486Z" fill="#768A9E"/>
																</svg>

															</span>
                                                    <div class="acordeon-conteiner__open-icon">
                                                        <span class="ac-icV1"></span>
                                                        <span class="ac-icV2"></span>
                                                    </div>
                                                </div>

                                                <div class="acordeon-conteiner__claster">
                                                    <div class="acordeon-conteiner__claster-wrapper">
                                                        <div class="box-redactor-text__checbox-advantages checkbox-services-redact">
                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Замена сайлентблоков, втулок и стоек стабилизатора</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="acordeon-conteiner__box acordeon-element">
                                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                                    <h4 class="cart-main-info__title">Ходовая система</h4>
                                                    <span class="acordeon-conteiner__box__nam-element">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M17.9167 7.83332H18.75C19.4393 7.83332 20 7.27262 20 6.58332V3.25C20 2.5607 19.4393 2 18.75 2H17.9167C17.2274 2 16.6667 2.5607 16.6667 3.25V4.11941L13.6324 4.3952C13.4341 3.96648 13.0027 3.66668 12.5 3.66668C11.9973 3.66668 11.566 3.96645 11.3676 4.3952L8.33332 4.11941V3.25C8.33332 2.5607 7.77262 2 7.08332 2H6.25C5.5607 2 5 2.5607 5 3.25V6.58332C5 7.27262 5.5607 7.83332 6.25 7.83332H7.08332C7.77262 7.83332 8.33332 7.27262 8.33332 6.58332V5.71395L11.3676 5.43816C11.4402 5.59504 11.5447 5.73246 11.6722 5.84613L11.9759 10.355C11.7991 10.4032 11.6666 10.5578 11.6666 10.75V13.25C11.6666 13.4351 11.789 13.5866 11.9558 13.641L11.6728 17.32C11.4155 17.5492 11.25 17.8791 11.25 18.25V18.5513L8.33332 18.2861V17.4166C8.33332 16.7273 7.77262 16.1666 7.08332 16.1666H6.25C5.5607 16.1666 5 16.7273 5 17.4166V20.75C5 21.4393 5.5607 22 6.25 22H7.08332C7.77262 22 8.33332 21.4393 8.33332 20.75V19.8806L11.25 19.6154V19.9166C11.25 20.6059 11.8107 21.1666 12.5 21.1666C13.1893 21.1666 13.75 20.6059 13.75 19.9166V19.6154L16.6667 19.8806V20.75C16.6667 21.4393 17.2274 22 17.9167 22H18.75C19.4393 22 20 21.4393 20 20.75V17.4167C20 16.7274 19.4393 16.1667 18.75 16.1667H17.9167C17.2274 16.1667 16.6667 16.7274 16.6667 17.4167V18.2861L13.75 18.5513V18.25C13.75 17.879 13.5844 17.549 13.3269 17.3199L13.0412 13.6416C13.2095 13.588 13.3333 13.4361 13.3333 13.25V10.75C13.3333 10.559 13.2025 10.4049 13.0273 10.3557L13.3279 5.84609C13.4553 5.73242 13.5598 5.59504 13.6324 5.43824L16.6666 5.71402V6.5834C16.6667 7.27262 17.2274 7.83332 17.9167 7.83332Z" fill="#768A9E"/>
																</svg>
															</span>
                                                    <div class="acordeon-conteiner__open-icon">
                                                        <span class="ac-icV1"></span>
                                                        <span class="ac-icV2"></span>
                                                    </div>
                                                </div>

                                                <div class="acordeon-conteiner__claster">
                                                    <div class="acordeon-conteiner__claster-wrapper">
                                                        <div class="box-redactor-text__checbox-advantages checkbox-services-redact">
                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Замена сайлентблоков, втулок и стоек стабилизатора</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="acordeon-conteiner__box acordeon-element">
                                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                                    <h4 class="cart-main-info__title">Электрика</h4>
                                                    <span class="acordeon-conteiner__box__nam-element">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M8.98298 20.7145H14.733C14.8419 20.7145 14.9464 20.6712 15.0234 20.5942C15.1004 20.5172 15.1437 20.4127 15.1437 20.3038C15.1437 20.1949 15.1004 20.0904 15.0234 20.0134C14.9464 19.9363 14.8419 19.8931 14.733 19.8931H8.98298C8.87405 19.8931 8.76958 19.9363 8.69256 20.0134C8.61554 20.0904 8.57227 20.1949 8.57227 20.3038C8.57227 20.4127 8.61554 20.5172 8.69256 20.5942C8.76958 20.6712 8.87405 20.7145 8.98298 20.7145Z" fill="#768A9E"/>
																<path d="M8.57227 17.2842L10.0016 19.0712H13.7144L15.1437 17.2842V16.6069H8.57227V17.2842Z" fill="#768A9E"/>
																<path d="M12.2679 15.7859V13.3216C12.268 13.2405 12.292 13.1613 12.3369 13.0937L13.0893 11.9663V11.2681H10.625V11.9663L11.3774 13.0949C11.4221 13.1621 11.4461 13.241 11.4464 13.3216V15.7859H12.2679Z" fill="#768A9E"/>
																<path d="M13.7397 23.1787H9.97266L10.7941 24.0001H12.9183L13.7397 23.1787Z" fill="#768A9E"/>
																<path d="M15.1437 21.9464C15.1437 21.8374 15.1004 21.733 15.0234 21.6559C14.9464 21.5789 14.8419 21.5356 14.733 21.5356H8.98298C8.87405 21.5356 8.76958 21.5789 8.69256 21.6559C8.61554 21.733 8.57227 21.8374 8.57227 21.9464C8.57227 22.0553 8.61554 22.1598 8.69256 22.2368C8.76958 22.3138 8.87405 22.3571 8.98298 22.3571H14.733C14.8419 22.3571 14.9464 22.3138 15.0234 22.2368C15.1004 22.1598 15.1437 22.0553 15.1437 21.9464Z" fill="#768A9E"/>
																<path d="M17.6074 6.75C17.6074 5.22501 17.0016 3.76247 15.9233 2.68414C14.845 1.6058 13.3824 1 11.8574 1C10.3324 1 8.86989 1.6058 7.79156 2.68414C6.71322 3.76247 6.10742 5.22501 6.10742 6.75C6.10742 7.84209 6.82494 9.05 7.58599 10.3269C8.3684 11.6437 9.17792 13.0048 9.39067 14.4953C9.39292 14.5146 9.39374 14.5341 9.39314 14.5536V15.7857H10.6253V13.4446L9.87285 12.316C9.82821 12.2488 9.80422 12.17 9.80385 12.0893V11.2679H9.39314C9.14944 11.2679 8.91122 11.1956 8.70859 11.0602C8.50597 10.9248 8.34804 10.7324 8.25478 10.5072C8.16153 10.2821 8.13713 10.0343 8.18467 9.79533C8.23221 9.55632 8.34956 9.33678 8.52188 9.16446C8.6942 8.99214 8.91374 8.87479 9.15276 8.82725C9.39177 8.7797 9.63951 8.8041 9.86466 8.89736C10.0898 8.99062 10.2822 9.14855 10.4176 9.35117C10.553 9.5538 10.6253 9.79202 10.6253 10.0357V10.4464H13.0896V10.0357C13.0896 9.79202 13.1618 9.5538 13.2972 9.35117C13.4326 9.14855 13.625 8.99062 13.8502 8.89736C14.0753 8.8041 14.3231 8.7797 14.5621 8.82725C14.8011 8.87479 15.0206 8.99214 15.193 9.16446C15.3653 9.33678 15.4826 9.55632 15.5302 9.79533C15.5777 10.0343 15.5533 10.2821 15.4601 10.5072C15.3668 10.7324 15.2089 10.9248 15.0062 11.0602C14.8036 11.1956 14.5654 11.2679 14.3217 11.2679H13.911V12.0893C13.9109 12.1704 13.8869 12.2497 13.842 12.3172L13.0896 13.4446V15.7857H14.3217V14.5536C14.3216 14.5341 14.323 14.5146 14.3258 14.4953C14.5386 13.0048 15.3481 11.6437 16.1305 10.3269C16.8899 9.05 17.6074 7.84209 17.6074 6.75ZM11.8574 2.64286V1.82143C14.4831 1.82143 16.786 3.93291 16.786 6.33929H15.9646C15.9646 4.2237 13.7964 2.64286 11.8574 2.64286ZM15.9646 7.16071H16.786V7.98214H15.9646V7.16071Z" fill="#768A9E"/>
																<path d="M14.7316 10.0357C14.7316 9.92679 14.6883 9.82232 14.6113 9.7453C14.5343 9.66827 14.4298 9.625 14.3209 9.625C14.2119 9.625 14.1075 9.66827 14.0305 9.7453C13.9534 9.82232 13.9102 9.92679 13.9102 10.0357V10.4464H14.3209C14.4298 10.4464 14.5343 10.4032 14.6113 10.3261C14.6883 10.2491 14.7316 10.1446 14.7316 10.0357Z" fill="#768A9E"/>
																<path d="M8.98242 10.0357C8.98242 10.1446 9.02569 10.2491 9.10272 10.3261C9.17974 10.4032 9.28421 10.4464 9.39314 10.4464H9.80385V10.0357C9.80385 9.92679 9.76058 9.82232 9.68356 9.7453C9.60653 9.66827 9.50206 9.625 9.39314 9.625C9.28421 9.625 9.17974 9.66827 9.10272 9.7453C9.02569 9.82232 8.98242 9.92679 8.98242 10.0357Z" fill="#768A9E"/>
																<path d="M19.25 6.33936H21.7143V7.16078H19.25V6.33936Z" fill="#768A9E"/>
																<path d="M19.002 4.77441L20.6448 3.54227L21.1374 4.19908L19.4946 5.43123L19.002 4.77441Z" fill="#768A9E"/>
																<path d="M19.0039 8.72119L19.4965 8.06438L21.1394 9.29652L20.6468 9.95333L19.0039 8.72119Z" fill="#768A9E"/>
																<path d="M2 6.33936H4.46429V7.16078H2V6.33936Z" fill="#768A9E"/>
																<path d="M2.57422 4.20361L3.06683 3.5468L4.70969 4.77894L4.21708 5.43576L2.57422 4.20361Z" fill="#768A9E"/>
																<path d="M2.57422 9.29639L4.21707 8.06425L4.70968 8.72106L3.06683 9.9532L2.57422 9.29639Z" fill="#768A9E"/>
																</svg>

															</span>
                                                    <div class="acordeon-conteiner__open-icon">
                                                        <span class="ac-icV1"></span>
                                                        <span class="ac-icV2"></span>
                                                    </div>
                                                </div>

                                                <div class="acordeon-conteiner__claster">
                                                    <div class="acordeon-conteiner__claster-wrapper">
                                                        <div class="box-redactor-text__checbox-advantages checkbox-services-redact">
                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Замена сайлентблоков, втулок и стоек стабилизатора</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="acordeon-conteiner__box acordeon-element">
                                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                                    <h4 class="cart-main-info__title">Коробка передач</h4>
                                                    <span class="acordeon-conteiner__box__nam-element">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M13.3672 20.4375H12.5859V15.0261C13.6825 14.7429 14.5475 13.8778 14.8308 12.7812H19.1094C19.5409 12.7812 19.8906 12.4315 19.8906 12V3.5625H20.7109C21.1424 3.5625 21.4922 3.21273 21.4922 2.78125C21.4922 2.34977 21.1424 2 20.7109 2H17.5859C17.1545 2 16.8047 2.34977 16.8047 2.78125C16.8047 3.21273 17.1545 3.5625 17.5859 3.5625H18.3281V11.2188H14.8308C14.5476 10.1222 13.6825 9.25715 12.5859 8.97391V3.5625H13.3672C13.7987 3.5625 14.1484 3.21273 14.1484 2.78125C14.1484 2.34977 13.7987 2 13.3672 2H10.2422C9.8107 2 9.46094 2.34977 9.46094 2.78125C9.46094 3.21273 9.8107 3.5625 10.2422 3.5625H11.0234V8.97391C9.92691 9.25715 9.06184 10.1222 8.77855 11.2188H5.125V3.5625H5.90625C6.33773 3.5625 6.6875 3.21273 6.6875 2.78125C6.6875 2.34977 6.33773 2 5.90625 2H2.78125C2.34977 2 2 2.34977 2 2.78125C2 3.21273 2.34977 3.5625 2.78125 3.5625H3.5625V20.4375H2.78125C2.34977 20.4375 2 20.7873 2 21.2188C2 21.6502 2.34977 22 2.78125 22H5.90625C6.33773 22 6.6875 21.6502 6.6875 21.2188C6.6875 20.7873 6.33773 20.4375 5.90625 20.4375H5.125V12.7812H8.77855C9.0618 13.8778 9.92688 14.7429 11.0234 15.0261V20.4375H10.2422C9.8107 20.4375 9.46094 20.7873 9.46094 21.2188C9.46094 21.6502 9.8107 22 10.2422 22H13.3672C13.7987 22 14.1484 21.6502 14.1484 21.2188C14.1484 20.7873 13.7987 20.4375 13.3672 20.4375ZM10.2422 12C10.2422 11.1384 10.9431 10.4375 11.8047 10.4375C12.6663 10.4375 13.3672 11.1384 13.3672 12C13.3672 12.8616 12.6663 13.5625 11.8047 13.5625C10.9431 13.5625 10.2422 12.8616 10.2422 12ZM20.7375 19.0871C21.3357 18.6704 21.7282 17.978 21.7282 17.1953C21.7282 15.9245 20.6943 14.8906 19.4235 14.8906C18.1087 14.8906 17.0391 15.9603 17.0391 17.2751V21.2188C17.0391 21.6502 17.3888 22 17.8203 22C18.2518 22 18.6016 21.6502 18.6016 21.2188V19.5H19.1951L20.2359 21.5691C20.3688 21.8333 20.6393 22 20.9351 22C21.518 22 21.8964 21.3855 21.6339 20.865L20.7375 19.0871ZM18.6016 17.2751C18.6016 16.8218 18.9703 16.4531 19.4235 16.4531C19.8328 16.4531 20.1657 16.7861 20.1657 17.1953C20.1657 17.6046 19.8328 17.9375 19.4235 17.9375H18.6016V17.2751Z" fill="#768A9E"/>
																</svg>

															</span>
                                                    <div class="acordeon-conteiner__open-icon">
                                                        <span class="ac-icV1"></span>
                                                        <span class="ac-icV2"></span>
                                                    </div>
                                                </div>

                                                <div class="acordeon-conteiner__claster">
                                                    <div class="acordeon-conteiner__claster-wrapper">
                                                        <div class="box-redactor-text__checbox-advantages checkbox-services-redact">
                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Замена сайлентблоков, втулок и стоек стабилизатора</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="acordeon-conteiner__box acordeon-element">
                                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                                    <h4 class="cart-main-info__title">Система выхлопа</h4>
                                                    <span class="acordeon-conteiner__box__nam-element">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M21.9376 14.0169C21.8531 13.8146 21.7471 13.6237 21.623 13.4462C22.2063 13.0705 22.5938 12.4159 22.5938 11.672C22.5938 10.5089 21.6475 9.56259 20.4844 9.56259C19.3213 9.56259 18.375 10.5089 18.375 11.672C18.375 11.8607 18.4003 12.0435 18.447 12.2177C17.4805 12.4383 16.6875 13.119 16.3124 14.0169C15.3479 14.0382 14.541 14.7095 14.314 15.6095H13.4076L13.0506 15.0741C13.6758 14.4392 14.0625 13.5689 14.0625 12.6095V11.5831C14.0625 9.64462 12.4854 8.06752 10.5469 8.06752H7.68478L3.55144 5.48438H0V16.1251H3.09534C3.06356 15.9109 3.04688 15.6918 3.04688 15.4688C3.04688 13.0134 5.04455 11.0157 7.5 11.0157C9.95545 11.0157 11.9531 13.0134 11.9531 15.4688C11.9531 15.5749 11.9485 15.6798 11.9411 15.784L11.9062 15.8438L12.6549 17.0157H14.4479C14.7843 17.7349 15.5144 18.2345 16.3594 18.2345C16.8248 18.2345 17.2553 18.0826 17.6046 17.8263C18.0524 18.0853 18.5715 18.2345 19.125 18.2345C19.6785 18.2345 20.1976 18.0854 20.6454 17.8263C20.9947 18.0826 21.4252 18.2345 21.8906 18.2345C23.0537 18.2345 24 17.2882 24 16.1251C24 14.9777 23.079 14.0421 21.9376 14.0169Z" fill="#768A9E"/>
																<path d="M7.5 12.4219C5.81995 12.4219 4.45312 13.7887 4.45312 15.4688C4.45312 17.1488 5.81995 18.5156 7.5 18.5156C9.18005 18.5156 10.5469 17.1488 10.5469 15.4688C10.5469 13.7887 9.18005 12.4219 7.5 12.4219Z" fill="#768A9E"/>
																</svg>

															</span>
                                                    <div class="acordeon-conteiner__open-icon">
                                                        <span class="ac-icV1"></span>
                                                        <span class="ac-icV2"></span>
                                                    </div>
                                                </div>

                                                <div class="acordeon-conteiner__claster">
                                                    <div class="acordeon-conteiner__claster-wrapper">
                                                        <div class="box-redactor-text__checbox-advantages checkbox-services-redact">
                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Замена сайлентблоков, втулок и стоек стабилизатора</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="acordeon-conteiner__box acordeon-element">
                                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                                    <h4 class="cart-main-info__title">Кондиционирование и печка</h4>
                                                    <span class="acordeon-conteiner__box__nam-element">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<g clip-path="url(#clip0)">
																<path d="M18.923 10.269H5.07686L4.24609 13.9613H19.7537L18.923 10.269Z" fill="#768A9E"/>
																<path d="M21.9231 3.11523H2.07694C0.931687 3.11523 0 4.04692 0 5.19212V11.8844C0 13.0296 0.931687 13.9614 2.07694 13.9614H2.82694L3.84769 9.4248C3.91875 9.10886 4.1993 8.88442 4.52311 8.88442H19.4769C19.8008 8.88442 20.0813 9.10886 20.1524 9.4248L21.1731 13.9614H21.9231C23.0683 13.9614 24 13.0297 24 11.8844V5.19212C24 4.04692 23.0683 3.11523 21.9231 3.11523ZM15.6923 7.96136H14.7692C14.3869 7.96136 14.0769 7.65137 14.0769 7.26906C14.0769 6.88675 14.3869 6.57677 14.7692 6.57677H15.6923C16.0747 6.57677 16.3846 6.88675 16.3846 7.26906C16.3846 7.65137 16.0747 7.96136 15.6923 7.96136ZM18.9231 7.96136H18C17.6176 7.96136 17.3077 7.65137 17.3077 7.26906C17.3077 6.88675 17.6177 6.57677 18 6.57677H18.9231C19.3054 6.57677 19.6154 6.88675 19.6154 7.26906C19.6154 7.65137 19.3054 7.96136 18.9231 7.96136Z" fill="#768A9E"/>
																<path d="M12.4608 17.1154C12.4608 16.9226 12.4967 16.8626 12.5929 16.7024C12.7241 16.4838 12.9223 16.1534 12.9223 15.5771C12.9223 15.1947 12.6123 14.8848 12.23 14.8848C11.8477 14.8848 11.5377 15.1948 11.5377 15.5771C11.5377 15.7699 11.5018 15.8298 11.4056 15.99C11.2744 16.2086 11.0762 16.539 11.0762 17.1154C11.0762 17.6917 11.2744 18.0222 11.4056 18.2408C11.5017 18.4011 11.5377 18.461 11.5377 18.6539C11.5377 18.8467 11.5018 18.9068 11.4056 19.067C11.2744 19.2856 11.0762 19.616 11.0762 20.1924C11.0762 20.5748 11.3862 20.8847 11.7685 20.8847C12.1508 20.8847 12.4608 20.5747 12.4608 20.1924C12.4608 19.9995 12.4967 19.9395 12.5929 19.7794C12.7241 19.5607 12.9223 19.2303 12.9223 18.6539C12.9223 18.0775 12.7241 17.7471 12.5929 17.5284C12.4968 17.3682 12.4608 17.3083 12.4608 17.1154Z" fill="#768A9E"/>
																<path d="M8.76936 17.1154C8.76936 16.9226 8.80531 16.8626 8.90145 16.7024C9.03266 16.4838 9.23089 16.1534 9.23089 15.5771C9.23089 15.1947 8.92091 14.8848 8.53859 14.8848C8.15628 14.8848 7.8463 15.1948 7.8463 15.5771C7.8463 15.7699 7.81034 15.8298 7.7142 15.99C7.583 16.2086 7.38477 16.539 7.38477 17.1154C7.38477 17.6917 7.583 18.0222 7.71416 18.2408C7.8103 18.4011 7.8463 18.461 7.8463 18.6539C7.8463 18.8467 7.81034 18.9068 7.71416 19.067C7.583 19.2856 7.38477 19.616 7.38477 20.1924C7.38477 20.5748 7.69475 20.8847 8.07706 20.8847C8.45937 20.8847 8.76936 20.5747 8.76936 20.1924C8.76936 19.9995 8.80531 19.9395 8.9015 19.7794C9.03266 19.5607 9.23089 19.2303 9.23089 18.6539C9.23089 18.0775 9.03266 17.7471 8.9015 17.5284C8.80536 17.3682 8.76936 17.3083 8.76936 17.1154Z" fill="#768A9E"/>
																<path d="M16.1541 17.1154C16.1541 16.9226 16.1901 16.8626 16.2862 16.7024C16.4174 16.4838 16.6157 16.1534 16.6157 15.5771C16.6157 15.1947 16.3057 14.8848 15.9234 14.8848C15.541 14.8848 15.2311 15.1948 15.2311 15.5771C15.2311 15.7699 15.1951 15.8298 15.099 15.99C14.9678 16.2086 14.7695 16.539 14.7695 17.1154C14.7695 17.6917 14.9678 18.0222 15.0989 18.2408C15.1951 18.4011 15.2311 18.461 15.2311 18.6539C15.2311 18.8467 15.1951 18.9068 15.0989 19.067C14.9678 19.2856 14.7695 19.616 14.7695 20.1924C14.7695 20.5748 15.0795 20.8847 15.4618 20.8847C15.8441 20.8847 16.1541 20.5747 16.1541 20.1924C16.1541 19.9995 16.1901 19.9395 16.2863 19.7794C16.4174 19.5607 16.6157 19.2303 16.6157 18.6539C16.6157 18.0775 16.4174 17.7471 16.2863 17.5284C16.1901 17.3682 16.1541 17.3083 16.1541 17.1154Z" fill="#768A9E"/>
																</g>
																<defs>
																<clipPath id="clip0">
																<rect width="24" height="24" fill="white"/>
																</clipPath>
																</defs>
																</svg>
															</span>
                                                    <div class="acordeon-conteiner__open-icon">
                                                        <span class="ac-icV1"></span>
                                                        <span class="ac-icV2"></span>
                                                    </div>
                                                </div>

                                                <div class="acordeon-conteiner__claster">
                                                    <div class="acordeon-conteiner__claster-wrapper">
                                                        <div class="box-redactor-text__checbox-advantages checkbox-services-redact">
                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Замена сайлентблоков, втулок и стоек стабилизатора</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="acordeon-conteiner__box acordeon-element">
                                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                                    <h4 class="cart-main-info__title">Тормозная система</h4>
                                                    <span class="acordeon-conteiner__box__nam-element">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M22.9952 10.6864C22.3708 5.72764 18.2711 1.61764 13.3122 1.00465C12.9338 0.957852 12.6016 1.27105 12.6016 1.65231V4.97882C15.9918 5.28829 18.7117 8.00821 19.0211 11.3984H22.3477C22.7296 11.3984 23.0429 11.0653 22.9952 10.6864Z" fill="#768A9E"/>
																<path d="M11.3125 8.82031C9.18 8.82031 7.44531 10.555 7.44531 12.6875C7.44531 14.82 9.18 16.5547 11.3125 16.5547C13.445 16.5547 15.1797 14.82 15.1797 12.6875C15.1797 10.555 13.445 8.82031 11.3125 8.82031ZM11.3125 15.2656C9.89062 15.2656 8.73438 14.1094 8.73438 12.6875C8.73438 11.2656 9.89062 10.1094 11.3125 10.1094C12.7344 10.1094 13.8906 11.2656 13.8906 12.6875C13.8906 14.1094 12.7344 15.2656 11.3125 15.2656Z" fill="#768A9E"/>
																<path d="M11.3125 11.3984C10.6019 11.3984 10.0234 11.9769 10.0234 12.6875C10.0234 13.3981 10.6019 13.9766 11.3125 13.9766C12.0231 13.9766 12.6016 13.3981 12.6016 12.6875C12.6016 11.9769 12.0231 11.3984 11.3125 11.3984Z" fill="#768A9E"/>
																<path d="M18.4023 12.6875C18.0461 12.6875 17.7578 12.3992 17.7578 12.043C17.7578 8.84425 15.1558 6.24219 11.957 6.24219C11.6008 6.24219 11.3125 5.95391 11.3125 5.59766V2.375C5.61708 2.375 1 6.99208 1 12.6875C1 18.3829 5.61708 23 11.3125 23C17.0079 23 21.625 18.3829 21.625 12.6875H18.4023ZM5.84352 7.21844C6.09523 6.96673 6.50331 6.96673 6.75502 7.21844C7.00673 7.47015 7.00673 7.87822 6.75502 8.13002C6.50331 8.38173 6.09523 8.38173 5.84352 8.13002C5.59173 7.87822 5.59173 7.47011 5.84352 7.21844ZM4.22266 13.332C3.8667 13.332 3.57812 13.0435 3.57812 12.6875C3.57812 12.3315 3.8667 12.043 4.22266 12.043C4.57861 12.043 4.86719 12.3315 4.86719 12.6875C4.86719 13.0435 4.57861 13.332 4.22266 13.332ZM6.75498 18.1565C6.50327 18.4082 6.09519 18.4082 5.84348 18.1565C5.59173 17.9048 5.59173 17.4967 5.84348 17.245C6.09519 16.9933 6.50327 16.9933 6.75498 17.245C7.00669 17.4967 7.00669 17.9048 6.75498 18.1565ZM11.3125 20.4219C10.9565 20.4219 10.668 20.1333 10.668 19.7773C10.668 19.4213 10.9565 19.1328 11.3125 19.1328C11.6685 19.1328 11.957 19.4213 11.957 19.7773C11.957 20.1333 11.6685 20.4219 11.3125 20.4219ZM11.3125 17.8438C8.46939 17.8438 6.15625 15.5306 6.15625 12.6875C6.15625 9.84439 8.46939 7.53125 11.3125 7.53125C14.1556 7.53125 16.4688 9.84439 16.4688 12.6875C16.4688 15.5306 14.1556 17.8438 11.3125 17.8438ZM16.7815 18.1565C16.5298 18.4082 16.1217 18.4082 15.87 18.1565C15.6183 17.9048 15.6183 17.4967 15.87 17.245C16.1217 16.9933 16.5298 16.9933 16.7815 17.245C17.0333 17.4967 17.0333 17.9048 16.7815 18.1565Z" fill="#768A9E"/>
																</svg>
															</span>
                                                    <div class="acordeon-conteiner__open-icon">
                                                        <span class="ac-icV1"></span>
                                                        <span class="ac-icV2"></span>
                                                    </div>
                                                </div>

                                                <div class="acordeon-conteiner__claster">
                                                    <div class="acordeon-conteiner__claster-wrapper">
                                                        <div class="box-redactor-text__checbox-advantages checkbox-services-redact">
                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Замена сайлентблоков, втулок и стоек стабилизатора</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="acordeon-conteiner__box acordeon-element">
                                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                                    <h4 class="cart-main-info__title">Топливная система</h4>
                                                    <span class="acordeon-conteiner__box__nam-element">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M19.4688 9.70117C19.4688 9.53699 19.4061 9.37899 19.2936 9.25941L14.1373 3.78089C14.0155 3.65152 13.8457 3.57812 13.668 3.57812H7.22266C7.03858 3.57812 6.86327 3.65684 6.74093 3.79443L4.16281 6.69482C4.05796 6.81281 4 6.96518 4 7.12305V18.4883C4 18.983 4.18679 19.435 4.49354 19.7773C4.18679 20.1197 4 20.5717 4 21.0664C4 22.1326 4.86741 23 5.93359 23H17.5352C18.6013 23 19.4688 22.1326 19.4688 21.0664C19.4688 20.5717 19.282 20.1197 18.9752 19.7773C19.282 19.435 19.4688 18.983 19.4688 18.4883V9.70117ZM11.7344 19.1326C10.6682 19.1326 9.80078 18.2652 9.80078 17.199C9.80078 16.9336 9.87662 16.4499 10.5323 15.3196C10.8635 14.7486 11.1903 14.2745 11.2041 14.2546C11.3244 14.0804 11.5226 13.9764 11.7344 13.9764C11.9461 13.9764 12.1443 14.0804 12.2647 14.2546C12.2784 14.2745 12.6052 14.7486 12.9364 15.3196C13.5921 16.45 13.668 16.9336 13.668 17.199C13.668 18.2652 12.8006 19.1326 11.7344 19.1326ZM16.4857 11.5286C16.2365 11.7634 15.9192 11.8792 15.602 11.8792C15.259 11.8792 14.9172 11.7432 14.6636 11.4738L11.7034 8.32858C11.2149 7.80995 11.2401 6.99418 11.7581 6.5064C12.2774 6.01858 13.0937 6.04316 13.5803 6.56114L16.5405 9.70637C17.0289 10.225 17.0037 11.0408 16.4857 11.5286Z" fill="#768A9E"/>
																<path d="M11.0898 17.1997C11.0898 17.5544 11.379 17.8435 11.7344 17.8435C12.0896 17.8435 12.3786 17.5546 12.3789 17.1995C12.3734 17.0018 12.1055 16.4403 11.7345 15.8154C11.3632 16.441 11.0951 17.0027 11.0898 17.1997Z" fill="#768A9E"/>
																<path d="M11.0898 1H7.22266C6.8667 1 6.57812 1.28858 6.57812 1.64453V2.28906H11.7344V1.64453C11.7344 1.28858 11.4458 1 11.0898 1Z" fill="#768A9E"/>
																</svg>
															</span>
                                                    <div class="acordeon-conteiner__open-icon">
                                                        <span class="ac-icV1"></span>
                                                        <span class="ac-icV2"></span>
                                                    </div>
                                                </div>

                                                <div class="acordeon-conteiner__claster">
                                                    <div class="acordeon-conteiner__claster-wrapper">
                                                        <div class="box-redactor-text__checbox-advantages checkbox-services-redact">
                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Замена сайлентблоков, втулок и стоек стабилизатора</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="acordeon-conteiner__box acordeon-element">
                                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                                    <h4 class="cart-main-info__title">Кузовные работы</h4>
                                                    <span class="acordeon-conteiner__box__nam-element">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M5.31959 18.8237C6.58879 18.8237 7.61769 17.7949 7.61769 16.5256C7.61769 15.2564 6.58879 14.2275 5.31959 14.2275C4.05038 14.2275 3.02148 15.2564 3.02148 16.5256C3.02148 17.7949 4.05038 18.8237 5.31959 18.8237Z" fill="#768A9E"/>
																<path d="M18.7687 13.0741C18.8958 12.7281 18.9609 12.3624 18.9609 11.9937C18.9603 10.2632 17.557 8.86079 15.8264 8.86133C15.4585 8.86146 15.0935 8.92636 14.748 9.05313V14.934C16.3719 15.5306 18.172 14.698 18.7687 13.0741Z" fill="#768A9E"/>
																<path d="M9.20896 6.05487L6.30409 9.86906C6.23216 9.96285 6.13146 10.0304 6.01743 10.0615L1.1571 11.3888C0.476715 11.575 0.00368715 12.1916 0 12.8969V14.6709C0.00703911 15.534 0.711285 16.2285 1.57435 16.2236H1.96143C2.12179 14.3693 3.75506 12.996 5.60936 13.1565C7.24123 13.2976 8.53535 14.5917 8.67647 16.2236H13.676V5.16211H11.0103C10.3039 5.16439 9.63855 5.49415 9.20896 6.05487Z" fill="#768A9E"/>
																<path d="M22.5844 11.0668C22.3508 11.0448 22.1579 10.8751 22.1061 10.6463C21.9407 9.88176 21.6343 9.15472 21.2026 8.50236C21.0713 8.3052 21.085 8.04522 21.2362 7.86281L22.1358 6.77577L21.0415 5.66761L19.9592 6.56419C19.7792 6.71362 19.5231 6.72911 19.3264 6.60247C18.6701 6.17302 17.9414 5.86585 17.1757 5.6959C16.9479 5.64777 16.7777 5.45745 16.7551 5.22576L16.6196 3.82129H14.7481V7.92991C16.9927 7.33421 19.2952 8.67076 19.8909 10.9154C20.4866 13.1599 19.15 15.4624 16.9054 16.0581C16.1986 16.2458 15.455 16.2458 14.748 16.0581V20.1788H16.6195L16.7553 18.7681C16.7777 18.5356 16.9476 18.344 17.1759 18.2943C17.9405 18.1288 18.6677 17.8224 19.3201 17.3907C19.5173 17.2594 19.7773 17.2731 19.9597 17.4243L21.0446 18.3226L22.1574 17.2097L21.2591 16.1249C21.1101 15.9446 21.0952 15.6886 21.2221 15.4921C21.6525 14.8359 21.9606 14.1073 22.1315 13.3414C22.1819 13.1131 22.3737 12.9433 22.6064 12.9209L23.9995 12.7854V11.2026L22.5844 11.0668Z" fill="#768A9E"/>
																</svg>
															</span>
                                                    <div class="acordeon-conteiner__open-icon">
                                                        <span class="ac-icV1"></span>
                                                        <span class="ac-icV2"></span>
                                                    </div>
                                                </div>

                                                <div class="acordeon-conteiner__claster">
                                                    <div class="acordeon-conteiner__claster-wrapper">
                                                        <div class="box-redactor-text__checbox-advantages checkbox-services-redact">
                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Замена сайлентблоков, втулок и стоек стабилизатора</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="acordeon-conteiner__box acordeon-element">
                                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                                    <h4 class="cart-main-info__title">Автомойки</h4>
                                                    <span class="acordeon-conteiner__box__nam-element">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<g clip-path="url(#clip0)">
																<path d="M9.48508 14.0581L7.50265 16.6615C7.45081 16.7295 7.37804 16.7785 7.29559 16.801L3.97932 17.7069C3.52541 17.8316 3.2103 18.2437 3.20898 18.7145V19.9254C3.20898 20.5013 3.67985 20.9879 4.2558 20.9879H4.49901C4.62139 19.7107 5.75595 18.7745 7.03315 18.8969C8.14103 19.0031 9.01796 19.8801 9.12411 20.9879H16.203C16.3254 19.7107 17.46 18.7745 18.7372 18.8969C19.8451 19.0031 20.722 19.8801 20.8281 20.9879H21.3102C21.8862 20.9879 22.3507 20.5013 22.3507 19.9254V18.5432C22.351 18.1341 22.1125 17.7625 21.7404 17.5923L19.9552 16.7798C19.8857 16.7481 19.8271 16.6967 19.7866 16.632L18.2462 14.1723C17.9691 13.7266 17.481 13.4562 16.9562 13.4575H10.6962C10.2212 13.4591 9.77381 13.6809 9.48508 14.0581Z" fill="#768A9E"/>
																<path d="M5.26562 21.1912C5.26567 22.0451 5.95788 22.7373 6.81178 22.7372C7.66567 22.7372 8.35788 22.045 8.35783 21.1911C8.35779 20.3372 7.66558 19.645 6.81168 19.645C5.95818 19.646 5.2665 20.3377 5.26562 21.1912Z" fill="#768A9E"/>
																<path d="M16.9688 21.1912C16.9688 22.0451 17.661 22.7373 18.5149 22.7372C19.3688 22.7372 20.061 22.045 20.061 21.1911C20.0609 20.3372 19.3687 19.645 18.5149 19.645C17.6613 19.646 16.9697 20.3377 16.9688 21.1912Z" fill="#768A9E"/>
																<path d="M23.219 23.2227H1.16795V3.34382C1.16795 1.91874 2.33292 0.77733 3.75801 0.77733H10.4408C11.7257 0.775192 12.8159 1.71979 12.9967 2.99184C11.403 3.19725 10.2085 4.55218 10.2044 6.15906V6.50109C10.2064 6.71859 10.3812 6.895 10.5987 6.89879H16.2292C16.4455 6.89446 16.6183 6.71743 16.6173 6.50109V6.15906C16.6147 4.53498 15.3955 3.17058 13.7819 2.98596C13.5921 1.28449 12.1528 -0.00184417 10.4408 1.98468e-06H3.75801C1.90428 1.98468e-06 0.390625 1.49014 0.390625 3.34382V23.6293C0.390625 23.8439 0.570382 24 0.784876 24H23.219C23.4337 24 23.6077 23.826 23.6077 23.6113C23.6077 23.3967 23.4337 23.2227 23.219 23.2227Z" fill="#768A9E"/>
																<path d="M13.4101 9.15248C13.6248 9.15248 13.7988 8.97845 13.7988 8.76381V7.92187C13.7988 7.70723 13.6248 7.5332 13.4101 7.5332C13.1955 7.5332 13.0215 7.70723 13.0215 7.92187V8.76381C13.0215 8.97845 13.1955 9.15248 13.4101 9.15248Z" fill="#768A9E"/>
																<path d="M15.791 9.15248C16.0056 9.15248 16.1797 8.97845 16.1797 8.76381V7.92187C16.1797 7.70723 16.0056 7.5332 15.791 7.5332C15.5764 7.5332 15.4023 7.70723 15.4023 7.92187V8.76381C15.4023 8.97845 15.5763 9.15248 15.791 9.15248Z" fill="#768A9E"/>
																<path d="M11.0312 9.15248C11.2459 9.15248 11.4199 8.97845 11.4199 8.76381V7.92187C11.4199 7.70723 11.2459 7.5332 11.0312 7.5332C10.8166 7.5332 10.6426 7.70723 10.6426 7.92187V8.76381C10.6426 8.97845 10.8166 9.15248 11.0312 9.15248Z" fill="#768A9E"/>
																<path d="M13.0215 11.1319C13.0215 11.3466 13.1955 11.5206 13.4101 11.5206C13.6248 11.5206 13.7988 11.3466 13.7988 11.1319V10.29C13.7988 10.0754 13.6248 9.90137 13.4101 9.90137C13.1955 9.90137 13.0215 10.0754 13.0215 10.29V11.1319Z" fill="#768A9E"/>
																<path d="M15.4023 11.1319C15.4023 11.3466 15.5764 11.5206 15.791 11.5206C16.0056 11.5206 16.1797 11.3466 16.1797 11.1319V10.29C16.1797 10.0754 16.0056 9.90137 15.791 9.90137C15.5764 9.90137 15.4023 10.0754 15.4023 10.29V11.1319Z" fill="#768A9E"/>
																<path d="M10.6426 11.1319C10.6426 11.3466 10.8166 11.5206 11.0312 11.5206C11.2459 11.5206 11.4199 11.3466 11.4199 11.1319V10.29C11.4199 10.0754 11.2459 9.90137 11.0312 9.90137C10.8166 9.90137 10.6426 10.0754 10.6426 10.29V11.1319Z" fill="#768A9E"/>
																</g>
																<defs>
																<clipPath id="clip0">
																<rect width="24" height="24" fill="white"/>
																</clipPath>
																</defs>
																</svg>

															</span>
                                                    <div class="acordeon-conteiner__open-icon">
                                                        <span class="ac-icV1"></span>
                                                        <span class="ac-icV2"></span>
                                                    </div>
                                                </div>

                                                <div class="acordeon-conteiner__claster">
                                                    <div class="acordeon-conteiner__claster-wrapper">
                                                        <div class="box-redactor-text__checbox-advantages checkbox-services-redact">
                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Замена сайлентблоков, втулок и стоек стабилизатора</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="acordeon-conteiner__box acordeon-element">
                                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                                    <h4 class="cart-main-info__title">Другие услуги</h4>
                                                    <span class="acordeon-conteiner__box__nam-element">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M9.85518 7.91642C9.85518 7.08154 9.17843 6.40479 8.34361 6.40479C7.50879 6.40479 6.83203 7.08154 6.83203 7.91636C6.83203 8.75118 7.50879 9.42794 8.34361 9.42794C9.17803 9.42704 9.85423 8.75084 9.85518 7.91642Z" fill="#768A9E"/>
																<path d="M23.4348 4.32149L21.645 3.50084C21.5651 3.46638 21.4972 3.40888 21.4501 3.33564L19.8885 0.85367C19.6151 0.423839 19.1373 0.167694 18.628 0.178036H12.282C11.8206 0.170785 11.3823 0.379321 11.0968 0.74187L9.08557 3.35818C9.0243 3.43693 8.93903 3.49359 8.84263 3.5195L5.47419 4.43784C5.03525 4.55616 4.72784 4.95098 4.7207 5.40548V6.63309C4.7207 7.18619 5.20017 7.65385 5.75321 7.65385H5.94994C6.07956 6.54411 6.95473 5.66894 8.06447 5.53932C9.38673 5.38491 10.5838 6.33159 10.7382 7.65385H17.8144C17.944 6.54411 18.8192 5.66894 19.9289 5.53932C21.2512 5.38491 22.4483 6.33159 22.6027 7.65385H23.0415C23.5946 7.65385 24.0004 7.18619 24.0004 6.63309V5.23197C24.0089 4.84322 23.7871 4.48613 23.4348 4.32149Z" fill="#768A9E"/>
																<path d="M20.2088 9.42794C21.0433 9.42698 21.7195 8.75084 21.7204 7.91642V7.91636C21.7204 7.08154 21.0437 6.40479 20.2088 6.40479C19.374 6.40479 18.6973 7.08154 18.6973 7.91636C18.6973 8.75118 19.374 9.42794 20.2088 9.42794Z" fill="#768A9E"/>
																<path d="M23.1498 11.3653C22.8031 11.0268 22.3369 10.8388 21.8523 10.8421C21.3668 10.8418 20.9016 11.0372 20.562 11.3842C19.2478 12.7198 16.9814 15.0075 16.4667 15.5268L12.3289 16.1302L11.5597 15.1072L14.6553 14.1567C15.606 13.8663 16.1413 12.8602 15.8509 11.9095C15.5867 11.0448 14.7221 10.5102 13.8305 10.6605L7.46541 11.6681C7.03508 11.7316 6.6306 11.9127 6.2966 12.1914L0 18.3091L4.63815 23.822L7.76293 20.3647L16.4759 20.069C17.0286 20.048 17.5529 19.8194 17.9445 19.4288L23.2281 13.9292L23.2338 13.9231C23.9005 13.2117 23.8815 12.0994 23.191 11.411L23.1498 11.3653Z" fill="#768A9E"/>
																</svg>

															</span>
                                                    <div class="acordeon-conteiner__open-icon">
                                                        <span class="ac-icV1"></span>
                                                        <span class="ac-icV2"></span>
                                                    </div>
                                                </div>

                                                <div class="acordeon-conteiner__claster">
                                                    <div class="acordeon-conteiner__claster-wrapper">
                                                        <div class="box-redactor-text__checbox-advantages checkbox-services-redact">
                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Услуга по ремонту</span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <label class="custom-checkbox">
                                                                    <input type="checkbox" name="carbody" value="WhatsApp">
                                                                    <span>Замена сайлентблоков, втулок и стоек стабилизатора</span>
                                                                </label>
                                                            </div>
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
                                    <h4 class="cart-main-info__title">Бренды, с которыми работает Ваше СТО</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/05</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>

                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper">
                                        <div class="brend-conteiner__claster acordeon-conteiner__brends acordeon-conteiner__brends_redact brands-redact">
                                            <div class="checkbox brands-redact__all-brands">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Viber">
                                                    <span>Все бренды</span>
                                                </label>
                                            </div>
                                            <div class="brands_redact__list-brands">
                                                <div class="checkbox">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" name="carbody" value="Audi">
                                                        <span>Audi</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" name="carbody" value="BMW">
                                                        <span>BMW</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" name="carbody" value="Ford">
                                                        <span>Ford</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" name="carbody" value="Porshe">
                                                        <span>Porshe</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" name="carbody" value="Lada">
                                                        <span>Lada</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" name="carbody" value="Tesla">
                                                        <span>Tesla</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" name="carbody" value="Woltswagen">
                                                        <span>Woltswagen</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" name="carbody" value="Rover">
                                                        <span>Rover</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" name="carbody" value="Toyota">
                                                        <span>Toyota</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" name="carbody" value="Bently">
                                                        <span>Bently</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" name="carbody" value="Aplha Romeo">
                                                        <span>Aplha Romeo</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label class="custom-checkbox">
                                                        <input type="checkbox" name="carbody" value="Viber">
                                                        <span>Viber</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="acordeon-conteiner__box acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">СТО на карте</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/06</span>
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
                                                    <h5>Улица:</h5>
                                                    <div class="filtr-element__select">
                                                        <select name="" id="" class="full-select">
                                                            <option value="">Улица</option>
                                                            <option value="">Щевченка</option>
                                                            <option value="">Щевченка</option>
                                                            <option value="">Щевченка</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="catalog__filtr__filtr-element add-more-location__small-select">
                                                    <h5>Дом:</h5>
                                                    <div class="filtr-element__select">
                                                        <select name="" id="" class="full-select">
                                                            <option value="">Дом</option>
                                                            <option value="">21</option>
                                                            <option value="">22</option>
                                                            <option value="">23</option>
                                                        </select>
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
