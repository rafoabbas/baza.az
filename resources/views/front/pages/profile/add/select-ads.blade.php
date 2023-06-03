@extends('front.layouts.app')

@section('content')
    <section class="add-ads-no-regist-section">
        <div class="general-conteiner">
            <div class="add-ads-no-regist-section__row">
                <label for="car-type-input" class="add-ads-no-regist-section__type-ads type-ads type-ads_activ">
                    <div class="type-ads__icon">
                        <img src="{{ asset('assets/front/img/_src/no-reg1.svg') }}" alt="">
                    </div>
                    <h4 class="type-ads__title">
                        <span></span>
                        @lang('Minik')
                        <span></span>
                    </h4>
                </label>
                <label for="motorcycle-type-input" class="add-ads-no-regist-section__type-ads type-ads">
                    <div class="type-ads__icon">
                        <img src="{{ asset('assets/front/img/_src/no-reg2.svg') }}" alt="">
                    </div>
                    <h4 class="type-ads__title">
                        <span></span>
                        Мото
                        <span></span>
                    </h4>
                </label>
                <label for="number-type-input" class="add-ads-no-regist-section__type-ads type-ads">
                    <div class="type-ads__icon">
                        <img src="{{ asset('assets/front/img/_src/no-reg3.svg') }}" alt="">
                    </div>
                    <h4 class="type-ads__title">
                        <span></span>
                        Автономера
                        <span></span>
                    </h4>
                </label>
                <label for="truck-type-input" class="add-ads-no-regist-section__type-ads type-ads">
                    <div class="type-ads__icon">
                        <img src="{{ asset('assets/front/img/_src/no-reg4.svg') }}" alt="">
                    </div>
                    <h4 class="type-ads__title">
                        <span></span>
                        Спецтехника
                        <span></span>
                    </h4>
                </label>
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
                    <h2 class="add-ads-no-regist-section__new-ads-title">@lang('Yeni elan')</h2>
                    <p class="add-ads-no-regist-section__new-ads-subtitle">@lang('Hörmətli istifadəçi, baza.az platformasında 30 gün ərzində 3 pulsuz elan yerləşdirə bilərsiniz.')</p>
                    <form action="{{ route('advertisement.store') }}" class="add-ads-no-regist-section__form">
                        <input type="radio" name="ads_type" id="car-type-input" value="car" style="visibility: hidden">
                        <input type="radio" name="ads_type" id="motorcycle-type-input" value="motorcycle" style="visibility: hidden">
                        <input type="radio" name="ads_type" id="number-type-input" value="number" style="visibility: hidden">
                        <input type="radio" name="ads_type" id="truck-type-input" value="truck" style="visibility: hidden">
                        <p class="add-ads-no-regist-section__form-title">@lang('Elan yerləşdirmək üçün telefon nömrənizi daxil edin'):
                        </p>
                        <div class="add-ads-no-regist-section__form-row">
                            <div class="input-main__prise-inp">
                                <input type="text" placeholder="50 220 00 26">
                            </div>
                            <div class="add-ads-no-regist-section__form-bt-wrapper">
{{--                                <input type="submit" class="btn1" value="Продолжить">--}}
                                <button type="submit" class="btn1">@lang('Davam et')</button>
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
