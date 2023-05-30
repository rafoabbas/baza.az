@extends('front.layouts.app')

@section('content')
    <section class="cart-main-info section-user-account add-car-sec-nev-desine">
        <div class="general-conteiner">
            <h2 class="cart-main-info__title">Добавить авто в продажу</h2>
            <div class="catalog_bread-crumbs">
                <a href="">Главная</a>
                <a href="">/  Личный кабинет</a>
                <p>/ Добавить авто</p>
            </div>
            <div class="cart-main-info__conteiner">
                <div class="cart-main-info__body-info">
                    <div class="acordeon-conteiner__box" data-add-staps="main-parametrs">
                        <div class="acordeon-conteiner__box-title">
                            <h4 class="cart-main-info__title">Основные параметры</h4>
                            <span class="acordeon-conteiner__box__nam-element">/01</span>
                        </div>
                        <div class="acordeon-conteiner__claster">
                            <div class="acordeon-conteiner__claster-wrapper">
                                <div class="aside-search__col add-car-filtr-col">
                                    <div class="main-search__select-element">
                                        <h6 class="title-filtr">Марка авто*:</h6>
                                        <div class="main-search__list-car-search list-car-search">
                                            <div class="list-car-search__search-line">
                                                <input type="text" placeholder="Марка авто">
                                                <span class="list-car-search__icon"></span>
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
                                        <h6 class="title-filtr">Модель*:</h6>
                                        <div class="main-search__list-car-search list-car-search">
                                            <div class="list-car-search__search-line">
                                                <input type="text" placeholder="Модель авто">
                                                <span class="list-car-search__icon"></span>
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
                                        <h6 class="title-filtr">Тип кузова*:</h6>
                                        <select name="" id="" class="select-type1">
                                            <option value="">Трак</option>
                                            <option value="">Лифтбэк</option>
                                        </select>
                                    </div>
                                    <div class="main-search__select-element">
                                        <h6 class="title-filtr">Год выпуска*:</h6>
                                        <select name="" id="" class="select-type1">
                                            <option value="">2011</option>
                                            <option value="">2011</option>
                                            <option value="">2011</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="aside-search__col add-car-filtr-col">
                                    <div class="main-search__select-element">
                                        <h6 class="title-filtr">Коробка передач*:</h6>
                                        <select name="" id="" class="select-type1">
                                            <option value="">Автомат</option>
                                            <option value="">Автомат</option>
                                        </select>
                                    </div>
                                    <div class="main-search__select-element">
                                        <h6 class="title-filtr">Тип топлива*:</h6>
                                        <select name="" id="" class="select-type1">
                                            <option value="">Газ</option>
                                            <option value="">Дизель</option>
                                        </select>
                                    </div>
                                    <div class="main-search__select-element">
                                        <h6 class="title-filtr">Пробег,км*:</h6>
                                        <div class="main-search__input-conteiner">
                                            <input type="text" class="input-only-namber" placeholder="100 000">
                                        </div>
                                    </div>
                                    <div class="catalog__filtr__filtr-element filtr-element__two-segment">
                                        <div class="filtr-element__segment">
                                            <h6 class="title-filtr">Двигатель, л:</h6>
                                            <div class="main-search__input-conteiner">
                                                <input type="text" class="input-only-namber" placeholder="100 000">
                                            </div>
                                        </div>
                                        <div class="filtr-element__segment">
                                            <h6 class="title-filtr">Мощность:</h6>
                                            <div class="main-search__input-conteiner">
                                                <input type="text" class="input-only-namber" placeholder="100 000">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="aside-search__col add-car-filtr-col">
                                    <div class="acordeon__color">
                                        <div class="catalog__filtr__filtr-element">
                                            <h6 class="title-filtr">Цвет:</h6>
                                            <div class="filtr-element__select">
                                                <select name="" id="" class="full-select">
                                                    <option value="">Цвет</option>
                                                    <option value="">Белый</option>
                                                    <option value="">Чорный</option>
                                                    <option value="">Красный</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="acordeon__color-checkbox">
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="fuel" value="Гибрид">
                                                    <span>Металик</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="fuel" value="Гибрид">
                                                    <span>Матовый</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-search__select-element">
                                        <h6 class="title-filtr">Привод:</h6>
                                        <select name="" id="" class="select-type1">
                                            <option value="">Полный</option>
                                            <option value="">Полный</option>
                                        </select>
                                    </div>
                                    <div class="main-search__select-element">
                                        <h6 class="title-filtr">Техническое состояние: </h6>
                                        <select name="" id="" class="select-type1">
                                            <option value="">Полностью неповрежденное</option>
                                            <option value=""> Профессионально отремонтированные повреждения</option>
                                            <option value=""> Неотремонтированные повреждения</option>
                                            <option value=""> Не на ходу / На запчасти</option>
                                        </select>
                                    </div>
                                    <div class="catalog__filtr__filtr-element">
                                        <h5>Цена, $:</h5>
                                        <div class="filtr-element__select">
                                            <div class="filtr-element__select filtr-element__select_input">
                                                <input type="text" placeholder="1 200">
                                                <select name="" id="" class="full-select">
                                                    <option value="">Usd</option>
                                                    <option value="">Usd</option>
                                                    <option value="">Usd</option>
                                                    <option value="">Usd</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="aside-search__col add-car-filtr-col">
                                    <div class="main-search__select-element">
                                        <h6 class="title-filtr">Состояние автомобиля*:</h6>
                                        <select name="" id="" class="select-type1">
                                            <option value="">В хлам</option>
                                            <option value="">40 владельцев</option>
                                        </select>
                                    </div>
                                    <div class="main-search__select-element">
                                        <h6 class="title-filtr">Hansi bazar*:</h6>
                                        <select name="" id="" class="select-type1">
                                            <option value="">Avropa</option>
                                            <option value="">Amerika</option>
                                            <option value="">Asia</option>
                                        </select>
                                    </div>
                                    <div class="main-search__check-wrapper-add-car">
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="transmision" value="Автомат">
                                                <span>Авто в кредит</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="transmision" value="Автомат">
                                                <span>Возможен обмен на недвижимость</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="transmision" value="Автомат">
                                                <span>Возможен обмен на авто</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="transmision" value="Автомат">
                                                <span>Servis kitabcasi</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="photo-conteiner-add__video-conteiner">
                                <h4 class="cart-main-info__title-ul">Авто с проверенным VIN-кодом продаются быстрее</h4>
                                <p>Мы бесплатно проверим авто по реестрам МВД, порталу открытых данных и дилерским базам, а вы получите высшие места в поиске</p>
                                <div class="photo-conteiner-add__video-input">
                                    <label for="add-video-input" class="input-form-conteiner__label">VIN-код</label>
                                    <input type="text" class="input-form-conteiner__input add-video-input" placeholder="VIN-код">
                                </div>
                                <div class="photo-conteiner-add__video-player ">
                                    <h4 class="cart-main-info__title-ul">Видео:</h4>
                                    <div class="photo-conteiner-add__video-box">
                                        <div class="video-element">
                                            <div class="card-box__play video-element__play" >
                                                <img src="{{ asset('assets/front/img/_src/play.png') }}" alt="">
                                            </div>
                                            <img class="video-element__prewievs" src="http://img.youtube.com/vi/ysSxxIqKNN0/0.jpg" alt="">
                                            <iframe  data-src="" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="acordeon-conteiner__box" data-add-staps="photo-and-video">
                        <div class="acordeon-conteiner__box-title">
                            <h4 class="cart-main-info__title">Фото, видео, описание</h4>
                            <span class="acordeon-conteiner__box__nam-element">/02</span>
                        </div>
                        <div class="acordeon-conteiner__claster">
                            <div class="acordeon-conteiner__claster-wrapper">
                                <div class="acordeon-conteiner__photo-conteiner-add photo-conteiner-add">
                                    <div class="photo-conteiner-add__main-photo">
                                        <div class="photo-conteiner-add__main-image-conteiner add-new-image-main">
                                            <h4 class="cart-main-info__title-ul">Главное фото:</h4>
                                            <a class="card-box-user__add-ads ">
                                                <label class="custom-file-upload">
                                                    <input type="file"  accept="image/heic, image/png, image/jpeg, image/webp" id="main-car-photo-donload" >
                                                    <div class="card-box-user__add-ads-conteiner card-box-user__add-ads-conteiner_big">
                                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M31.6665 18.3332H21.6665V8.33317C21.6665 7.89114 21.4909 7.46722 21.1783 7.15466C20.8658 6.8421 20.4419 6.6665 19.9998 6.6665C19.5578 6.6665 19.1339 6.8421 18.8213 7.15466C18.5088 7.46722 18.3332 7.89114 18.3332 8.33317V18.3332H8.33317C7.89114 18.3332 7.46722 18.5088 7.15466 18.8213C6.8421 19.1339 6.6665 19.5578 6.6665 19.9998C6.6665 20.4419 6.8421 20.8658 7.15466 21.1783C7.46722 21.4909 7.89114 21.6665 8.33317 21.6665H18.3332V31.6665C18.3332 32.1085 18.5088 32.5325 18.8213 32.845C19.1339 33.1576 19.5578 33.3332 19.9998 33.3332C20.4419 33.3332 20.8658 33.1576 21.1783 32.845C21.4909 32.5325 21.6665 32.1085 21.6665 31.6665V21.6665H31.6665C32.1085 21.6665 32.5325 21.4909 32.845 21.1783C33.1576 20.8658 33.3332 20.4419 33.3332 19.9998C33.3332 19.5578 33.1576 19.1339 32.845 18.8213C32.5325 18.5088 32.1085 18.3332 31.6665 18.3332Z" fill="#768A9E"></path>
                                                        </svg>
                                                        <p>Добавить основное фото</p>
                                                    </div>
                                                </label>
                                                <div class="photo-conteiner-add__main-image-info">
                                                    <div class="waring-text">
                                                        <span>Важно:</span>
                                                        <p>на главном фото автомобиль должен быть сфотографирован спереди под углом 45 °</p>
                                                    </div>
                                                    <div class="waring-image">
                                                        <img src="{{ asset('assets/front/img/_src/war-car.jpg') }}" alt="">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="acordeon-conteiner__description-conteiner">
                                            <h4 class="cart-main-info__title-ul">Описание</h4>
                                            <textarea placeholder="Текст описание"></textarea>
                                        </div>
                                    </div>
                                    <div class="photo-conteiner-add__othe-photo">
                                        <h4 class="cart-main-info__title-ul">Другие фото (не более 20):</h4>
                                        <!-- <div class="photo-conteiner-add__other-photo-header other-photo-header">
                                            <div class="box-redactor-text">
                                                <ul>
                                                    <li>Минимум — 2 фото (вид спереди, вид сзади).</li>
                                                    <li>Максимум — 20 фото.</li>
                                                    <li>Оптимальный размер фото — 1024 х 768 пикселей.</li>
                                                </ul>
                                            </div>
                                            <div class="other-photo-header__line">
                                                <div class="other-photo-header__photo">
                                                    <span>
                                                        <img src="img/_src/war-car2.jpg" alt="">
                                                    </span>
                                                    <p>Вид спереди</p>
                                                </div>
                                                <div class="other-photo-header__photo">
                                                    <span>
                                                        <img src="img/_src/war-car3.jpg" alt="">
                                                    </span>
                                                    <p>Вид сзади</p>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="photo-conteiner-add__other-photo-conteiner">
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
                                    <div class="photo-conteiner-add__video-conteiner">
                                        <h4 class="cart-main-info__title-ul">Код видео с YouTube:</h4>
                                        <p>Нажмите на кнопку поделиться и скопиройте выделеные символы https://youtu.be/<b>TSkVVVBS9k8</b></p>
                                        <div class="photo-conteiner-add__video-input">
                                            <input type="text" class="input-form-conteiner__input add-video-input" placeholder="url">
                                        </div>
                                        <div class="photo-conteiner-add__video-player ">
                                            <h4 class="cart-main-info__title-ul">Видео:</h4>
                                            <div class="photo-conteiner-add__video-box">
                                                <div class="video-element">
                                                    <div class="card-box__play video-element__play" >
                                                        <img src="{{ asset('assets/front/img/_src/play.png') }}" alt="">
                                                    </div>
                                                    <img class="video-element__prewievs" src="http://img.youtube.com/vi/ysSxxIqKNN0/0.jpg" alt="">
                                                    <iframe  data-src="" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="acordeon-conteiner__box" data-add-staps="condition">
                        <div class="acordeon-conteiner__box-title">
                            <h4 class="cart-main-info__title">Другие технические характеристики и состояние</h4>
                            <span class="acordeon-conteiner__box__nam-element">/03</span>
                            <p class="acordeon-conteiner__subtitle">Чем больше заполнено информации об автомобиле — тем выше вероятность его продажи.</p>
                        </div>
                        <div class="acordeon-conteiner__claster">
                            <div class="acordeon-conteiner__claster-wrapper">
                                <div class="acordeon-conteiner__line-haraceristics-add-car line-haraceristics-add-car">
                                    <div class="line-haraceristics-add-car__row">
                                        <div class="main-search__select-element main-search__select-element_characteristicks-width">
                                            <h6 class="title-filtr">Количество мест, шт:</h6>
                                            <div class="main-search__input-conteiner">
                                                <input type="text" class="input-only-namber" placeholder="100 000">
                                            </div>
                                        </div>
                                        <div class="main-search__select-element main-search__select-element_characteristicks-width">
                                            <h6 class="title-filtr">Клиренс, см:</h6>
                                            <div class="main-search__input-conteiner">
                                                <input type="text" class="input-only-namber" placeholder="100 000">
                                            </div>
                                        </div>
                                        <div class="main-search__select-element main-search__select-element_characteristicks-width">
                                            <h6 class="title-filtr">Багажник, л:</h6>
                                            <div class="main-search__input-conteiner">
                                                <input type="text" class="input-only-namber" placeholder="100 000">
                                            </div>
                                        </div>
                                        <div class="main-search__select-element main-search__select-element_characteristicks-width">
                                            <h6 class="title-filtr">Расход, л:</h6>
                                            <div class="main-search__input-conteiner">
                                                <input type="text" class="input-only-namber" placeholder="100 000">
                                            </div>
                                        </div>
                                        <div class="main-search__select-element main-search__select-element_characteristicks-width">
                                            <h6 class="title-filtr">Разгон 0 — 100, с:</h6>
                                            <div class="main-search__input-conteiner">
                                                <input type="text" class="input-only-namber" placeholder="100 000">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="line-haraceristics-add-car__col">
                                        <div class="catalog__filtr__filtr-element">
                                            <h5>Цвет (выбрать тон):</h5>
                                            <div class="filtr-element__color-disc color-disc-select">
                                                <label>
                                                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M63.2822 73.0073V93.3075H75.0025C82.59 88.9174 88.9162 82.5911 93.3063 75.0038V63.2834H73.0062C70.674 67.3141 67.3131 70.675 63.2822 73.0073Z" fill="#09A1E5"/>
                                                        <path d="M73.007 36.7174H93.3072V24.9971C88.9172 17.4096 82.5908 11.0834 75.0035 6.69336H63.2832V26.9936C67.3139 29.3256 70.6748 32.6865 73.007 36.7174Z" fill="#962B7C"/>
                                                        <path d="M36.7174 26.9926V6.69238H24.9971C17.4096 11.0824 11.0834 17.4088 6.69336 24.9961V36.7164H26.9936C29.3256 32.6857 32.6865 29.3248 36.7174 26.9926Z" fill="#FF9259"/>
                                                        <path d="M50 76.5618L38.2812 88.2806L50 99.9993C59.109 99.9993 67.6482 97.5622 75.0035 93.3066L63.2832 73.0063C59.3756 75.2671 54.8391 76.5618 50 76.5618Z" fill="#3EC3FF"/>
                                                        <path d="M26.9926 63.2825H6.69238V75.0028C11.0824 82.5903 17.4088 88.9165 24.9961 93.3065H33.3594L36.7164 73.0063C32.6857 70.6743 29.3248 67.3133 26.9926 63.2825Z" fill="#49B296"/>
                                                        <path d="M76.5613 50C76.5613 54.8391 75.2666 59.3756 73.0059 63.283L93.3061 75.0033C97.5619 67.648 99.9989 59.109 99.9989 50L88.2801 42.1875L76.5613 50Z" fill="#077CCC"/>
                                                        <path d="M36.7174 73.0063L24.9971 93.3066C32.3521 97.5622 40.8914 99.9993 50.0004 99.9993V76.5618C45.1613 76.5618 40.6248 75.2671 36.7174 73.0063Z" fill="#2897B1"/>
                                                        <path d="M23.4375 50L11.7188 44.1406L0 50C0 59.109 2.43691 67.648 6.69277 75.0035L26.993 63.2832C24.7322 59.3756 23.4375 54.8391 23.4375 50Z" fill="#89C247"/>
                                                        <path d="M76.5613 49.9996H99.9989C99.9989 40.8906 97.5619 32.3516 93.3061 24.9961L73.0059 36.7164C75.2666 40.624 76.5613 45.1605 76.5613 49.9996Z" fill="#622876"/>
                                                        <path d="M63.283 26.993L75.0033 6.69277C67.6482 2.43711 59.109 0 50 0L38.2812 11.7188L50 23.4375C54.8391 23.4375 59.3756 24.7322 63.283 26.993Z" fill="#CB2E81"/>
                                                        <path d="M49.9996 23.4375V0C40.8906 0 32.3514 2.43711 24.9961 6.69277L36.7164 26.993C40.624 24.7322 45.1605 23.4375 49.9996 23.4375Z" fill="#FF5178"/>
                                                        <path d="M26.993 36.7166L6.69277 24.9961C2.43691 32.3516 0 40.8906 0 49.9996H23.4375C23.4375 45.1605 24.7322 40.624 26.993 36.7166Z" fill="#FFD23B"/>
                                                        <path d="M67.9318 39.6477H38.2812L50 70.7038C61.434 70.7038 70.7031 61.4346 70.7031 50.0006C70.7031 46.229 69.6941 42.6932 67.9318 39.6477Z" fill="#09A1E5"/>
                                                        <path d="M32.0682 39.6477C30.3059 42.6932 29.2969 46.229 29.2969 50.0006C29.2969 61.4346 38.566 70.7038 50 70.7038V39.6477H32.0682Z" fill="#FFD23B"/>
                                                        <path d="M67.9318 39.6471C64.352 33.4598 57.6623 29.2969 50 29.2969L44.1406 39.6484L50 50L67.9318 39.6471Z" fill="#FF3187"/>
                                                        <path d="M49.9992 29.2969C42.3369 29.2969 35.6473 33.4598 32.0674 39.6471L49.9992 50V29.2969Z" fill="#FF5178"/>
                                                    </svg>
                                                    <input type="color" class="color-picker" style="display:block; opacity: 0; position: absolute;">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="acordeon-conteiner__box">
                        <div class="acordeon-conteiner__box-title">
                            <h4 class="cart-main-info__title">Безопасность</h4>
                            <span class="acordeon-conteiner__box__nam-element">/04</span>
                        </div>
                        <div class="acordeon-conteiner__claster">
                            <div class="acordeon-conteiner__claster-wrapper">
                                <div class="acordeon-conteiner__check-conteiner">
                                    <div class="acordeon-conteiner__col">
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Бронированный</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Подушки безопастности</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Сигнализация</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Датчик проникновения в салон (датчик объема)</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Антипробуксовочная система (ASR)</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Антиблокировочная система (ABS)</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Система стабилизации (ESP)</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="acordeon-conteiner__col">
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Система ночного видения</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Система контроля слепых зон</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Система контроля за полосой движения</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Система предупреждения об усталости водителя</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Система предотвращения столкновения (Система помощи при торможении (BAS, EBD)</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Система крепление детского кресла ISOFIX</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Система распознавания дорожных знаков</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="acordeon-conteiner__box">
                        <div class="acordeon-conteiner__box-title">
                            <h4 class="cart-main-info__title">Комфорт</h4>
                            <span class="acordeon-conteiner__box__nam-element">/05</span>
                        </div>
                        <div class="acordeon-conteiner__claster">
                            <div class="acordeon-conteiner__claster-wrapper">
                                <div class="main-search__select-element">
                                    <h6 class="title-filtr">Климат-контроль или Кондиционер:</h6>
                                    <select name="" id="" class="select-type1">
                                        <option value="">Трак</option>
                                        <option value="">Лифтбэк</option>
                                    </select>
                                </div>
                                <div class="main-search__select-element">
                                    <h6 class="title-filtr">Люк или Панорамная крыша-люк: </h6>
                                    <select name="" id="" class="select-type1">
                                        <option value="">Трак</option>
                                        <option value="">Лифтбэк</option>
                                    </select>
                                </div>
                                <div class="main-search__select-element">
                                    <h6 class="title-filtr">Лазерные фары или Ксеноновые/Биксеноновые фары:</h6>
                                    <select name="" id="" class="select-type1">
                                        <option value="">Трак</option>
                                        <option value="">Лифтбэк</option>
                                    </select>
                                </div>
                                <div class="acordeon-conteiner__check-conteiner">
                                    <div class="acordeon-conteiner__col">
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Автопилот</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Круиз контроль</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Бортовой компьютер</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Мультируль</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Электро обогрев руля</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Подрулевые лепестки переключения передач</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Адаптивное освещение фар(поворотные фары)</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Омыватель фар</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Камера 360°</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Камера заднего вида</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Система индикации на лобовом стекле(проекция)</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Кожаный салон</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Бесключевой доступ</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Система «Старт-Стоп»</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="acordeon-conteiner__col">
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Режим «ECO MODE»</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Доводчик дверей</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Солнцезащитные шторки на задних дверях</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Память передних сидений</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Сиденья с массажем</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Вентилируемые сиденья</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Подогрев сидений</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Третий ряд сидений</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Парктроник</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Система автоматической парковки</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Система выбора режима движения</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Электроскладывание боковых зеркал</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Электроподогрев боковых зеркал</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Электроподогрев лобового стекла</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="acordeon-conteiner__col">
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Холодильник</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Датчик дождя</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Датчик света</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Датчик давления в шинах</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Подогрев двигателя(Webasto)</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Дистанционный запуск двигателя</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Электропривод багажника</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Открытие багажника без рук</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Беспроводная зарядка для смартфона</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Быстрая зарядка CHAdeMo(устройства для быстрой зарядки аккумуляторных электромобилей)</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Розетка 12V</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Розетка 22OV</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="acordeon-conteiner__box">
                        <div class="acordeon-conteiner__box-title">
                            <h4 class="cart-main-info__title">Мультимедиа</h4>
                            <span class="acordeon-conteiner__box__nam-element">/06</span>
                        </div>
                        <div class="acordeon-conteiner__claster">
                            <div class="acordeon-conteiner__claster-wrapper">
                                <div class="acordeon-conteiner__check-conteiner">
                                    <div class="acordeon-conteiner__col">
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Премиальная аудиосистема</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Сенсорный дисплей</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Мультимедиа для задних пассажиров</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>USB</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>AUX</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Bluetooth</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Android Auto</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="acordeon-conteiner__col">
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Apple CarPlay</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Навигационная система</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Голосовое управление</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Розетка 12V</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Розетка 220V</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="acordeon-conteiner__box">
                        <div class="acordeon-conteiner__box-title">
                            <h4 class="cart-main-info__title">Другое</h4>
                            <span class="acordeon-conteiner__box__nam-element">/07</span>
                        </div>
                        <div class="acordeon-conteiner__claster">
                            <div class="acordeon-conteiner__claster-wrapper">
                                <div class="acordeon-conteiner__check-conteiner">
                                    <div class="acordeon-conteiner__col">
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Сервисная книжка</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Спорт пакет</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Пневмоподвеска</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Ретро автомобиль</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Первый владелец</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Гаражное хранение</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Прицепное устройство(Фаркоп)</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Багажник на крыше</span>
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="custom-checkbox">
                                                <input type="checkbox" name="carbody" value="Кроссовер">
                                                <span>Тонированные стекла</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="acordeon-conteiner__box">
                        <div class="acordeon-conteiner__box-title">
                            <h4 class="cart-main-info__title">Локация</h4>
                            <span class="acordeon-conteiner__box__nam-element">/08</span>
                        </div>
                        <div class="acordeon-conteiner__claster">
                            <div class="acordeon-conteiner__claster-wrapper">
                                <div class="map-wrapper">
                                    <div class="main-search__select-element main-search__select-element_map-width">
                                        <h6 class="title-filtr">Name:</h6>
                                        <div class="main-search__input-conteiner">
                                            <input type="text" class="input-only-namber" placeholder="Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="map-wrapper">
                                    <div class="main-search__select-element main-search__select-element_map-width">
                                        <h6 class="title-filtr">Город:</h6>
                                        <select name="" id="" class="select-type1">
                                            <option value="">Баку</option>
                                            <option value="">Баку</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="map-wrapper">
                                    <div class="main-search__select-element main-search__select-element_map-width">
                                        <h6 class="title-filtr">Email:</h6>
                                        <div class="main-search__input-conteiner">
                                            <input type="text" class="input-only-namber" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="map-wrapper">
                                    <div class="main-search__select-element main-search__select-element_map-width">
                                        <h6 class="title-filtr">Телефон:</h6>
                                        <div class="main-search__input-conteiner">
                                            <input type="text" class="input-only-namber" placeholder="Телефон">
                                        </div>
                                    </div>
                                </div>
                                <div class="map-wrapper">
                                    <div class="main-search__select-element main-search__select-element_map-width">
                                        <h6 class="title-filtr">Адрес:</h6>
                                        <div class="main-search__input-conteiner">
                                            <input type="text" class="input-only-namber" placeholder="Бакиханова">
                                        </div>
                                    </div>
                                    <div id="map3"></div>
                                </div>
                            </div>
                            <div class="acordeon-conteiner__btn-row">
                                <a href="" class="btn1">Опубликовать</a>
                                <a href="" class="btn1">Опубликовать как VIP</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="select-type-ads">
                        <h4 class="cart-main-info__title">Выберите тип объявления</h4>
                        <div class="select-type-ads__conteiner">
                            <div class="select-type-ads_box baner-vip">
                                <div class="baner-vip__text">
                                    <h3 class="baner-vip__title">VIP объявление</h3>
                                    <p class="baner-vip__description">Отображается на самых популярных позициях сайта, привлекая максимальное число покупателей.</p>
                                    <h4 class="baner-vip__subtitle">В 10 раз больше просмотров</h4>
                                    <div class="baner-vip__btn-line">
                                        <a class="btn1">Разместить за 15 azn</a>
                                    </div>

                                </div>
                                <div class="baner-vip__icon">
                                    <img src="img/_src/vip-ads.png" alt="">
                                </div>
                            </div>

                            <div class="select-type-ads_box select-type-ads_box_style">
                                <div class="baner-vip__text">
                                    <h3 class="baner-vip__title">Обычное объявление</h3>
                                    <p class="baner-vip__description">Вы можете разместить объявление бесплатно, но с дополнительными услугами Вы продадите автомобиль быстрее.</p>
                                    <h4 class="baner-vip__subtitle">Бесплатное размещение объявлений</h4>
                                    <div class="baner-vip__btn-line">
                                        <a class="btn1">Разместить бесплатно</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="add-car-staps add-car-staps_static static-bottom-site-bar">
                        <h5 class="add-car-staps__title">Чем больше информации об авто Вы укажете — тем больше вероятность удачной продажи.</h5>
                        <div class="add-car-staps__staps-line staps-line-car-add">
                            <div class="staps-line-car-add__wraper">
                                <h5 class="staps-line-car-add__title">Качество объявления</h5>
                                <div class="staps-line-car-add__line">
                                    <div class="staps-line-car-add__line-top">
                                        <div class="staps-line-car-add__staps-procent-line">
                                            <p>0%</p>
                                            <span class="activ-staps-procent">30%</span>
                                            <p>100%</p>
                                        </div>
                                        <div class="staps-line-car-add__line-full">
                                            <div class="staps-line-car-add__line-active"></div>
                                        </div>
                                    </div>
                                    <div class="staps-line-car-add__line-bottom">
                                        <div class="staps-line-car-add__staps-box " data-done-progres="main-done">
                                            Основные параметры*
                                        </div>
                                        <div class="staps-line-car-add__staps-box" data-done-progres="photo-video">
                                            Фото и видео
                                        </div>
                                        <div class="staps-line-car-add__staps-box" data-done-progres="description-condition" >
                                            Описание и состояние
                                        </div>
                                        <div class="staps-line-car-add__staps-box" data-done-progres="safety-comfort">
                                            Безопасность и комфорт
                                        </div>
                                        <div class="staps-line-car-add__staps-box" data-done-progres="multimedia">
                                            Мультимедиа и локация
                                        </div>
                                        <div class="staps-line-car-add__staps-box" data-done-progres="other">
                                            Другое
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-car-staps__btn-line">
                            <button class="btn1">Опубликовать</button>
                            <button class="btn1">Опубликовать как VIP</button>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
