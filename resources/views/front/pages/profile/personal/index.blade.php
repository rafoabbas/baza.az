@extends('front.layouts.app')

@section('content')
    <section class="cart-main-info section-user-account">
        <div class="general-conteiner">
           {!! $pageTitleHtml !!}
            <div class="cart-main-info__conteiner">
                <div class="cart-main-info__body-info user-account-content">
                    <div class="user-main-info">
                        <div class="user-main-info__info-conteiner">
                            <div class="user-main-info__input-user-box input-user-box">
                                <p>ID:</p>
                                <input type="text" value="{{ $user->getAttribute('id') }}" readonly>
                            </div>
                            <div class="user-main-info__inp-info input-form-conteiner">
                                <h5 class="input-form-conteiner__title">@lang('E poçta'):</h5>
                                <div class="input-form-conteiner__claster">
                                    <input type="email" name="email" class="input-form-conteiner__input" placeholder="example@gmail.com" value="{{ old('email', $user->getAttribute('email'))  }}">
                                </div>
                            </div>
                        </div>
                        <div class="user-main-info__info-conteiner">
                            <div class="user-main-info__input-user-box input-user-box">
                                <p>@lang('Telefon'):</p>
                                <input type="text" name="phone" value="{{ frontPhoneFormat($user->getAttribute('phone')) }}" readonly>
                            </div>
                            <div class="user-main-info__inp-info input-form-conteiner">
                                <h5 class="input-form-conteiner__title">@lang('Soyad, Ad'):</h5>
                                <div class="input-form-conteiner__claster">
                                    <input name="name" type="text" class="input-form-conteiner__input" placeholder="Гейдар Сулейман оглы" value="{{ old('name', $user->getAttribute('name'))  }}">
                                </div>
                            </div>
{{--                            <div class="catalog__filtr__filtr-element user-main-info__checbox-conteiner">--}}
{{--                                <div class="checkbox">--}}
{{--                                    <label class="custom-checkbox">--}}
{{--                                        <input type="checkbox" name="sotialuser" value="Есть в Telegram">--}}
{{--                                        <span>Есть в Telegram</span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                                <div class="checkbox">--}}
{{--                                    <label class="custom-checkbox">--}}
{{--                                        <input type="checkbox" name="sotialuser" value="Есть в Viber">--}}
{{--                                        <span>Есть в Viber</span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                                <div class="checkbox">--}}
{{--                                    <label class="custom-checkbox">--}}
{{--                                        <input type="checkbox" checked name="sotialuser" value="Есть в Telegram">--}}
{{--                                        <span>Есть в WhatsApp</span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="user-main-info__control-bt-conteiner control-bt-conteiner">--}}
{{--                                <a href="{{ route('profile.logout') }}"--}}
{{--                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();"--}}
{{--                                   class="control-bt-conteiner__box">--}}
{{--                                    <div class="control-bt-conteiner__icon">--}}
{{--                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M14.5 12.8333C14.0392 12.8333 13.6667 13.2067 13.6667 13.6667V17C13.6667 17.4592 13.2933 17.8333 12.8333 17.8333H10.3333V5.33333C10.3333 4.62167 9.88 3.98583 9.19833 3.74917L8.95167 3.66667H12.8333C13.2933 3.66667 13.6667 4.04083 13.6667 4.5V7C13.6667 7.46 14.0392 7.83333 14.5 7.83333C14.9608 7.83333 15.3333 7.46 15.3333 7V4.5C15.3333 3.12167 14.2117 2 12.8333 2H3.875C3.84333 2 3.81667 2.01417 3.78583 2.01833C3.74583 2.015 3.7075 2 3.66667 2C2.7475 2 2 2.7475 2 3.66667V18.6667C2 19.3783 2.45333 20.0142 3.135 20.2508L8.15 21.9225C8.32 21.975 8.48917 22 8.66667 22C9.58583 22 10.3333 21.2525 10.3333 20.3333V19.5H12.8333C14.2117 19.5 15.3333 18.3783 15.3333 17V13.6667C15.3333 13.2067 14.9608 12.8333 14.5 12.8333Z" fill="#768A9E"/>--}}
{{--                                            <path d="M21.755 9.74319L18.4217 6.40985C18.1834 6.17152 17.825 6.09985 17.5134 6.22902C17.2025 6.35819 16.9992 6.66235 16.9992 6.99902V9.49902H13.6659C13.2059 9.49902 12.8325 9.87235 12.8325 10.3324C12.8325 10.7924 13.2059 11.1657 13.6659 11.1657H16.9992V13.6657C16.9992 14.0024 17.2025 14.3065 17.5134 14.4357C17.825 14.5649 18.1834 14.4932 18.4217 14.2549L21.755 10.9215C22.0809 10.5957 22.0809 10.069 21.755 9.74319Z" fill="#768A9E"/>--}}
{{--                                        </svg>--}}
{{--                                    </div>--}}
{{--                                    <p class="control-bt-conteiner__title">@lang('Çıkış')</p>--}}
{{--                                </a>--}}
{{--                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            </div>--}}
                        </div>
                        <div class="save-info" style="display: flex; gap: 24px; align-items: center">
                            <button class="btn1">@lang('Yadda saxla')</button>
                            <a href="{{ route('profile.logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                               class="control-bt-conteiner__box" style="display: flex; gap: 5px">
                                <div class="control-bt-conteiner__icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.5 12.8333C14.0392 12.8333 13.6667 13.2067 13.6667 13.6667V17C13.6667 17.4592 13.2933 17.8333 12.8333 17.8333H10.3333V5.33333C10.3333 4.62167 9.88 3.98583 9.19833 3.74917L8.95167 3.66667H12.8333C13.2933 3.66667 13.6667 4.04083 13.6667 4.5V7C13.6667 7.46 14.0392 7.83333 14.5 7.83333C14.9608 7.83333 15.3333 7.46 15.3333 7V4.5C15.3333 3.12167 14.2117 2 12.8333 2H3.875C3.84333 2 3.81667 2.01417 3.78583 2.01833C3.74583 2.015 3.7075 2 3.66667 2C2.7475 2 2 2.7475 2 3.66667V18.6667C2 19.3783 2.45333 20.0142 3.135 20.2508L8.15 21.9225C8.32 21.975 8.48917 22 8.66667 22C9.58583 22 10.3333 21.2525 10.3333 20.3333V19.5H12.8333C14.2117 19.5 15.3333 18.3783 15.3333 17V13.6667C15.3333 13.2067 14.9608 12.8333 14.5 12.8333Z" fill="#768A9E"/>
                                        <path d="M21.755 9.74319L18.4217 6.40985C18.1834 6.17152 17.825 6.09985 17.5134 6.22902C17.2025 6.35819 16.9992 6.66235 16.9992 6.99902V9.49902H13.6659C13.2059 9.49902 12.8325 9.87235 12.8325 10.3324C12.8325 10.7924 13.2059 11.1657 13.6659 11.1657H16.9992V13.6657C16.9992 14.0024 17.2025 14.3065 17.5134 14.4357C17.825 14.5649 18.1834 14.4932 18.4217 14.2549L21.755 10.9215C22.0809 10.5957 22.0809 10.069 21.755 9.74319Z" fill="#768A9E"/>
                                    </svg>
                                </div>
                                <p class="control-bt-conteiner__title">@lang('Çıkış')</p>
                            </a>
                        </div>
                        <form id="logout-form" action="{{ route('profile.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    <div class="user-account-ads">
                        <h4 class="user-account-ads__title">Ваши объявления</h4>
                        <div class="user-account-ads__conteiner">
                            <h4 class="cart-main-info__title-ul">Продажа авто:</h4>
                            <div class="user-account-ads__ads-line ads-body__conteiner">
                                @foreach([0,1,2] as $item)
                                <div class="card-box card-box-user">
                                    <div class="ads_image">
                                        <img src="{{ asset('assets/front/img/_src/car7.jpg') }}" alt="">
                                    </div>
                                    <div class="card-box__info">
                                        <h3 class="card-box__title">
                                            <a href="">Ford Focus Sport Plus Ford Focus Sport</a>
                                        </h3>
                                        <div class="card-box-user__line-data">
                                            <p class="card-box__date">08.02.2021, 16:58</p>
                                            <p class="card-box__date"><b>Объявление №</b> 234 345 345</p>
                                        </div>
                                        <div class="card-box-user__prise-line">
                                            <span class="card-box__prise">8 900$</span>
                                            <span class="card-box-user__viev">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0)">
                                                        <path d="M12 4.84668C7.41454 4.84668 3.25621 7.35543 0.187788 11.4303C-0.0625959 11.7641 -0.0625959 12.2305 0.187788 12.5644C3.25621 16.6442 7.41454 19.1529 12 19.1529C16.5855 19.1529 20.7438 16.6442 23.8122 12.5693C24.0626 12.2354 24.0626 11.769 23.8122 11.4352C20.7438 7.35543 16.5855 4.84668 12 4.84668ZM12.3289 17.0369C9.28506 17.2284 6.7714 14.7196 6.96287 11.6709C7.11998 9.1572 9.15741 7.11977 11.6711 6.96267C14.7149 6.7712 17.2286 9.27994 17.0371 12.3287C16.8751 14.8375 14.8377 16.8749 12.3289 17.0369ZM12.1767 14.7098C10.537 14.8129 9.18196 13.4628 9.28997 11.8231C9.37343 10.468 10.4732 9.37322 11.8282 9.28485C13.4679 9.18175 14.823 10.5319 14.7149 12.1716C14.6266 13.5316 13.5268 14.6264 12.1767 14.7098Z" fill="#324153"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0">
                                                            <rect width="24" height="24" fill="white"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <p>3 484</p>
                                            </span>
                                        </div>
                                        <div class="card-box-user__controls-conteiner">
                                            <div class="card-box-user__controls-box controls-box-ads">
                                                <div class="controls-box-ads__icon">
                                                    <img src="{{ asset('assets/front/img/_src/c_redact.png') }}" alt="">
                                                </div>
                                                <p>Редактировать</p>
                                            </div>
                                            <div class="card-box-user__controls-box controls-box-ads">
                                                <div class="controls-box-ads__icon">
                                                    <img src="{{ asset('assets/front/img/_src/c_viev.png') }}" alt="">
                                                </div>
                                                <p>Просмотреть</p>
                                            </div>
                                            <div class="card-box-user__controls-box controls-box-ads">
                                                <div class="controls-box-ads__icon">
                                                    <img src="{{ asset('assets/front/img/_src/c_vip.png') }}" alt="">
                                                </div>
                                                <p>Сделать VIP</p>
                                            </div>
                                            <div class="card-box-user__controls-box controls-box-ads controls-box-ads_remove-style">
                                                <div class="controls-box-ads__icon">
                                                    <img src="{{ asset('assets/front/img/_src/c_remove.png') }}" alt="">
                                                </div>
                                                <p>Удалить</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <a href="" class="card-box card-box-user card-box-user__add-ads">
                                    <div class="card-box-user__add-ads-conteiner">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M31.6665 18.3332H21.6665V8.33317C21.6665 7.89114 21.4909 7.46722 21.1783 7.15466C20.8658 6.8421 20.4419 6.6665 19.9998 6.6665C19.5578 6.6665 19.1339 6.8421 18.8213 7.15466C18.5088 7.46722 18.3332 7.89114 18.3332 8.33317V18.3332H8.33317C7.89114 18.3332 7.46722 18.5088 7.15466 18.8213C6.8421 19.1339 6.6665 19.5578 6.6665 19.9998C6.6665 20.4419 6.8421 20.8658 7.15466 21.1783C7.46722 21.4909 7.89114 21.6665 8.33317 21.6665H18.3332V31.6665C18.3332 32.1085 18.5088 32.5325 18.8213 32.845C19.1339 33.1576 19.5578 33.3332 19.9998 33.3332C20.4419 33.3332 20.8658 33.1576 21.1783 32.845C21.4909 32.5325 21.6665 32.1085 21.6665 31.6665V21.6665H31.6665C32.1085 21.6665 32.5325 21.4909 32.845 21.1783C33.1576 20.8658 33.3332 20.4419 33.3332 19.9998C33.3332 19.5578 33.1576 19.1339 32.845 18.8213C32.5325 18.5088 32.1085 18.3332 31.6665 18.3332Z" fill="#768A9E"/>
                                        </svg>
                                        <p>Добавить объявление по продаже</p>
                                    </div>
                                </a>
                            </div>
                            <div class="load-more-ads">
                                <button class="btn1">Показать еще</button>
                            </div>
                        </div>
                        <div class="user-account-ads__conteiner">
                            <h4 class="cart-main-info__title-ul">Продажа автономера:</h4>
                            <div class="user-account-ads__ads-line ads-body__conteiner">
                                @foreach([0,1,2] as $item)
                                <div class="card-box card-box-user">
                                    <a href="" class="ads-namber-box__image-num">
                                        <img src="{{ asset('assets/front/img/_src/namber-image.png') }}" alt="">
                                    </a>
                                    <div class="card-box__info">
                                        <h3 class="card-box__title">
                                            <a href="">Ford Focus Sport Plus Ford Focus Sport</a>
                                        </h3>
                                        <div class="card-box-user__line-data">
                                            <p class="card-box__date">08.02.2021, 16:58</p>
                                            <p class="card-box__date"><b>Объявление №</b> 234 345 345</p>
                                        </div>
                                        <div class="card-box-user__prise-line">
                                            <span class="card-box__prise">8 900$</span>
                                            <span class="card-box-user__viev">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0)">
                                                        <path d="M12 4.84668C7.41454 4.84668 3.25621 7.35543 0.187788 11.4303C-0.0625959 11.7641 -0.0625959 12.2305 0.187788 12.5644C3.25621 16.6442 7.41454 19.1529 12 19.1529C16.5855 19.1529 20.7438 16.6442 23.8122 12.5693C24.0626 12.2354 24.0626 11.769 23.8122 11.4352C20.7438 7.35543 16.5855 4.84668 12 4.84668ZM12.3289 17.0369C9.28506 17.2284 6.7714 14.7196 6.96287 11.6709C7.11998 9.1572 9.15741 7.11977 11.6711 6.96267C14.7149 6.7712 17.2286 9.27994 17.0371 12.3287C16.8751 14.8375 14.8377 16.8749 12.3289 17.0369ZM12.1767 14.7098C10.537 14.8129 9.18196 13.4628 9.28997 11.8231C9.37343 10.468 10.4732 9.37322 11.8282 9.28485C13.4679 9.18175 14.823 10.5319 14.7149 12.1716C14.6266 13.5316 13.5268 14.6264 12.1767 14.7098Z" fill="#324153"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0">
                                                            <rect width="24" height="24" fill="white"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <p>3 484</p>
                                            </span>
                                        </div>
                                        <div class="card-box-user__controls-conteiner">
                                            <div class="card-box-user__controls-box controls-box-ads">
                                                <div class="controls-box-ads__icon">
                                                    <img src="{{ asset('assets/front/img/_src/c_redact.png') }}" alt="">
                                                </div>
                                                <p>Редактировать</p>
                                            </div>
                                            <div class="card-box-user__controls-box controls-box-ads">
                                                <div class="controls-box-ads__icon">
                                                    <img src="{{ asset('assets/front/img/_src/c_viev.png') }}" alt="">
                                                </div>
                                                <p>Просмотреть</p>
                                            </div>

                                            <div class="card-box-user__controls-box controls-box-ads">
                                                <div class="controls-box-ads__icon">
                                                    <img src="{{ asset('assets/front/img/_src/c_vip.png') }}" alt="">
                                                </div>
                                                <p>Сделать VIP</p>
                                            </div>

                                            <div class="card-box-user__controls-box controls-box-ads controls-box-ads_remove-style">
                                                <div class="controls-box-ads__icon">
                                                    <img src="{{ asset('assets/front/img/_src/c_remove.png') }}" alt="">
                                                </div>
                                                <p>Удалить</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <a href="{{ route('add.number') }}" class="card-box card-box-user card-box-user__add-ads">
                                    <div class="card-box-user__add-ads-conteiner">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M31.6665 18.3332H21.6665V8.33317C21.6665 7.89114 21.4909 7.46722 21.1783 7.15466C20.8658 6.8421 20.4419 6.6665 19.9998 6.6665C19.5578 6.6665 19.1339 6.8421 18.8213 7.15466C18.5088 7.46722 18.3332 7.89114 18.3332 8.33317V18.3332H8.33317C7.89114 18.3332 7.46722 18.5088 7.15466 18.8213C6.8421 19.1339 6.6665 19.5578 6.6665 19.9998C6.6665 20.4419 6.8421 20.8658 7.15466 21.1783C7.46722 21.4909 7.89114 21.6665 8.33317 21.6665H18.3332V31.6665C18.3332 32.1085 18.5088 32.5325 18.8213 32.845C19.1339 33.1576 19.5578 33.3332 19.9998 33.3332C20.4419 33.3332 20.8658 33.1576 21.1783 32.845C21.4909 32.5325 21.6665 32.1085 21.6665 31.6665V21.6665H31.6665C32.1085 21.6665 32.5325 21.4909 32.845 21.1783C33.1576 20.8658 33.3332 20.4419 33.3332 19.9998C33.3332 19.5578 33.1576 19.1339 32.845 18.8213C32.5325 18.5088 32.1085 18.3332 31.6665 18.3332Z" fill="#768A9E"/>
                                        </svg>
                                        <p>Добавить объявление по продаже</p>
                                    </div>
                                </a>
                            </div>
                            <div class="load-more-ads">
                                <button class="btn1">Показать еще</button>
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
