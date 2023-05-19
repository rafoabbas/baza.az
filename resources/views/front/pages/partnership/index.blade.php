@extends('front.layouts.app')

@section('content')
    <section class="partnership">
        <div class="general-conteiner">
            <h2 class="cart-main-info__title">Новый Mercedes-Benz GLE-Class Coupe AMG 53 AT 4Matic+ 2020</h2>
            <div class="catalog_bread-crumbs">
                <a href="">Главная</a>
                <a href="">/ Все легковые автомобили</a>
                <p>/ Все легковые автомобили</p>
            </div>
            <div class="partnership__conteiner">
                <aside class="partnership__aside">
                    <nav class="partnership__nav">
                        <div class="partnership__nav-box">
                            <h4 class="partnership__nav-title">Частным лицам</h4>
                            <ul class="partnership__list">
                                <li><a href="">Продать авто</a></li>
                                <li><a href="">Продать номер</a></li>
                                <li><a href="">Работа у нас</a></li>
                            </ul>
                        </div>
                        <div class="partnership__nav-box">
                            <h4 class="partnership__nav-title">Бизнесу</h4>
                            <ul class="partnership__list">
                                <li><a href="">Автосалонам</a></li>
                                <li><a href="">Для СТО</a></li>
                                <li><a href="">Сдать авто в аренду</a></li>
                                <li><a href="">Автомагазинам</a></li>
                            </ul>
                        </div>
                    </nav>
                </aside>
                <div class="partnership__info-conteiner">
                    <div class="partnership__claster">
                        <h2 class="partnership__claster-title">Часным лицам</h2>
                        <div class="partnership__box">
                            <div class="partnership__box-info">
                                <h3 class="partnership__box-title">Продать авто</h3>
                                <div class="partnership__box-redactor-text box-redactor-text">
                                    <p>На нашем сервисе Вы можете разместить объявление о продаже автомобилей. Наш сайт в сутки посещает около 3 000 человек, за месяц через наш сайт продают 2 000 автомобилей. Для подачи объявления необходимо пройти <b>регистрацию</b>. </p>
                                    <ul>
                                        <li>Одно объявление в месяц <b>бесплатно.</b> </li>
                                        <li>Стоимость со второго — <b>8$.</b>  </li>
                                    </ul>
                                </div>
                                <div class="partnership__box-line-btn">
                                    <a href="" class="btn2"><p>Пройти регистрацию</p></a>
                                </div>
                            </div>
                            <div class="partnership__image">
                                <h3 class="partnership__box-title_mobile">Продать авто</h3>
                                <img src="{{ asset('assets/front/img/_src/car7.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="partnership__box partnership__box_revers">
                            <div class="partnership__box-info">
                                <h3 class="partnership__box-title">Продать автономер</h3>
                                <div class="partnership__box-redactor-text box-redactor-text">
                                    <p>Lorem ipsum dolor sit amet, conctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud упражнения ullamco labouris nisi ut aliquip ex ea Commodo Conquat. Duis a volute dolore dolor conquat. velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                </div>
                                <div class="partnership__box-line-btn">
                                    <a href="" class="btn2"><p>Пройти регистрацию</p></a>
                                </div>
                            </div>
                            <div class="partnership__image">
                                <h3 class="partnership__box-title_mobile">Продать автономер</h3>
                                <img src="{{ asset('assets/front/img/_src/car-doc.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="form-callback form-callback_partnership ">
                        <form class="form-callback__form">
                            <h4 class="form-callback__title">Напишите нам!</h4>
                            <p class="form-callback__subtitle">Хотите разместить свое СТО у нас? Оставьте заявку и мы свяжемся с Вами в&nbsp;ближайшее время.</p>
                            <div class="form-callback__input-box">
                                <input type="text" placeholder="Имя">
                            </div>
                            <div class="form-callback__input-box">
                                <input type="text" placeholder="Телефон">
                            </div>
                            <div class="form-callback__input-box">
                                <input type="text" placeholder="E-mail">
                            </div>
                            <div class="form-callback__button-submit-conteiner">
                                <input type="submit" value="Отправить">
                            </div>
                        </form>
                    </div>
                    <div class="partnership__claster">
                        <h2 class="partnership__claster-title">Бизнесу</h2>
                        <div class="partnership__box">
                            <div class="partnership__box-info">
                                <h3 class="partnership__box-title">Автосалонам</h3>
                                <div class="partnership__box-redactor-text box-redactor-text">
                                    <p>На нашем сервисе Вы можете разместить объявление о продаже автомобилей. Наш сайт в сутки посещает около 3 000 человек, за месяц через наш сайт продают 2 000 автомобилей. Для подачи объявления необходимо пройти <b>регистрацию</b>. </p>
                                    <ul>
                                        <li>Одно объявление в месяц <b>бесплатно.</b> </li>
                                        <li>Стоимость со второго — <b>8$.</b>  </li>
                                    </ul>
                                </div>
                                <div class="partnership__box-line-btn">
                                    <a href="" class="btn2"><p>Регистрация автосалона</p></a>
                                </div>
                            </div>
                            <div class="partnership__image">
                                <h3 class="partnership__box-title_mobile">Автосалонам</h3>
                                <img src="{{ asset('assets/front/img/_src/autostore2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="partnership__box partnership__box_revers">
                            <div class="partnership__box-info">
                                <h3 class="partnership__box-title">Для СТО</h3>
                                <div class="partnership__box-redactor-text box-redactor-text">
                                    <p>Lorem ipsum dolor sit amet, conctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud упражнения ullamco labouris nisi ut aliquip ex ea Commodo Conquat. Duis a volute dolore dolor conquat. velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                </div>
                                <div class="partnership__box-line-btn">
                                    <a href="" class="btn2"><p>Регистрация СТО</p></a>
                                </div>
                            </div>
                            <div class="partnership__image">
                                <h3 class="partnership__box-title_mobile">Для СТО</h3>
                                <img src="{{ asset('assets/front/img/_src/store6.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="partnership__box">
                            <div class="partnership__box-info">
                                <h3 class="partnership__box-title">Автомагазинам</h3>
                                <div class="partnership__box-redactor-text box-redactor-text">
                                    <p>На нашем сервисе Вы можете разместить объявление о продаже автомобилей. Наш сайт в сутки посещает около 3 000 человек, за месяц через наш сайт продают 2 000 автомобилей. Для подачи объявления необходимо пройти <b>регистрацию</b>. </p>
                                    <ul>
                                        <li>Одно объявление в месяц <b>бесплатно.</b> </li>
                                        <li>Стоимость со второго — <b>8$.</b>  </li>
                                    </ul>
                                </div>
                                <div class="partnership__box-line-btn">
                                    <a href="" class="btn2"><p>Регистрация автомагазина</p></a>
                                </div>
                            </div>
                            <div class="partnership__image">
                                <h3 class="partnership__box-title_mobile">Автомагазинам</h3>
                                <img src="{{ asset('assets/front/img/_src/store2.jpg') }}" alt="">
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
