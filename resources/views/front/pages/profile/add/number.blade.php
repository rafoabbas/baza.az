@extends('front.layouts.app')

@section('content')
    <section class="cart-main-info section-user-account ads-byu-main-sec">
        <div class="general-conteiner">
            <h2 class="cart-main-info__title">Добавить автономер в продажу </h2>
            <div class="catalog_bread-crumbs">
                <a href="">Главная</a>
                <a href="">/  Личный кабинет</a>
                <p>/ Добавить автономер</p>
            </div>

            <div class="cart-main-info__conteiner">
                <div class="cart-main-info__body-info">
                    <div class="conteiner-add-number">
                        <p class="conteiner-add-number__title">Все поля обязательные для заполнения</p>
                        <div class="conteiner-add-number__line">
                            <div class="catalog__filtr__filtr-element">
                                <h5>Регион:</h5>
                                <div class="filtr-element__select">
                                    <select name="" id="" class="full-select">
                                        <option value="">Регион</option>
                                        <option value="">Vito2</option>
                                        <option value="">Vito3</option>
                                        <option value="">Vito4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="catalog__filtr__filtr-element">
                                <h5>Серия:</h5>

                                <input type="text" class="input-form-conteiner__input" placeholder="Серия">
                            </div>

                            <div class="catalog__filtr__filtr-element">
                                <h5>Номер:</h5>
                                <input type="text" class="input-form-conteiner__input" placeholder="Номер" >
                            </div>
                        </div>

                        <div class="conteiner-add-number__line">
                            <div class="catalog__filtr__filtr-element">
                                <h5>Город:</h5>
                                <div class="filtr-element__select">
                                    <select name="" id="" class="full-select">
                                        <option value="">Город</option>
                                        <option value="">Vito2</option>
                                        <option value="">Vito3</option>
                                        <option value="">Vito4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="catalog__filtr__filtr-element">
                                <h5>Цена:</h5>
                                <div class="filtr-element__select filtr-element__select_input">
                                    <input type="text" placeholder="1 200">
                                    <select name="" id="" class="full-select">
                                        <option value="">Usd</option>
                                        <option value="">Vito2</option>
                                        <option value="">Vito3</option>
                                        <option value="">Vito4</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                    </div>



                    <div class="select-num">
                        <h4 class="cart-main-info__title-ul">На каком авто показать номер:</h4>

                        <div class="select-num__conteiner">
                            <div class="select-num__box select-num__box_activ">
                                <img src="img/_src/car-doc.png" alt="">
                            </div>
                            <div class="select-num__box">
                                <img src="img/_src/car-doc2.png" alt="">
                            </div>
                            <div class="select-num__box">
                                <img src="img/_src/car-doc.png" alt="">
                            </div>
                            <div class="select-num__box">
                                <img src="img/_src/car-doc.png" alt="">
                            </div>
                            <div class="select-num__box">
                                <img src="img/_src/car-doc2.png" alt="">
                            </div>
                            <div class="select-num__box">
                                <img src="img/_src/car-doc.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="acordeon-conteiner__description-conteiner">
                        <h4 class="cart-main-info__title-ul">Описание</h4>
                        <textarea placeholder="Текст описание"></textarea>
                    </div>

                    <div class="select-type-num">
                        <h4 class="cart-main-info__title-ul">Укажите тип номера:</h4>
                        <div class="select-type-num__conteiner">
                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="nambers" value="Зеркальные номера">
                                    <span>Зеркальные номера</span>
                                    <p class="catalog-page__filtr-element-subtitle">Номера с зеркальным отображением цифр. <br>Пример: 3223, 8558, 1441</p>
                                </label>
                            </div>

                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="nambers" value="Зеркальные номера">
                                    <span>Три цифры подряд</span>
                                    <p class="catalog-page__filtr-element-subtitle">Номера с тремя цифрами подряд.<br>Пример: 0111, 7772, 2228</p>
                                </label>
                            </div>

                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="nambers" value="Зеркальные номера">
                                    <span>Три нуля + цифра</span>
                                    <p class="catalog-page__filtr-element-subtitle">Номера с комбинацией трех нулей и одной цифрой.<br>Пример: 0001, 1000, 2000</p>
                                </label>
                            </div>

                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="nambers" value="Зеркальные номера">
                                    <span>Четыре одинаковые цифры</span>
                                    <p class="catalog-page__filtr-element-subtitle">Номера с полностью одинаковыми цифрами.<br>Пример: 0000, 1111, 2222</p>
                                </label>
                            </div>
                        </div>
                        <div class="select-type-num__bt-line">
                            <a href="" class="btn1">
                                Опубликовать объявление
                            </a>
                            <a href="" class="btn1">Опубликовать как VIP</a>
                        </div>
                    </div>

                </div>

                <aside class="catalog__filtr ads-sitebar ads-sitebar_user-account aside-old">
                    <div class="catalog__filt-baner-conteiner">
                        <a href="" class="baner-box">
                            <img src="img/_src/baner1.jpg" alt="">
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
