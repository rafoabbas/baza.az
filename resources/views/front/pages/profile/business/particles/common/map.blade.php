@php
    $item = $item ?? null;
@endphp
<div class="acordeon-conteiner__claster-wrapper">
    <div class="acordeon-conteiner__add-more-location add-more-location">
        <div class="catalog__filtr__filtr-element add-more-location-container">
            <h5>@lang('Ünvan'):</h5>
            @forelse(old('addresses', $item?->getAttribute('addresses') ?? []) as $address)
                <div class="add-more-location__row add-more-location__defoult-location">
                    <div class="catalog__filtr__filtr-element add-more-location__big-select">
                        <div class="main-search__input-conteiner">
                            <input type="text" class="input-only-namber" name="adresses[]" value="{{ data_get($address, 'address') }}" placeholder="Бакиханова">
                        </div>
                    </div>
                    <div class="btn-add-del del-location">
                        <div class="btn-add-del__icon">
                            <img src="{{ asset('assets/front/img/_src/del-ic.png') }}" alt="">
                        </div>
                    </div>
                </div>
            @empty
                <div class="add-more-location__row add-more-location__defoult-location">
                    <div class="catalog__filtr__filtr-element add-more-location__big-select">
                        <div class="main-search__input-conteiner">
                            <input type="text" class="input-only-namber" name="adresses[]" placeholder="Бакиханова">
                        </div>
                    </div>
                    <div class="btn-add-del del-location">
                        <div class="btn-add-del__icon">
                            <img src="{{ asset('assets/front/img/_src/del-ic.png') }}" alt="">
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
        <div class="btn-add-del add-location">
            <div class="btn-add-del__icon">
                <img src="{{ asset('assets/front/img/_src/add-ic.png') }}" alt="">
            </div>
            <span>@lang('Başqa bir ünvan əlavə edin')</span>
        </div>
    </div>
    <div id="map3"></div>
</div>
