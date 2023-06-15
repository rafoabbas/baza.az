@extends('front.layouts.app')

@section('content')
    <section class="catalog-sec-page catalog-showroom">
        <div class="general-conteiner">
            <div class="autorization-popup">
                <div class="advantages-popap__wrapper">
                    <h4 class="title_popapp">Вход в личный кабинет</h4>
                    <p class="advantages-popap__subtitle">
                        Вы еще не зарегистрированы?<br>
                        <a class="open_advantages-popup " data-advantages-open="registr-user">Регистрация для частных
                            лиц</a><br>
                        <a class="open_advantages-popup" data-advantages-open="registr-business">Регистрация для
                            бизнеса</a>
                    </p>
                    <form action="{{ route('auth.business.login') }}" method="post" class="advantages-popap__form">
                        @csrf
                        <div class="advantages-popap__input-conteiner input-form-conteiner">
                            <h5 class="input-form-conteiner__title">Ваш номер:</h5>
                            <div class="input-form-conteiner__claster ">
                                <input type="text" name="phone"
                                       class="input-form-conteiner__input @error('phone') is-invalid @enderror"
                                       value="{{ old('phone') }}" placeholder="">
                            </div>
                            @error('phone')
                            <span class="validate-text">
                                    <smal class="text-danger">{{ $message }}</smal>
                                </span>
                            @enderror
                        </div>
                        <div class="advantages-popap__input-conteiner input-form-conteiner">
                            <h5 class="input-form-conteiner__title">Ваш пароль:</h5>
                            <div
                                class="input-form-conteiner__claster input-form-conteiner__claster_flex input-form-conteiner__claster_pass">
                                <input type="password" name="password"
                                       class="input-form-conteiner__input @error('password') is-invalid @enderror"
                                       placeholder="************">
                                <div class="input-form-conteiner__change-viev-pass">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path
                                                d="M8 3.23145C4.94303 3.23145 2.17081 4.90394 0.125192 7.62052C-0.0417306 7.84309 -0.0417306 8.15402 0.125192 8.37658C2.17081 11.0964 4.94303 12.7689 8 12.7689C11.057 12.7689 13.8292 11.0964 15.8748 8.37985C16.0417 8.15729 16.0417 7.84636 15.8748 7.6238C13.8292 4.90394 11.057 3.23145 8 3.23145ZM8.21929 11.3583C6.19004 11.4859 4.51427 9.81342 4.64191 7.7809C4.74665 6.10513 6.10494 4.74684 7.78071 4.6421C9.80996 4.51446 11.4857 6.18695 11.3581 8.21948C11.2501 9.89198 9.89179 11.2503 8.21929 11.3583ZM8.11783 9.80688C7.02465 9.87561 6.1213 8.97554 6.19331 7.88236C6.24895 6.97902 6.9821 6.24914 7.88545 6.19023C8.97862 6.12149 9.88197 7.02157 9.80996 8.11474C9.75105 9.02136 9.0179 9.75124 8.11783 9.80688Z"
                                                fill="#768A9E"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="16" height="16" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            @error('password')
                            <span class="validate-text">
                                    <smal class="text-danger">{{ $message }}</smal>
                                </span>
                            @else
                                <p class="input-form-conteiner__subtitle">не менее 8 символов</p>
                            @enderror
                        </div>
                        <a href="{{ route('auth.business.password.request') }}" class="input-form-conteiner">
                            <h5 class="input-form-conteiner__title forgot-pass-btn open_advantages-popup">Забыли пароль?</h5>
                        </a>
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
