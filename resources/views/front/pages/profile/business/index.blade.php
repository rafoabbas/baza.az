@extends('front.layouts.app')

@section('content')
    <section class="cart-main-info">
        <div class="general-conteiner">
            {!! $pageTitleHtml !!}
            <div class="cart-main-info__conteiner">
                @include('front.pages.profile.business.layout.partials.navbar')
                <div class="cart-main-info__body-info cart-main-info__body-info_account">
                    <form action="{{ route('profile.update') }}" method="post" class="user-account-busines-claster">
                        @csrf
                        @method('put')
                        <div class="user-main-info__info-conteiner">
                            <div class="user-main-info__input-user-box input-user-box">
                                <p>ID:</p>
                                <input type="text" value="{{ $user->getAttribute('id') }}" readonly>
                            </div>
                            <div class="user-main-info__inp-info input-form-conteiner">
                                <h5 class="input-form-conteiner__title">Телефон администратора:</h5>
                                <div class="user-main-info__input-user-box input-user-box">
                                    <input type="text" name="phone" value="{{ frontPhoneFormat($user->getAttribute('phone')) }}" readonly>
                                </div>
                            </div>
                            <div class="user-main-info__inp-info input-form-conteiner">
                                <h5 class="input-form-conteiner__title">@lang('E poçta'):</h5>
                                <div class="user-main-info__input-user-box input-user-box">
                                    <input type="text" name="email" value="{{ $user->getAttribute('email') }}" readonly>
                                </div>
                            </div>
                            <div class="user-main-info__inp-info input-form-conteiner">
                                <h5 class="input-form-conteiner__title">@lang('Soyad, Ad'):</h5>
                                <div class="input-form-conteiner__claster">
                                    <input name="name" type="text" class="input-form-conteiner__input @error('name') is-invalid @enderror" placeholder="Гейдар Сулейман оглы" value="{{ old('name', $user->getAttribute('name'))  }}">
                                </div>
                                @error('name')
                                <span class="validate-text">
                                    <smal class="text-danger">{{ $message }}</smal>
                                </span>
                                @enderror
                            </div>
                            <div class="user-main-info__inp-info input-form-conteiner">
                                <h5 class="input-form-conteiner__title">@lang('Şirkətin adı:')</h5>
                                <div class="input-form-conteiner__claster">
                                    <input name="company_name" type="text" class="input-form-conteiner__input @error('company_name') is-invalid @enderror" placeholder="ООО «Легис»" value="{{ old('company_name', $user->getAttribute('company_name'))  }}">
                                </div>
                                @error('company_name')
                                <span class="validate-text">
                                    <smal class="text-danger">{{ $message }}</smal>
                                </span>
                                @enderror
                            </div>
                            <div class="user-main-info__inp-info input-form-conteiner">
                                <h5 class="input-form-conteiner__title">@lang('TIN'):</h5>
                                <div class="input-form-conteiner__claster">
                                    <input name="tin" type="text" class="input-form-conteiner__input @error('tin') is-invalid @enderror" placeholder="322 826 9282 52" value="{{ old('tin', $user->getAttribute('tin'))  }}">
                                </div>
                                @error('tin')
                                <span class="validate-text">
                                    <smal class="text-danger">{{ $message }}</smal>
                                </span>
                                @enderror
                            </div>
                            <div class="user-main-info__control-bt-conteiner control-bt-conteiner control-bt-conteiner_flex">
                                <div class="control-bt-conteiner__box">
                                    <div class="control-bt-conteiner__icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.5 6.99997C20.103 6.99997 20.7056 7.13131 21.291 7.39011C21.4482 7.45995 21.6323 7.4443 21.7754 7.34567C21.918 7.24803 22.0005 7.08345 21.9926 6.91063C21.9448 5.83934 21.0693 5 20 5H1.99997C0.896953 5 0 5.89695 0 6.99997V12C0 13.103 0.896953 14 2.00002 14H13.5C13.7764 14 14 13.7764 14 13.5V13C14 12.3603 14.316 11.7529 14.8442 11.375C14.9604 11.2919 15.0356 11.1635 15.0508 11.0219C15.2974 8.729 17.2104 6.99997 19.5 6.99997ZM4.6162 9.56689C4.85545 9.70508 4.93748 10.0108 4.7993 10.25C4.70653 10.4102 4.53853 10.5 4.3657 10.5C4.28072 10.5 4.1948 10.4785 4.11619 10.4331L3.99998 10.366V10.5C3.99998 10.7764 3.77634 11 3.49997 11C3.22364 11 3 10.7764 3 10.5V10.366L2.8838 10.4331C2.80519 10.4785 2.71927 10.5 2.63428 10.5C2.46141 10.5 2.29345 10.4101 2.20069 10.25C2.0625 10.0108 2.14453 9.70508 2.38378 9.56689L2.4997 9.5L2.38378 9.43311C2.14453 9.29492 2.0625 8.98925 2.20069 8.75C2.33888 8.51075 2.64502 8.42872 2.8838 8.56691L3 8.63394V8.49997C3 8.22359 3.22364 7.99995 3.50002 7.99995C3.77639 7.99995 4.00003 8.22359 4.00003 8.49997V8.63394L4.11623 8.56686C4.35356 8.42867 4.66069 8.5107 4.79934 8.74995C4.93753 8.9892 4.8555 9.29488 4.61625 9.43306L4.50033 9.49995L4.6162 9.56689ZM8.61623 9.56689C8.85548 9.70508 8.93752 10.0108 8.79933 10.25C8.70656 10.4102 8.53856 10.5 8.36573 10.5C8.28075 10.5 8.19483 10.4785 8.11622 10.4331L8.00002 10.366V10.5C8.00002 10.7764 7.77637 11 7.5 11C7.22363 11 6.99998 10.7764 6.99998 10.5V10.366L6.88378 10.4331C6.80517 10.4785 6.71925 10.5 6.63427 10.5C6.46139 10.5 6.29344 10.4101 6.20067 10.25C6.06248 10.0108 6.14452 9.70508 6.38377 9.56689L6.49969 9.5L6.38377 9.43311C6.14452 9.29492 6.06248 8.98925 6.20067 8.75C6.33839 8.51075 6.64402 8.42872 6.88378 8.56691L6.99998 8.63398V8.50002C6.99998 8.22364 7.22363 8 7.5 8C7.77637 8 8.00002 8.22364 8.00002 8.50002V8.63398L8.11622 8.56691C8.35402 8.42872 8.66016 8.51075 8.79933 8.75C8.93752 8.98925 8.85548 9.29492 8.61623 9.43311L8.50031 9.5L8.61623 9.56689ZM12.6162 9.56689C12.8555 9.70508 12.9375 10.0108 12.7993 10.25C12.7065 10.4102 12.5385 10.5 12.3657 10.5C12.2807 10.5 12.1948 10.4785 12.1162 10.4331L12 10.366V10.5C12 10.7764 11.7764 11 11.5 11C11.2236 11 11 10.7764 11 10.5V10.366L10.8838 10.4331C10.8052 10.4785 10.7192 10.5 10.6342 10.5C10.4614 10.5 10.2934 10.4101 10.2007 10.25C10.0625 10.0108 10.1445 9.70508 10.3837 9.56689L10.4997 9.5L10.3837 9.43311C10.1445 9.29492 10.0625 8.98925 10.2007 8.75C10.3384 8.51075 10.6445 8.42872 10.8838 8.56691L11 8.63398V8.50002C11 8.22364 11.2236 8 11.5 8C11.7764 8 12 8.22364 12 8.50002V8.63398L12.1162 8.56691C12.3545 8.42872 12.6607 8.51075 12.7993 8.75C12.9375 8.98925 12.8555 9.29492 12.6162 9.43311L12.5003 9.5L12.6162 9.56689Z" fill="#768A9E"/>
                                            <path d="M23 12V11.5C23 9.57032 21.4297 8 19.5 8C17.5703 8 16 9.57032 16 11.5V12C15.4487 12 15 12.4488 15 13V18.0001C15 18.5513 15.4487 19 16 19H23C23.5512 19 24 18.5513 24 18.0001V13C24 12.4488 23.5513 12 23 12ZM20 15.8463V16.5C20 16.7764 19.7764 17.0001 19.5 17.0001C19.2236 17.0001 19 16.7764 19 16.5V15.8463C18.7066 15.6717 18.5 15.3652 18.5 15C18.5 14.4488 18.9487 14.0001 19.5 14.0001C20.0512 14.0001 20.4999 14.4488 20.4999 15C20.5 15.3653 20.2933 15.6717 20 15.8463ZM21 12H18V11.5C18 10.6729 18.6728 10 19.5 10C20.3272 10 21 10.6729 21 11.5V12Z" fill="#768A9E"/>
                                        </svg>
                                    </div>
                                    <p class="control-bt-conteiner__title">@lang('Parolu dəyişdirin')</p>
                                </div>
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
                        </div>
                        <div class="user-account__reload-btn-conteiner">
                            <button type="submit" class="btn1">@lang('Yadda saxla')</button>
                        </div>
                    </form>
                    <form id="logout-form" action="{{ route('profile.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
