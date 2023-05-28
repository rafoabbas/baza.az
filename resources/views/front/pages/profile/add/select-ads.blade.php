@extends('front.layouts.app')

@section('content')
    <section class="add-ads-no-regist-section">
        <div class="general-conteiner">
            <div class="add-ads-no-regist-section__row">
                <div class="add-ads-no-regist-section__type-ads type-ads type-ads_activ">
                    <div class="type-ads__icon">
                        <img src="{{ asset('assets/front/img/_src/no-reg1.svg') }}" alt="">
                    </div>
                    <h4 class="type-ads__title">
                        <span></span>
                        Легковые
                        <span></span>
                    </h4>
                </div>
                <div class="add-ads-no-regist-section__type-ads type-ads">
                    <div class="type-ads__icon">
                        <img src="{{ asset('assets/front/img/_src/no-reg2.svg') }}" alt="">
                    </div>
                    <h4 class="type-ads__title">
                        <span></span>
                        Мото
                        <span></span>
                    </h4>
                </div>
                <div class="add-ads-no-regist-section__type-ads type-ads">
                    <div class="type-ads__icon">
                        <img src="{{ asset('assets/front/img/_src/no-reg3.svg') }}" alt="">
                    </div>
                    <h4 class="type-ads__title">
                        <span></span>
                        Автономера
                        <span></span>
                    </h4>
                </div>
                <div class="add-ads-no-regist-section__type-ads type-ads">
                    <div class="type-ads__icon">
                        <img src="{{ asset('assets/front/img/_src/no-reg4.svg') }}" alt="">
                    </div>
                    <h4 class="type-ads__title">
                        <span></span>
                        Спецтехника
                        <span></span>
                    </h4>
                </div>
{{--                <div class="add-ads-no-regist-section__type-ads type-ads">--}}
{{--                    <div class="type-ads__icon">--}}
{{--                        <img src="{{ asset('assets/front/img/_src/no-reg5.svg') }}" alt="">--}}
{{--                    </div>--}}
{{--                    <h4 class="type-ads__title">--}}
{{--                        <span></span>--}}
{{--                        Водный транспорт--}}
{{--                        <span></span>--}}
{{--                    </h4>--}}
{{--                </div>--}}
            </div>
            <div class="add-ads-no-regist-section__ads-info">
                <div class="add-ads-no-regist-section__ads-wrapper">
                    <h2 class="add-ads-no-regist-section__new-ads-title">Новое объявление</h2>
                    <p class="add-ads-no-regist-section__new-ads-subtitle">Уважаемый пользователь, на платформе baza.az Вы можете размещать 3 бесплатных объявления в течении 30 дней.</p>
                    <form action="" class="add-ads-no-regist-section__form">
                        <p class="add-ads-no-regist-section__form-title">Введите номер своего телефона для размещения объявления:
                        </p>
                        <div class="add-ads-no-regist-section__form-row">
                            <div class="input-main__prise-inp">
                                <input type="text" placeholder="50 220 00 26">
                            </div>
                            <div class="add-ads-no-regist-section__form-bt-wrapper">
{{--                                <input type="submit" class="btn1" value="Продолжить">--}}
                                <a href="{{ route('add.car') }}" class="btn1">Продолжить</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
