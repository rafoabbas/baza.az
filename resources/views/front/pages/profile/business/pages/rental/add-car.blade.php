@extends('front.layouts.app')

@section('content')
    <section class="cart-main-info">
        <div class="general-conteiner">
            {!! $pageTitleHtml !!}
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
                                                        <option value="">Легковые</option>
                                                        <option value="">Легковые</option>
                                                        <option value="">Легковые</option>
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
                                                        <img src="{{ asset('assets/front/img/_src/del-ic.png') }}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rent-car-price-list__new-element">
                                            </div>
                                        </div>
                                        <div class="add-more-location__new-location">
                                            <div class="btn-add-del add-days">
                                                <div class="btn-add-del__icon">
                                                    <img src="{{ asset('assets/front/img/_src/add-ic.png') }}" alt="">
                                                </div>
                                                <span>Добавить дни</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="acordeon-conteiner__box acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">@lang('Şəkillər')</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/02</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper">
                                        <div class="acordeon-conteiner__photo-claster">
                                            @include('front.pages.profile.business.particles.common.main-image', [
                                                'name' => 'image',
                                                'groupClass' => 'user-acc-red-photo',
                                                'imageInfo' => 'на главном фото автосалона должно быть Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.'
                                            ])
                                            @include('front.pages.profile.business.particles.common.images', ['name' => 'images'])
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
                                    <h4 class="cart-main-info__title">@lang('Xəritədə Salon')</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/06</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    @include('front.pages.profile.business.particles.common.map')
                                </div>
                            </div>
                            <div class="save-btn-line">
                                <button class="btn1">@lang('Yadda saxla')</button>
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
