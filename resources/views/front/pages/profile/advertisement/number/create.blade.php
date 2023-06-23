@extends('front.layouts.app')
@section('title', $title)
@section('content')
    <section class="cart-main-info section-user-account ads-byu-main-sec">
        <form action="{{ route('advertisement.number.store', $otp->getAttribute('uuid')) }}" method="post" class="general-conteiner">
            @csrf
            {!! $pageTitleHtml !!}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
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
                                <label for="serial-input">@lang('Serial'):</label>
                                <input id="serial-input" type="text" value="{{ old('series') }}" name="series" class="input-form-conteiner__input @error('series') is-invalid @enderror" placeholder="@lang('Serial')">
                                @error('series')
                                <span class="validate-text">
                                    <smal class="text-danger">{{ $message }}</smal>
                                </span>
                                @enderror
                            </div>
                            <div class="catalog__filtr__filtr-element">
                                <label for="number-input">@lang('Nömrə'):</label>
                                <input id="number-input" type="number" value="{{ old('number') }}" max="999" name="number" class="input-form-conteiner__input @error('number') is-invalid @enderror" placeholder="@lang('Nömrə')">
                                @error('number')
                                <span class="validate-text">
                                    <smal class="text-danger">{{ $message }}</smal>
                                </span>
                                @enderror
                            </div>
                            <div class="catalog__filtr__filtr-element">
                                <label for="serial-input">@lang('Name'):</label>
                                <input id="serial-input" type="text" value="{{ old('name') }}" name="name" class="input-form-conteiner__input @error('name') is-invalid @enderror" placeholder="@lang('name')">
                                @error('name')
                                <span class="validate-text">
                                    <smal class="text-danger">{{ $message }}</smal>
                                </span>
                                @enderror
                            </div>
                            <div class="catalog__filtr__filtr-element">
                                <label for="serial-input">@lang('Email'):</label>
                                <input id="serial-input" type="text" value="{{ old('email') }}" name="email" class="input-form-conteiner__input @error('email') is-invalid @enderror" placeholder="@lang('email')">
                                @error('email')
                                <span class="validate-text">
                                    <smal class="text-danger">{{ $message }}</smal>
                                </span>
                                @enderror
                            </div>
                            <div class="catalog__filtr__filtr-element">
                                <label for="serial-input">@lang('Phone'):</label>
                                <input id="serial-input" type="text" value="{{ old('phone') }}" name="phone" class="input-form-conteiner__input @error('phone') is-invalid @enderror" placeholder="@lang('phone')">
                                @error('phone')
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
                                <label for="price-input">@lang('Qiymət'):</label>
                                <div class="filtr-element__select filtr-element__select_input @error('price') is-invalid @enderror">
                                    <input id="price-input" type="number" name="price" step="0.01" value="{{ old('price') }}" class="" placeholder="1 200">
                                    <select name="main_currency" id="main_currency" class="full-select">
                                        <option {{ old('main_currency', 'AZN') == 'AZN' ? 'selected' : '' }}  value="AZN">@lang('AZN')</option>
                                        <option {{ old('main_currency') == 'USD' ? 'selected' : '' }} value="USD">@lang('USD')</option>
                                        <option {{ old('main_currency') == 'EUR' ? 'selected' : '' }} value="EUR">@lang('EUR')</option>
                                    </select>
                                </div>
                                @error('price')
                                <span class="validate-text">
                                    <smal class="text-danger">{{ $message }}</smal>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="select-num">
                        <h4 class="cart-main-info__title-ul">@lang('Nömrə hansı maşında göstərilsin'):</h4>
                        <div class="select-num__conteiner">
                            @foreach($frames as $frame)
                                <label class="select-num__box {{ old('number_frame_id', ($frame->getAttribute('id') == 1 ? 1 : '')) == $frame->getAttribute('id') ? 'select-num__box_activ' : '' }}" for="{{ 'frame_' . $frame->getAttribute('id') }}">
                                    <input type="radio" {{ old('number_frame_id', ($frame->getAttribute('id') == 1 ? 1 : '')) == $frame->getAttribute('id') ? 'checked' : '' }} id="{{ 'frame_' . $frame->getAttribute('id') }}" name="number_frame_id" value="{{ $frame->getAttribute('id') }}">
                                    <img src="{{ asset('storage/' . $frame->getAttribute('frame')) }}" alt="{{ $frame->getAttribute('name') }}">
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="acordeon-conteiner__description-conteiner">
                        <h4 class="cart-main-info__title-ul">@lang('Təsvir')</h4>
                        <textarea name="description" class="@error('description') is-invalid @enderror" placeholder="@lang('Текст описание')">{{ old('description') }}</textarea>
                        @error('description')
                        <span class="validate-text">
                            <smal class="text-danger">{{ $message }}</smal>
                        </span>
                        @enderror
                    </div>
                    <div class="select-type-num mt-10px">
                        <h4 class="cart-main-info__title-ul">@lang('Nömrə növünü seçin'):</h4>
                        <div class="select-type-num__conteiner">
                            <div class="checkbox">
                                <label for="mirror-number" class="custom-checkbox">
                                    <input id="mirror-number" type="checkbox" name="is_mirror_numbers" {{ old('is_mirror_numbers') ? 'checked' : '' }}>
                                    <span>@lang('Güzgü nömrələri')</span>
                                    <p class="catalog-page__filtr-element-subtitle">
                                        @lang('Güzgü rəqəmləri olan rəqəmlər'). <br>
                                        @lang('Örnək'): 3223, 8558, 1441
                                    </p>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label for="three-in-row-number" class="custom-checkbox">
                                    <input id="three-in-row-number" type="checkbox" name="is_three_numbers_in_a_row" {{ old('is_three_numbers_in_a_row') ? 'checked' : '' }}>
                                    <span>@lang('Ardıcıl üç rəqəm')</span>
                                    <p class="catalog-page__filtr-element-subtitle">
                                        @lang('Ardıcıl üç rəqəmi olan nömrələr').<br>
                                        @lang('Örnək'): 0111, 7772, 2228
                                    </p>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label for="two-zero-number" class="custom-checkbox">
                                    <input id="two-zero-number" type="checkbox" name="is_two_zeros_and_a_number" {{ old('is_two_zeros_and_a_number') ? 'checked' : '' }}>
                                    <span>@lang('Üç sıfır + rəqəm')</span>
                                    <p class="catalog-page__filtr-element-subtitle">@lang('Üç sıfır və bir rəqəmin birləşməsindən ibarət rəqəmlər').<br>
                                        @lang('Örnək'): 0001, 1000, 2000
                                    </p>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label for="four-same-number" class="custom-checkbox">
                                    <input id="four-same-number" type="checkbox" name="is_five_numbers_in_a_row" {{ old('is_five_numbers_in_a_row') ? 'checked' : '' }}>
                                    <span>@lang('Dörd eyni nömrə')</span>
                                    <p class="catalog-page__filtr-element-subtitle">
                                        @lang('Tam eyni rəqəmləri olan nömrələr').<br>
                                        @lang('Örnək'): 0000, 1111, 2222
                                    </p>
                                </label>
                            </div>
                        </div>
                        <div class="select-type-num__bt-line">
                            <button type="submit" class="btn1">
                                @lang('Elan yerləşdirin')
                            </button>
                            <button type="submit" class="btn1">@lang('VIP olaraq dərc edin')</button>
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
        </form>
    </section>
@endsection

@push('scripts')
@endpush
