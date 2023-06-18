<div class="acordeon-conteiner__claster-wrapper">
    <div class="brend-conteiner__claster acordeon-conteiner__brends acordeon-conteiner__brends_redact brands-redact">
        <div class="checkbox brands-redact__all-brands">
            <label class="custom-checkbox">
                <input type="checkbox" name="carbody" value="Viber">
                <span>@lang('Bütün markalar')</span>
            </label>
        </div>
        <div class="brands_redact__list-brands">
            @forelse($brands as $brand)
                <div class="checkbox">
                    <label class="custom-checkbox" for="car-brand-{{ $brand->id }}">
                        <input type="checkbox" id="car-brand-{{ $brand->id }}" name="car_brand[]" value="{{ $brand->id }}"
                            @if (in_array($brand->id, old('car_brand', $checked), true)) checked @endif>
                        <span>{{ $brand->getAttribute('name') }}</span>
                    </label>
                </div>
            @empty
                <p>@lang('Marka yoxdur')</p>
            @endforelse
        </div>
    </div>
</div>
