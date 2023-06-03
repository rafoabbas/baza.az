@extends('front.layouts.app')

@section('content')
    <section class="cart-main-info">
        <div class="general-conteiner">
            <h2 class="cart-main-info__title">Редактирование</h2>
            <div class="catalog_bread-crumbs">
                <a href="">Главная</a>
                <a href="">/ Личный кабинет</a>
                <a href="">/ Авто в аренду</a>
                <p>/ Редактирование</p>
            </div>
            <div class="cart-main-info__conteiner">
                @include('front.pages.profile.business.layout.partials.navbar')
                <div class="cart-main-info__body-info cart-main-info__body-info_account">
                    <div class="user-account-busines-claster">
                        <div class="user-account-busines-claster__rent-car-conteiner">

                            <div class="acordeon-conteiner__box acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">Основные параметры (обязательные)</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/01</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>

                                <div class="acordeon-conteiner__claster acordeon-element__claster">

                                    <div class="acordeon-conteiner__claster-wrapper acordeon-conteiner__claster-wrapper_flex-start">
                                        <div class="acordeon-conteiner__separateV3">

                                            <div class="catalog__filtr__filtr-element">
                                                <h5>Регион:</h5>
                                                <div class="filtr-element__select">
                                                    <select name="" id="" class="full-select">
                                                        <option value="">Регион</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="catalog__filtr__filtr-element">
                                                <h5>Класс автомобиля:</h5>
                                                <div class="filtr-element__select">
                                                    <select name="" id="" class="full-select">
                                                        <option value="">Класс автомобиля:</option>
                                                        <option value="">Премиум</option>>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="catalog__filtr__filtr-element">
                                                <h5>Марка:</h5>
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
                                                <h5>Модель:</h5>
                                                <div class="filtr-element__select">
                                                    <select name="" id="" class="full-select">
                                                        <option value="">Vito1</option>
                                                        <option value="">Vito2</option>
                                                        <option value="">Vito3</option>
                                                        <option value="">Vito4</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="catalog__filtr__filtr-element catalog__filtr__filtr-element_dobl-title">

                                                <div class="filtr-element__select">
                                                    <h5>Привод:</h5>
                                                    <select name="" id="" class="range">
                                                        <option value="">Привод</option>
                                                        <option value="">Полный</option>
                                                        <option value="">задний</option>
                                                        <option value="">Лошадь</option>
                                                    </select>
                                                </div>
                                                <div class="filtr-element__select">
                                                    <h5>Двигатель, л:</h5>
                                                    <input type="text" placeholder="2.1">
                                                </div>
                                            </div>

                                            <div class="catalog__filtr__filtr-element catalog__filtr__filtr-element_dobl-title">

                                                <div class="filtr-element__select">
                                                    <h5>Год:</h5>
                                                    <select name="" id="" class="range">
                                                        <option value="">Год</option>
                                                        <option value="">2010</option>
                                                        <option value="">2012</option>
                                                        <option value="">2014</option>
                                                        <option value="">2018</option>
                                                    </select>
                                                </div>
                                                <div class="filtr-element__select">
                                                    <h5>Пробег:км</h5>
                                                    <input type="text" placeholder="Пробег">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="acordeon-conteiner__separateV3">
                                            <div class="catalog__filtr__filtr-element">
                                                <h5>Количество мест:</h5>
                                                <div class="filtr-element__select">
                                                    <select name="" id="" class="full-select">
                                                        <option value="">Количество мест</option>
                                                        <option value="">2</option>
                                                        <option value="">5</option>
                                                        <option value="">4</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="catalog__filtr__filtr-element">
                                                <h5>Тип топлива:</h5>
                                                <div class="filtr-element__select">
                                                    <select name="" id="" class="full-select">
                                                        <option value="">Количество дверей:</option>
                                                        <option value="">Количество дверей</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="catalog__filtr__filtr-element">
                                                <h5>Расход топлива:</h5>
                                                <div class="filtr-element__select">
                                                    <div class="filtr-element__input">
                                                        <input type="text" placeholder="Расход топлива">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="catalog__filtr__filtr-element">
                                                <h5>Коробка передач:</h5>
                                                <div class="filtr-element__select">
                                                    <select name="" id="" class="full-select">
                                                        <option value="">Коробка передач</option>
                                                        <option value="">Автомат</option>
                                                        <option value="">Механика</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="acordeon__color">
                                                <div class="catalog__filtr__filtr-element">
                                                    <h5>Цвет:</h5>
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

                                        </div>

                                    </div>


                                    <div class="rent-car-price-list add-more-location">
                                        <h4 class="cart-main-info__title-ul">Стоимость аренды по дням:</h4>

                                        <div class="rent-car-price-list__table table-prise-rent">
                                            <div class="table-prise-rent__line table-prise-rent__line_header">
                                                <div class="table-prise-rent__element-V1">
                                                    <p>Количество дней:</p>
                                                </div>
                                                <div class="table-prise-rent__element-V2">
                                                    <p>Цена:</p>
                                                    <select name="" id="">
                                                        <option value="">USD</option>
                                                        <option value="">EUR</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="table-prise-rent__line table-prise-rent__line_default">
                                                <div class="table-prise-rent__element-V1">
                                                    <div class="table-prise-rent__val-box">
                                                        <p>От</p>
                                                        <input type="text" placeholder="20">
                                                    </div>
                                                    <div class="table-prise-rent__val-box">
                                                        <p>До</p>
                                                        <input type="text" placeholder="20">
                                                    </div>
                                                </div>
                                                <div class="table-prise-rent__element-V2">
                                                    <input type="text" placeholder="120">
                                                </div>

                                                <div class="btn-add-del del-price-rent-car">
                                                    <div class="btn-add-del__icon">
                                                        <img src="img/_src/del-ic.png" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="rent-car-price-list__new-element">
                                            </div>

                                        </div>


                                        <div class="add-more-location__new-location">
                                            <div class="btn-add-del add-days">
                                                <div class="btn-add-del__icon">
                                                    <img src="img/_src/add-ic.png" alt="">
                                                </div>
                                                <span>Добавить дни</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="acordeon-conteiner__box acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">Фото автомобиля</h4>
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
                                                        <p>на главном фото автомобиль должен быть сфотографирован спереди под углом 45 °</p>
                                                    </div>
                                                    <div class="waring-image">
                                                        <img src="img/_src/war-car.jpg" alt="">
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
                                    </div>
                                </div>
                            </div>

                            <div class="acordeon-conteiner__box acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">Условия аренды</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/03</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>

                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper">
                                        <div class="conditions-rent-cars">
                                            <div class="conditions-rent-cars__line">
                                                <p class="conditions-rent-cars__title">Минимальный возраст водителя, лет:</p>
                                                <div class="conditions-rent-cars__val-conteiner-V2">
                                                    <div class="filtr-element__input">
                                                        <input type="text" placeholder="450">
                                                    </div>
                                                    <div class="filtr-element__select">
                                                        <select name="" id="" class="full-select">
                                                            <option value="">USD</option>
                                                            <option value="">EUR</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conditions-rent-cars__line">
                                                <p class="conditions-rent-cars__title">Минимальный возраст водителя, лет:</p>
                                                <div class="conditions-rent-cars__val-conteiner-V1">
                                                    <div class="filtr-element__input">
                                                        <input type="text" placeholder="21">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conditions-rent-cars__line">
                                                <p class="conditions-rent-cars__title">Ограничение по пробегу, км/сутки:</p>
                                                <div class="conditions-rent-cars__val-conteiner-V1">
                                                    <div class="filtr-element__input">
                                                        <input type="text" placeholder="250">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conditions-rent-cars__line">
                                                <p class="conditions-rent-cars__title">Документы для аренды:</p>
                                                <div class="conditions-rent-cars__val-conteiner-V1">
                                                    <div class="filtr-element__input">
                                                        <input type="text" placeholder="паспорт, права">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conditions-rent-cars__line">
                                                <p class="conditions-rent-cars__title">Страховка автомобиля:</p>
                                                <div class="conditions-rent-cars__val-conteiner-V1">
                                                    <div class="filtr-element__input">
                                                        <input type="text" placeholder="каско">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conditions-rent-cars__line">
                                                <p class="conditions-rent-cars__title">Способ оплаты:</p>
                                                <div class="conditions-rent-cars__val-conteiner-V1">
                                                    <div class="filtr-element__input">
                                                        <input type="text" placeholder="на карту, терминал, наличные">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conditions-rent-cars__line">
                                                <p class="conditions-rent-cars__title">Запрака:</p>
                                                <div class="conditions-rent-cars__val-conteiner-V1">
                                                    <div class="filtr-element__input">
                                                        <input type="text" placeholder="до полного бака">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conditions-rent-cars__line">
                                                <p class="conditions-rent-cars__title">Дополнительные опции:</p>
                                                <div class="conditions-rent-cars__val-conteiner-V1">
                                                    <div class="filtr-element__input">
                                                        <input type="text" placeholder="детское кресло">
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
