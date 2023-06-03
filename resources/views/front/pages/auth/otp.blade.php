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
                    <form action="" class="advantages-popap__form">
                        <div class="advantages-popap__input-conteiner input-form-conteiner">
                            <h5 class="input-form-conteiner__title">Секретный код (6 цифр):</h5>
                            <div class="input-form-conteiner__claster">
                                <input type="text" class="input-form-conteiner__input" placeholder="">
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
