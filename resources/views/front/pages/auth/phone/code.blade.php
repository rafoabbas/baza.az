@extends('front.layouts.app')

@section('content')
    <section class="catalog-sec-page catalog-showroom">
        <div class="general-conteiner">
            <div class="autorization-popup">
                <div class="advantages-popap__wrapper">
                    <h4 class="title_popapp">Сброс пароля</h4>
                    <p class="advantages-popap__subtitle">
                        Мы уже отправили защитный код на ваш номер: <span class="restart-pas-nam">+380 999 99 99 99</span>
                    </p>
                    @dump($errors->all())
                    <form action="{{ route('auth.personal.code') }}" method="post" class="advantages-popap__form">
                        @csrf
                        <input type="hidden" name="phone" value="{{ session('auth.phone') }}">
                        <div class="advantages-popap__input-conteiner input-form-conteiner">
                            <h5 class="input-form-conteiner__title">Секретный код (6 цифр):</h5>
                            <div class="input-form-conteiner__claster">
                                <input type="text" name="code" value="{{ old('code', session('auth.code')) }}" class="input-form-conteiner__input" placeholder="">
                            </div>
                        </div>
                        <div class="advantages-popap__btn-conteiner">
                            <button class="btn1">Подтвердить</button>
                            <button class="btn1">Отправить снова</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
