@extends('front.layouts.app')

@section('title', 'asdasd')

@section('content')
    <section class="catalog-sec-page catalog-showroom">
        <div class="general-conteiner">
            <div class="autorization-popup">
                <div class="advantages-popap__wrapper">
                    <h4 class="title_popapp">Вход в личный кабинет</h4>
                    <p class="advantages-popap__subtitle">
                        Вы еще не зарегистрированы?<br>
                        <a class="open_advantages-popup " data-advantages-open="registr-user">Регистрация для частных лиц</a><br>
                        <a class="open_advantages-popup" data-advantages-open="registr-business">Регистрация для бизнеса</a>
                    </p>
                    <form action="{{ route('auth.business.password.email') }}" method="post" class="advantages-popap__form">
                        @csrf
                        <div class="advantages-popap__input-conteiner input-form-conteiner">
                            <h5 class="input-form-conteiner__title">@lang('Epoçt'):</h5>
                            <div class="input-form-conteiner__claster ">
                                <input type="text" name="email" class="input-form-conteiner__input @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="">
                            </div>
                            @error('email')
                            <span class="validate-text">
                                    <smal class="text-danger">{{ $message }}</smal>
                                </span>
                            @enderror
                        </div>

                        <div class="advantages-popap__btn-conteiner">
                            <button class="btn1">Войти</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
