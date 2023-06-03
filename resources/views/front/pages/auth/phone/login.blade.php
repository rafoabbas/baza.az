@extends('front.layouts.app')

@section('content')
    <section class="catalog-sec-page catalog-showroom">
        <div class="general-conteiner">
            <div class="autorization-popup">
                <div class="advantages-popap__wrapper">
                    <h4 class="title_popapp">Забыли пароль?</h4>
                    <p class="advantages-popap__subtitle">
                        Забыли Ваш пароль? Введите свой номер телефона, и мы пришлем Вам секретный код.
                    </p>
                    <form action="{{ route('auth.personal.login') }}" method="post" class="advantages-popap__form">
                        @csrf
                        @dump($errors->all())

                        <div class="advantages-popap__input-conteiner input-form-conteiner">
                            <h5 class="input-form-conteiner__title">Ваш номер:</h5>
                            <div class="input-form-conteiner__claster input-form-conteiner__claster_flex input-form-conteiner__claster_select">
                                <div  class="input-form-conteiner__select-country select-country">
                                    <div class="select-country__option">
                                        <p>+994</p>
                                    </div>
                                </div>
                                <input type="text" class="input-form-conteiner__input" placeholder="50 220 00 26" name="phone" value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class="advantages-popap__btn-conteiner">
                            <button class="btn1">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
