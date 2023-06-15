@php
    $default = $phones->first();
    $phones = $phones->slice(1);
@endphp

<div class="information-about-company__phone-conteiner">
        <div class="user-main-info__inp-info input-form-conteiner phone-company-conteiner defoult-phone-namber">
            <h5 class="input-form-conteiner__title">@lang('Telefon nömrəsi'):</h5>
            <div class="input-form-conteiner__claster">
                <input type="text" class="input-form-conteiner__input" name="phones[0][phone]" placeholder="+994123602040" value="{{ old('phones.0.phone', data_get($default, 'phone')) }}">
            </div>
            <div class="input-form-conteiner__check-box-row">
                <div class="checkbox">
                    <label class="custom-checkbox">
                        <input type="checkbox" name="phones[0][whatsapp]" {{ old('phones.0.whatsapp', data_get($default, 'whatsapp')) ? 'checked': '' }}>
                        <span>WhatsApp</span>
                    </label>
                </div>
            </div>
        </div>
    <div class="information-about-company__add-more-phone-conteiner">
        @if($phones)
            @foreach($phones as $key => $phone)
                <div class="user-main-info__inp-info input-form-conteiner phone-company-conteiner new-phone-element">
                    <div class="input-form-conteiner__claster">
                        <input type="text" class="input-form-conteiner__input" name="phones[{{ $key }}][phone]" placeholder="+994123602040" value="{{ old('phones.' . $key . 'phone', data_get($phone,'phone')) }}">
                    </div>
                    <div class="input-form-conteiner__check-box-row">
                        <div class="checkbox">
                            <label class="custom-checkbox">
                                <input type="checkbox" name="phones[{{ $key }}][whatsapp]" {{ old('phones.' . $key . 'phone', data_get($phone,'phone')) ? 'checked': '' }}>
                                <span>WhatsApp</span>
                            </label>
                        </div>
                    </div>
                    <div class="btn-add-del del-phone">
                        <div class="btn-add-del__icon">
                            <img src="https://baza.test/assets/front/img/_src/del-ic.png" alt="">
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

        <div class="btn-add-del add-phone-btn">
            <div class="btn-add-del__icon">
                <img src="{{ asset('assets/front/img/_src/add-ic.png') }}" alt="">
            </div>
            <span>@lang('Telefon əlavə edin')</span>
        </div>
    </div>
</div>
