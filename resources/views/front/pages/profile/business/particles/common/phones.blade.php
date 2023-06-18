<div class="information-about-company__phone-conteiner">
    <h5 class="input-form-conteiner__title" style="color: rgb(118, 138, 158)">@lang('Telefon nömrəsi'):</h5>
    <div class="information-about-company__phone-content">
        @if($phones)
            @foreach($phones as $key => $phone)
                <div data-id="{{ $key }}" class="user-main-info__inp-info input-form-conteiner phone-company-conteiner @if ($key === 0) defoult-phone-namber @else new-phone-element @endif">
                    <div class="input-form-conteiner__claster">
                        <input type="text" class="input-form-conteiner__input" name="phones[{{ $key }}][phone]" placeholder="+994123602040" value="{{ old('phones.' . $key . 'phone', data_get($phone,'phone')) }}">
                    </div>
                    <div class="input-form-conteiner__check-box-row">
                        <div class="checkbox">
                            <label class="custom-checkbox">
                                <input type="checkbox" name="phones[{{ $key }}][whatsapp]" {{ old('phones.' . $key . 'whatsapp', data_get($phone,'whatsapp')) ? 'checked': '' }}>
                                <span>WhatsApp</span>
                            </label>
                        </div>
                    </div>
                    @if ($key > 0)
                        <div class="btn-add-del del-phone">
                            <div class="btn-add-del__icon">
                                <img src="{{ asset('assets/front/img/_src/del-ic.png') }}" alt="">
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        @endif
    </div>
    <div class="btn-add-del add-phone-btn">
        <div class="btn-add-del__icon">
            <img src="{{ asset('assets/front/img/_src/add-ic.png') }}" alt="">
        </div>
        <span>@lang('Telefon əlavə edin')</span>
    </div>
</div>
