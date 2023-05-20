@extends('front.layouts.app')

@section('content')
    <section class="advanced-car-search advanced-car-search__nev-desine">
        <div class="general-conteiner">
            <h2 class="cart-main-info__title">Расширенный поиск автомобилей</h2>
            <div class="advanced-car-search__conteiner">
                <div class="advanced-car-search__setings-search">
                    <div class="setings-search__acordeon-conteiner">
                        <div class="acordeon-conteiner__box">
                            <div class="acordeon-conteiner__box-title">
                                <h4 class="cart-main-info__title">Основные параметры</h4>
                                <span class="acordeon-conteiner__box__nam-element">/01</span>
                            </div>
                            <div class="acordeon-conteiner__claster">
                                <div class="acordeon-conteiner__claster-wrapper">
                                    <div class="aside-search__col acordeon-col">
                                        <div class="main-search__select-element">
                                            <h6 class="title-filtr">Марка авто:</h6>
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
                                            <h6 class="title-filtr">Модель:</h6>
                                            <div class="main-search__list-car-search list-car-search">
                                                <div class="list-car-search__search-line">
                                                    <input type="text" placeholder="Модель авто">
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
                                        <div class="main-search__select-element select-main">
                                            <h6 class="title-filtr">Год:</h6>
                                            <select name="" id="" class="select-type2">
                                                <option value="">Год от</option>
                                                <option value="">2019</option>
                                            </select>
                                            <select name="" id="" class="select-type2">
                                                <option value="">Год до</option>
                                                <option value="">2021</option>
                                            </select>
                                        </div>
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
                                        <div class="main-search__select-element input-main">
                                            <h6 class="title-filtr">Цена:</h6>
                                            <div class="input-main__prise-inp">
                                                <input type="text" placeholder="Цена, $ от">
                                            </div>
                                            <div class="input-main__prise-inp">
                                                <input type="text" placeholder="Цена, $ до">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aside-search__col acordeon-col">
                                        <div class="main-search__select-element">
                                            <h6 class="title-filtr">Город:</h6>
                                            <select name="" id="" class="select-type1">
                                                <option value="">Город</option>
                                                <option value="">Город: Баку</option>
                                                <option value="">Город: Киев</option>
                                            </select>
                                        </div>
                                        <div class="main-search__select-element">
                                            <h6 class="title-filtr">Состояние:</h6>
                                            <select name="" id="" class="select-type1">
                                                <option value="">Бита</option>
                                                <option value="">В хламину</option>
                                                <option value="">40 владельцев</option>
                                            </select>
                                        </div>
                                        <div class="catalog__filtr__filtr-element">
                                            <h6 class="title-filtr">Объем двигателя, л:</h6>
                                            <div class="filtr-element__select">
                                                <select name="" id="" class="range">
                                                    <option value="">От</option>
                                                    <option value="">100</option>
                                                </select>
                                                <select name="" id="" class="range">
                                                    <option value="">До</option>
                                                    <option value="">200</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="catalog__filtr__filtr-element">
                                            <h6 class="title-filtr">Пробег:</h6>
                                            <div class="filtr-element__select">
                                                <select name="" id="" class="range">
                                                    <option value="">От</option>
                                                    <option value="">100</option>
                                                </select>
                                                <select name="" id="" class="range">
                                                    <option value="">До</option>
                                                    <option value="">200</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="dob-checbox-conteiner">
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="fuel" value="Гибрид">
                                                    <span>Возможен обмен на недвижимость</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="fuel" value="Гибрид">
                                                    <span>Возможен обмен на авто</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="fuel" value="Гибрид">
                                                    <span>В кредите</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aside-search__col acordeon-col">
                                        <div class="acordeon-col__checkbox-conteiner">
                                            <h6 class="title-filtr">Тип кузова:</h6>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Седан">
                                                    <span>Седан</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Кроссовер</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Универсал">
                                                    <span>Универсал</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Универсал">
                                                    <span>Хэтчбек</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Универсал">
                                                    <span>Минивен</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Универсал">
                                                    <span>Пикап</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="acordeon-col__checkbox-conteiner">
                                            <h6 class="title-filtr">Коробка передач:</h6>
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
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="transmision" value="Механика">
                                                    <span>Робот</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="transmision" value="Автомат">
                                                    <span>Вариатор</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="acordeon-col__checkbox-conteiner">
                                            <h6 class="title-filtr">Тип топлива:</h6>
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
                                        <div class="acordeon-col__checkbox-conteiner">
                                            <h6 class="title-filtr">Привод:</h6>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon-conteiner__box">
                            <div class="acordeon-conteiner__box-title">
                                <h4 class="cart-main-info__title">Исключить</h4>
                                <span class="acordeon-conteiner__box__nam-element">/02</span>
                            </div>
                            <div class="acordeon-conteiner__claster">
                                <div class="acordeon-conteiner__claster-wrapper">
                                    <div class="acordeon-conteiner__exclude-line exclude-claster">
                                        <div class="exclude-claster__wrapper-for-row">
                                            <div class="exclude-clasder__currient">
                                                <div class="exclude-claster__row">
                                                    <div class="exclude-box">
                                                        <h6 class="title-filtr">Город:</h6>
                                                        <select name="" id="" class="select-type1">
                                                            <option value="">Город</option>
                                                            <option value="">Город: Баку</option>
                                                            <option value="">Город: Киев</option>
                                                        </select>
                                                    </div>
                                                    <div class="exclude-box">
                                                        <h6 class="title-filtr">Марка авто:</h6>
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
                                                    <div class="exclude-box">
                                                        <h6 class="title-filtr">Модель:</h6>
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
                                                    <div class="exclude-remove">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M19 13H5C4.73478 13 4.48043 12.8946 4.29289 12.7071C4.10536 12.5196 4 12.2652 4 12C4 11.7348 4.10536 11.4804 4.29289 11.2929C4.48043 11.1054 4.73478 11 5 11H19C19.2652 11 19.5196 11.1054 19.7071 11.2929C19.8946 11.4804 20 11.7348 20 12C20 12.2652 19.8946 12.5196 19.7071 12.7071C19.5196 12.8946 19.2652 13 19 13Z" fill="#768A9E"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="exclude-claster__new-elements"></div>
                                            </div>
                                        </div>
                                        <div class="exclude-box_btn-wrapper">
                                            <a  class="btn2 exclude-box__add-btn">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19 11H13V5C13 4.73478 12.8946 4.48043 12.7071 4.29289C12.5196 4.10536 12.2652 4 12 4C11.7348 4 11.4804 4.10536 11.2929 4.29289C11.1054 4.48043 11 4.73478 11 5V11H5C4.73478 11 4.48043 11.1054 4.29289 11.2929C4.10536 11.4804 4 11.7348 4 12C4 12.2652 4.10536 12.5196 4.29289 12.7071C4.48043 12.8946 4.73478 13 5 13H11V19C11 19.2652 11.1054 19.5196 11.2929 19.7071C11.4804 19.8946 11.7348 20 12 20C12.2652 20 12.5196 19.8946 12.7071 19.7071C12.8946 19.5196 13 19.2652 13 19V13H19C19.2652 13 19.5196 12.8946 19.7071 12.7071C19.8946 12.5196 20 12.2652 20 12C20 11.7348 19.8946 11.4804 19.7071 11.2929C19.5196 11.1054 19.2652 11 19 11Z" fill="#768A9E"/>
                                                </svg>
                                                <p>Добавить еще</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon-conteiner__box">
                            <div class="acordeon-conteiner__box-title">
                                <h4 class="cart-main-info__title">Безопасность</h4>
                                <span class="acordeon-conteiner__box__nam-element">/03</span>
                            </div>
                            <div class="acordeon-conteiner__claster">
                                <div class="acordeon-conteiner__claster-wrapper">
                                    <div class="acordeon-conteiner__check-conteiner">
                                        <div class="acordeon-conteiner__col">
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Подушка  безопасности</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Серворуль</span>
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
                                                    <span>Замок на КПП</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Центральный замок</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>ABD</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="acordeon-conteiner__col">
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Подушка  безопасности</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Серворуль</span>
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
                                                    <span>Замок на КПП</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Центральный замок</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>ABD</span>
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
                                <span class="acordeon-conteiner__box__nam-element">/04</span>
                            </div>
                            <div class="acordeon-conteiner__claster">
                                <div class="acordeon-conteiner__claster-wrapper">
                                    <div class="acordeon-conteiner__check-conteiner">
                                        <div class="acordeon-conteiner__col">
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Подушка  безопасности</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Серворуль</span>
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
                                                    <span>Замок на КПП</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Центральный замок</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>ABD</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="acordeon-conteiner__col">
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Подушка  безопасности</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Серворуль</span>
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
                                                    <span>Замок на КПП</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Центральный замок</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>ABD</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="acordeon-conteiner__col">
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Подушка  безопасности</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Серворуль</span>
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
                                                    <span>Замок на КПП</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Центральный замок</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>ABD</span>
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
                                <span class="acordeon-conteiner__box__nam-element">/05</span>
                            </div>
                            <div class="acordeon-conteiner__claster">
                                <div class="acordeon-conteiner__claster-wrapper">
                                    <div class="acordeon-conteiner__check-conteiner">
                                        <div class="acordeon-conteiner__col">
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Подушка  безопасности</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Серворуль</span>
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
                                                    <span>Замок на КПП</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Центральный замок</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>ABD</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="acordeon-conteiner__col">
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Подушка  безопасности</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Серворуль</span>
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
                                                    <span>Замок на КПП</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Центральный замок</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>ABD</span>
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
                                <span class="acordeon-conteiner__box__nam-element">/06</span>
                            </div>
                            <div class="acordeon-conteiner__claster">
                                <div class="acordeon-conteiner__claster-wrapper">
                                    <div class="acordeon-conteiner__check-conteiner">
                                        <div class="acordeon-conteiner__col">
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Подушка  безопасности</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Серворуль</span>
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
                                                    <span>Замок на КПП</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>Центральный замок</span>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Кроссовер">
                                                    <span>ABD</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="acordeon-conteiner__box">
                            <div class="acordeon-conteiner__box-title">
                                <h4 class="cart-main-info__title">Другие технические характеристики</h4>
                                <span class="acordeon-conteiner__box__nam-element">/07</span>
                            </div>
                            <div class="acordeon-conteiner__claster">
                                <div class="acordeon-conteiner__claster-wrapper">
                                    <div class="aside-search__col acordeon-col">
                                        <div class="catalog__filtr__filtr-element">
                                            <h6 class="title-filtr">Мощность, л.с:</h6>
                                            <div class="filtr-element__select">
                                                <select name="" id="" class="range">
                                                    <option value="">От</option>
                                                    <option value="">100</option>
                                                </select>
                                                <select name="" id="" class="range">
                                                    <option value="">До</option>
                                                    <option value="">200</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="catalog__filtr__filtr-element">
                                            <h6 class="title-filtr">Расход, л:</h6>
                                            <div class="filtr-element__select">
                                                <select name="" id="" class="range">
                                                    <option value="">От</option>
                                                    <option value="">100</option>
                                                </select>
                                                <select name="" id="" class="range">
                                                    <option value="">До</option>
                                                    <option value="">200</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aside-search__col acordeon-col">
                                        <div class="catalog__filtr__filtr-element">
                                            <h6 class="title-filtr">Количество мест, шт:</h6>
                                            <div class="filtr-element__select">
                                                <select name="" id="" class="range">
                                                    <option value="">От</option>
                                                    <option value="">100</option>
                                                </select>
                                                <select name="" id="" class="range">
                                                    <option value="">До</option>
                                                    <option value="">200</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="catalog__filtr__filtr-element">
                                            <h6 class="title-filtr">Клиренс, см:</h6>
                                            <div class="filtr-element__select">
                                                <select name="" id="" class="range">
                                                    <option value="">От</option>
                                                    <option value="">100</option>
                                                </select>
                                                <select name="" id="" class="range">
                                                    <option value="">До</option>
                                                    <option value="">200</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aside-search__col acordeon-col">
                                        <div class="catalog__filtr__filtr-element">
                                            <h6 class="title-filtr">Разгон 0 — 100, с:</h6>
                                            <div class="filtr-element__select">
                                                <select name="" id="" class="range">
                                                    <option value="">От</option>
                                                    <option value="">100</option>
                                                </select>
                                                <select name="" id="" class="range">
                                                    <option value="">До</option>
                                                    <option value="">200</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="catalog__filtr__filtr-element">
                                            <h6 class="title-filtr">Багажник, л:</h6>
                                            <div class="filtr-element__select">
                                                <select name="" id="" class="range">
                                                    <option value="">От</option>
                                                    <option value="">100</option>
                                                </select>
                                                <select name="" id="" class="range">
                                                    <option value="">До</option>
                                                    <option value="">200</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="setings-search__conteiner">
                        <div class="setings-search__select-value static-bottom-site-bar">
                            <div class="setings-search__what-you-search">
                                <p class="what-you-search__title">Вы ищите:</p>
                                <div class="catalog__filtr-select">
                                    <div class="filtr-select__element">
                                        <p>Минивен</p>
                                        <div class="filtr-select__delete">
                                            <img src="{{ asset('assets/front/img/_src/close.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="filtr-select__element">
                                        <p>Ford</p>
                                        <div class="filtr-select__delete">
                                            <img src="{{ asset('assets/front/img/_src/close.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="filtr-select__element">
                                        <p>Mersedes benz</p>
                                        <div class="filtr-select__delete">
                                            <img src="{{ asset('assets/front/img/_src/close.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="filtr-select__element">
                                        <p>Vito</p>
                                        <div class="filtr-select__delete">
                                            <img src="{{ asset('assets/front/img/_src/close.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="filtr-select__element">
                                        <p>от 2012 г.</p>
                                        <div class="filtr-select__delete">
                                            <img src="{{ asset('assets/front/img/_src/close.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="filtr-select__element">
                                        <p>Газ/бензин</p>
                                        <div class="filtr-select__delete">
                                            <img src="{{ asset('assets/front/img/_src/close.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="filtr-select__element">
                                        <p>Полный привод</p>
                                        <div class="filtr-select__delete">
                                            <img src="{{ asset('assets/front/img/_src/close.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <label for="advance_filter__result__show-more" class="filter-result__show-more">
                                    <p>Show more</p>
                                    <p>Show less</p>
                                </label>
                                <input type="checkbox" name="advance_filter__result__show-more" id="advance_filter__result__show-more">
                            </div>
                            <div class="ads-body__header">
                                <button class="bt_del">
                                    <p>Сбросить все фильтры</p>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 4H3.33333H14" stroke="#0D417B" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5.33398 4.00016V2.66683C5.33398 2.31321 5.47446 1.97407 5.72451 1.72402C5.97456 1.47397 6.3137 1.3335 6.66732 1.3335H9.33398C9.68761 1.3335 10.0267 1.47397 10.2768 1.72402C10.5268 1.97407 10.6673 2.31321 10.6673 2.66683V4.00016M12.6673 4.00016V13.3335C12.6673 13.6871 12.5268 14.0263 12.2768 14.2763C12.0267 14.5264 11.6876 14.6668 11.334 14.6668H4.66732C4.3137 14.6668 3.97456 14.5264 3.72451 14.2763C3.47446 14.0263 3.33398 13.6871 3.33398 13.3335V4.00016H12.6673Z" stroke="#0D417B" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.66602 7.3335V11.3335" stroke="#0D417B" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.33398 7.3335V11.3335" stroke="#0D417B" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <div class="ads-body__sorting-conteiner">
                                    <div class="sorting-conteiner__element sorting-conteiner_nam-ads">
                                        <p>Показать по:</p>
                                        <select name="" id="">
                                            <option value="">36 авто на странице</option>
                                            <option value="">26 авто на странице</option>
                                        </select>
                                    </div>
                                    <div class="sorting-conteiner__element sorting-conteiner__date">
                                        <p>Сортировка по:</p>
                                        <select name="" id="">
                                            <option value="">дате добавления</option>
                                            <option value="">дате изменения</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="setings-search__btn-row">
                            <div class="btn2">
                                <div class="icon-btn2">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.8067 12.86L11.54 10.6C12.2713 9.66831 12.6681 8.51777 12.6667 7.33334C12.6667 6.2785 12.3539 5.24736 11.7678 4.37029C11.1818 3.49323 10.3489 2.80965 9.37431 2.40598C8.39977 2.00231 7.32742 1.89669 6.29285 2.10248C5.25829 2.30827 4.30798 2.81622 3.5621 3.5621C2.81622 4.30798 2.30827 5.25829 2.10248 6.29285C1.89669 7.32742 2.00231 8.39977 2.40598 9.37431C2.80965 10.3489 3.49323 11.1818 4.37029 11.7678C5.24736 12.3539 6.2785 12.6667 7.33334 12.6667C8.51777 12.6681 9.66831 12.2713 10.6 11.54L12.86 13.8067C12.922 13.8692 12.9957 13.9188 13.077 13.9526C13.1582 13.9864 13.2453 14.0039 13.3333 14.0039C13.4213 14.0039 13.5085 13.9864 13.5897 13.9526C13.671 13.9188 13.7447 13.8692 13.8067 13.8067C13.8692 13.7447 13.9188 13.671 13.9526 13.5897C13.9864 13.5085 14.0039 13.4213 14.0039 13.3333C14.0039 13.2453 13.9864 13.1582 13.9526 13.077C13.9188 12.9957 13.8692 12.922 13.8067 12.86V12.86ZM3.33334 7.33334C3.33334 6.54221 3.56793 5.76885 4.00746 5.11106C4.44698 4.45326 5.0717 3.94057 5.8026 3.63782C6.53351 3.33507 7.33777 3.25585 8.1137 3.41019C8.88962 3.56454 9.60235 3.9455 10.1618 4.50491C10.7212 5.06432 11.1021 5.77705 11.2565 6.55297C11.4108 7.3289 11.3316 8.13317 11.0289 8.86407C10.7261 9.59497 10.2134 10.2197 9.55562 10.6592C8.89782 11.0987 8.12446 11.3333 7.33334 11.3333C6.27247 11.3333 5.25505 10.9119 4.50491 10.1618C3.75476 9.41162 3.33334 8.3942 3.33334 7.33334Z" fill="#768A9E"></path>
                                    </svg>
                                </div>
                                <p>Найти</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    <section class="fixed-staps fixed-bottom-site-bar">--}}
{{--        <div class="general-conteiner">--}}
{{--            <div class="setings-search__select-value">--}}
{{--                <div class="setings-search__what-you-search">--}}
{{--                    <p class="what-you-search__title">Вы ищите:</p>--}}
{{--                    <div class="catalog__filtr-select">--}}
{{--                        <div class="filtr-select__element">--}}
{{--                            <p>Минивен</p>--}}
{{--                            <div class="filtr-select__delete">--}}
{{--                                <img src="{{ asset('assets/front/img/_src/close.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="filtr-select__element">--}}
{{--                            <p>Ford</p>--}}
{{--                            <div class="filtr-select__delete">--}}
{{--                                <img src="{{ asset('assets/front/img/_src/close.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="filtr-select__element">--}}
{{--                            <p>Mersedes benz</p>--}}
{{--                            <div class="filtr-select__delete">--}}
{{--                                <img src="{{ asset('assets/front/img/_src/close.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="filtr-select__element">--}}
{{--                            <p>Vito</p>--}}
{{--                            <div class="filtr-select__delete">--}}
{{--                                <img src="{{ asset('assets/front/img/_src/close.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="filtr-select__element">--}}
{{--                            <p>от 2012 г.</p>--}}
{{--                            <div class="filtr-select__delete">--}}
{{--                                <img src="{{ asset('assets/front/img/_src/close.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="filtr-select__element">--}}
{{--                            <p>Газ/бензин</p>--}}
{{--                            <div class="filtr-select__delete">--}}
{{--                                <img src="{{ asset('assets/front/img/_src/close.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="filtr-select__element">--}}
{{--                            <p>Полный привод</p>--}}
{{--                            <div class="filtr-select__delete">--}}
{{--                                <img src="{{ asset('assets/front/img/_src/close.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="ads-body__header">--}}
{{--                    <button class="bt_del">--}}
{{--                        <p>Сбросить все фильтры</p>--}}
{{--                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path d="M2 4H3.33333H14" stroke="#0D417B" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                            <path d="M5.33398 4.00016V2.66683C5.33398 2.31321 5.47446 1.97407 5.72451 1.72402C5.97456 1.47397 6.3137 1.3335 6.66732 1.3335H9.33398C9.68761 1.3335 10.0267 1.47397 10.2768 1.72402C10.5268 1.97407 10.6673 2.31321 10.6673 2.66683V4.00016M12.6673 4.00016V13.3335C12.6673 13.6871 12.5268 14.0263 12.2768 14.2763C12.0267 14.5264 11.6876 14.6668 11.334 14.6668H4.66732C4.3137 14.6668 3.97456 14.5264 3.72451 14.2763C3.47446 14.0263 3.33398 13.6871 3.33398 13.3335V4.00016H12.6673Z" stroke="#0D417B" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                            <path d="M6.66602 7.3335V11.3335" stroke="#0D417B" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                            <path d="M9.33398 7.3335V11.3335" stroke="#0D417B" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                    <div class="ads-body__sorting-conteiner">--}}
{{--                        <div class="sorting-conteiner__element sorting-conteiner_nam-ads">--}}
{{--                            <p>Показать по:</p>--}}
{{--                            <select name="" id="">--}}
{{--                                <option value="">36 авто на странице</option>--}}
{{--                                <option value="">26 авто на странице</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="sorting-conteiner__element sorting-conteiner__date">--}}
{{--                            <p>Сортировка по:</p>--}}
{{--                            <select name="" id="">--}}
{{--                                <option value="">дате добавления</option>--}}
{{--                                <option value="">дате изменения</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
@endsection

@push('scripts')
@endpush
