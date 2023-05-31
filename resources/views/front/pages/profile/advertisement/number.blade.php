@extends('front.layouts.app')
@section('title', $title)
@section('content')
    <section class="cart-main-info section-user-account ads-byu-main-sec">
        <div class="general-conteiner">
            {!! $pageTitleHtml !!}
            <div class="cart-main-info__conteiner">
                <div class="cart-main-info__body-info">
                    <div class="conteiner-add-number">
                        <p class="conteiner-add-number__title">@lang('Bütün sahələr tələb olunur')</p>
                        <div class="conteiner-add-number__line">
                            <div class="catalog__filtr__filtr-element">
                                <label>@lang('Bölgə'):</label>
                                <div class="filtr-element__select">
                                    <select name="number_region_id" id="number_region_id" class="full-select @error('number_region_id') is-invalid @enderror">
                                        @foreach($numberRegions as $numberRegion)
                                            <option value="{{ $numberRegion->getAttribute('id') }}">
                                                {{ $numberRegion->getAttribute('region_code') . ' - ' . $numberRegion->getAttribute('name') }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('number_region_id')
                                <span class="validate-text">
                                    <smal class="text-danger">{{ $message }}</smal>
                                </span>
                                @enderror
                            </div>
                            <div class="catalog__filtr__filtr-element">
                                <label>@lang('Serial'):</label>
                                <input type="text" value="{{ old('series') }}" name="series" class="input-form-conteiner__input @error('series') is-invalid @enderror" placeholder="@lang('Serial')">
                                @error('series')
                                <span class="validate-text">
                                    <smal class="text-danger">{{ $message }}</smal>
                                </span>
                                @enderror
                            </div>
                            <div class="catalog__filtr__filtr-element">
                                <label>@lang('Nömrə'):</label>
                                <input type="text" value="{{ old('number') }}" name="number" class="input-form-conteiner__input @error('number') is-invalid @enderror" placeholder="@lang('Nömrə')">
                                @error('number')
                                <span class="validate-text">
                                    <smal class="text-danger">{{ $message }}</smal>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="conteiner-add-number__line">
                            <div class="catalog__filtr__filtr-element">
                                <label>@lang('Şəhər'):</label>
                                <div class="filtr-element__select">
                                    <select name="region_id" id="region_id" class="full-select @error('region_id') is-invalid @enderror">
                                        @foreach($regions as $region)
                                            <option value="{{ $region->getAttribute('id') }}">
                                                {{ $region->getAttribute('name') }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('region_id')
                                <span class="validate-text">
                                    <smal class="text-danger">{{ $message }}</smal>
                                </span>
                                @enderror
                            </div>
                            <div class="catalog__filtr__filtr-element">
                                <label>@lang('Qiymət'):</label>
                                <div class="filtr-element__select filtr-element__select_input @error('price') is-invalid @enderror">
                                    <input type="text" name="price" class="@error('price') is-invalid @enderror" placeholder="1 200">
                                    <select name="currency" id="currency" class="full-select">
                                        <option value="azn">@lang('AZN')</option>
                                        <option value="usd">@lang('USD')</option>
                                        <option value="eur">@lang('EUR')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="select-num">
                        <h4 class="cart-main-info__title-ul">@lang('Nömrə hansı maşında göstərilsin'):</h4>
                        <div class="select-num__conteiner">
                            <label class="select-num__box select-num__box_activ" for="witch_auto_type">
                                <input type="radio" name="witch_auto_type" value="porsche">
                                <img src="{{ asset('assets/front/img/_src/car-doc.png') }}" alt="">
                            </label>
                            <label class="select-num__box">
                                <input type="radio" name="witch_auto_type" value="bmw">
                                <img src="{{ asset('assets/front/img/_src/car-doc2.png') }}" alt="">
                            </label>
                            <label class="select-num__box">
                                <img src="{{ asset('assets/front/img/_src/car-doc.png') }}" alt="">
                            </label>
                            <label class="select-num__box">
                                <img src="{{ asset('assets/front/img/_src/car-doc.png') }}" alt="">
                            </label>
                            <label class="select-num__box">
                                <img src="{{ asset('assets/front/img/_src/car-doc2.png') }}" alt="">
                            </label>
                            <label class="select-num__box">
                                <img src="{{ asset('assets/front/img/_src/car-doc.png') }}" alt="">
                            </label>
                        </div>
                    </div>
                    <div class="acordeon-conteiner__description-conteiner">
                        <h4 class="cart-main-info__title-ul">@lang('Təsvir')</h4>
                        <textarea name="description" class="@error('description') is-invalid @enderror" placeholder="@lang('Текст описание')"></textarea>
                        @error('description')
                        <span class="validate-text">
                            <smal class="text-danger">{{ $message }}</smal>
                        </span>
                        @enderror
                    </div>
                    <div class="select-type-num" style="margin-top: 10px">
                        <h4 class="cart-main-info__title-ul">@lang('Nömrə növünü seçin'):</h4>
                        <div class="select-type-num__conteiner">
                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="is_mirror_numbers" {{ old('is_mirror_numbers') ? 'checked' : '' }}  value="1">
                                    <span>@lang('Güzgü nömrələri')</span>
                                    <p class="catalog-page__filtr-element-subtitle">
                                        @lang('Güzgü rəqəmləri olan rəqəmlər'). <br>
                                        @lang('Örnək'): 3223, 8558, 1441
                                    </p>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="is_three_numbers_in_a_row" {{ old('is_three_numbers_in_a_row') ? 'checked' : '' }} value="1">
                                    <span>@lang('Ardıcıl üç rəqəm')</span>
                                    <p class="catalog-page__filtr-element-subtitle">
                                        @lang('Ardıcıl üç rəqəmi olan nömrələr').<br>
                                        @lang('Örnək'): 0111, 7772, 2228
                                    </p>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="is_two_zeros_and_a_number" {{ old('is_two_zeros_and_a_number') ? 'checked' : '' }} value="1">
                                    <span>@lang('Üç sıfır + rəqəm')</span>
                                    <p class="catalog-page__filtr-element-subtitle">@lang('Üç sıfır və bir rəqəmin birləşməsindən ibarət rəqəmlər').<br>
                                        @lang('Örnək'): 0001, 1000, 2000
                                    </p>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="is_five_numbers_in_a_row" {{ old('is_five_numbers_in_a_row') ? 'checked' : '' }} value="1">
                                    <span>@lang('Dörd eyni nömrə')</span>
                                    <p class="catalog-page__filtr-element-subtitle">
                                        @lang('Tam eyni rəqəmləri olan nömrələr').<br>
                                        @lang('Örnək'): 0000, 1111, 2222
                                    </p>
                                </label>
                            </div>
                        </div>
                        <div class="select-type-num__bt-line">
                            <a href="" class="btn1">
                                @lang('Elan yerləşdirin')
                            </a>
                            <a href="" class="btn1">@lang('VIP olaraq dərc edin')</a>
                        </div>
                    </div>
                </div>
                <aside class="catalog__filtr ads-sitebar ads-sitebar_user-account aside-old">
                    <div class="catalog__filt-baner-conteiner">
                        <a href="" class="baner-box">
                            <img src="{{ asset('assets/front/img/_src/baner1.jpg') }}" alt="">
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
