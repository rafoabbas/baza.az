<div class="acordeon-conteiner__claster-wrapper information-about-company">
    <div class="information-about-company__redact-claster">
        <p class="redact-info-subtitle">@lang('Bütün sahələr tələb olunur')</p>
        <div class="information-about-company__main-info-redact main-info-redact">
            <div class="user-main-info__inp-info input-form-conteiner">
                <h5 class="input-form-conteiner__title">@lang('"Şirkət adı"'):</h5>
                <div class="input-form-conteiner__claster">
                    <input type="text" class="input-form-conteiner__input @error('name') is-invalid @enderror" name="name" placeholder="@lang('"Şirkət adı"')" value="{{ old('name', $item->getAttribute('name')) }}">
                    @error('name')
                    <span class="validate-text">
                        <smal class="text-danger">{{ $message }}</smal>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="user-main-info__inp-info input-form-conteiner">
                <h5 class="input-form-conteiner__title">@lang('Servis ünvanı'):</h5>
                <div class="input-form-conteiner__claster">
                    <input type="text" class="input-form-conteiner__input @error('address') is-invalid @enderror" name="address" placeholder="@lang('Servis ünvanı')" value="{{ old('address', $item->getAttribute('address')) }}">
                    @error('address')
                    <span class="validate-text">
                        <smal class="text-danger">{{ $message }}</smal>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="main-info-redact__flex-line-V1">
                <div class="user-main-info__inp-info input-form-conteiner">
                    <h5 class="input-form-conteiner__title">@lang('E poçta'):</h5>
                    <div class="input-form-conteiner__claster">
                        <input type="text" class="input-form-conteiner__input @error('email') is-invalid @enderror" name="email" placeholder="info@example.com" value="{{ old('email', $item->getAttribute('email')) }}">
                        @error('email')
                        <span class="validate-text">
                            <smal class="text-danger">{{ $message }}</smal>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="user-main-info__inp-info input-form-conteiner">
                    <h5 class="input-form-conteiner__title">@lang('Link'):</h5>
                    <div class="input-form-conteiner__claster">
                        <input type="text" class="input-form-conteiner__input @error('web_site') is-invalid @enderror" name="web_site" placeholder="avto.com" value="{{ old('web_site', $item->getAttribute('web_site')) }}">
                        @error('web_site')
                        <span class="validate-text">
                            <smal class="text-danger">{{ $message }}</smal>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="main-info-redact__flex-line-V2 @error('name') is-invalid @enderror">
                <h5 class="main-info-redact__title-flex-line">@lang('İş saatları'):</h5>
                <div class="input-form-conteiner">
                    <h5 class="input-form-conteiner__title">@lang('Həftəiçi'):</h5>
                    <div class="input-form-conteiner__claster">
                        <input type="text" class="input-form-conteiner__input @error('working_hours.weekdays') is-invalid @enderror" name="working_hours[weekdays]" placeholder="08:00 — 20:00" value="{{ old('working_hours.weekdays', data_get($item->getAttribute('working_hours'), 'weekdays')) }}">
                    </div>
                </div>
                <div class="input-form-conteiner">
                    <h5 class="input-form-conteiner__title">@lang('Şənbə'):</h5>
                    <div class="input-form-conteiner__claster">
                        <input type="text" class="input-form-conteiner__input @error('working_hours.saturday') is-invalid @enderror" name="working_hours[saturday]" placeholder="08:00 — 20:00" value="{{ old('working_hours.saturday', data_get($item->getAttribute('working_hours'), 'saturday')) }}">
                    </div>
                </div>
                <div class="input-form-conteiner">
                    <h5 class="input-form-conteiner__title">@lang('Bazar'):</h5>
                    <div class="input-form-conteiner__claster">
                        <input type="text" class="input-form-conteiner__input @error('working_hours.sunday') is-invalid @enderror" name="working_hours[sunday]" placeholder="08:00 — 20:00" value="{{ old('working_hours.sunday', data_get($item->getAttribute('working_hours'), 'sunday')) }}">
                    </div>
                </div>
                @error('working_hours')
                <span class="validate-text">
                    <smal class="text-danger">{{ $message }}</smal>
                </span>
                @enderror
            </div>
        </div>
        <div class="information-about-company__dop-info-redact">
            @include('front.pages.profile.business.particles.common.select-regions', ['selected' => $item->getAttribute('region_id')])
            @include('front.pages.profile.business.particles.common.phones', ['phones' => $item->getAttribute('phones')])
        </div>
    </div>
</div>
