@php
    $item = $item ?? null;
@endphp
<div class="acordeon-conteiner__claster-wrapper information-about-company">
    <div class="information-about-company__info-claster">
        <div class="information-about-company__info-line information-about-company__info-line-V1">
            <div class="information-about-company__info-box">
                <span>@lang('Şirkət adı'):</span>
                <p>{{ $item->getAttribute('name') }}</p>
            </div>
        </div>
        <div class="information-about-company__info-line information-about-company__info-line-V2">
            <div class="information-about-company__info-box">
                <span>@lang('Şəhər'):</span>
                <p>{{ $item->getAttribute('region_name') }}</p>
            </div>
            <div class="information-about-company__info-box">
                <span>@lang('Salon nömrəsi'):</span>
                <p>{{ $item->getAttribute('phone') }}</p>
            </div>
        </div>
        <div class="information-about-company__info-line information-about-company__info-line-V1">
            <div class="information-about-company__info-box">
                <span>@lang('Salon ünvanı'):</span>
                <p>{{ $item->getAttribute('address') }}</p>
            </div>
        </div>
        <div class="information-about-company__info-line information-about-company__info-line-V2">
            <div class="information-about-company__info-box">
                <span>@lang('Salon nömrəsi'):</span>
                <ul>
                    @foreach($item->getAttribute('phones') as $phone)
                        <li>
                            <a href="tel:{{ data_get($phone, 'phone') }}">{{ data_get($phone, 'phone') }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="information-about-company__info-box">
                <span>@lang('İş saatları'):</span>
                <ul>
                    @foreach($item->getAttribute('working_hours') as $key => $hour)
                        <li>
                            {{ __($key) . ' : ' . $hour }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="information-about-company__info-line information-about-company__info-line-V2">
            <div class="information-about-company__info-box">
                <span>@lang('E poçta'):</span>
                <a href="mailto:{{ $item->getAttribute('email') }}" class="qurient-link">{{ $item->getAttribute('email') }}</a>
            </div>
            <div class="information-about-company__info-box">
                <span>@lang('Link'):</span>
                <a href="{{ $item->getAttribute('web_site') }}" class="qurient-link">{{ $item->getAttribute('web_site') }}</a>
            </div>
        </div>
    </div>
</div>
