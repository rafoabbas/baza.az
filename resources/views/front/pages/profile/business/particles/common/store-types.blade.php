<div class="acordeon-conteiner__claster-wrapper">
    <div class="acordeon-conteiner__services-container services-container services-container_redact">
        @forelse($types as $type)
            <div class="acordeon-conteiner__box direction-auto-store">
                <div class="acordeon-conteiner__box-title acordeon-element__title">
                    <h4 class="cart-main-info__title">{{ $type->getAttribute('name') }}</h4>
                    <span class="acordeon-conteiner__box__nam-element">
                        <div class="checkbox">
                            <label class="custom-checkbox" for="store_types-{{ $type->getAttribute('id') }}">
                                <input type="checkbox" id="store_types-{{ $type->getAttribute('id') }}" name="store_types[]" value="{{ $type->getAttribute('id') }}"
                                   @if (in_array($type->getAttribute('id'), old('store_types', $checked), true)) checked @endif>
                                <span></span>
                            </label>
                            @error('store_types')
                            <span class="validate-text">
                                <smal class="text-danger">{{ $message }}</smal>
                            </span>
                            @enderror
                        </div>
                    </span>
                    <div class="acordeon-conteiner__open-icon">
                        <span class="ac-icV1"></span>
                        <span class="ac-icV2"></span>
                    </div>
                </div>
                <div class="acordeon-conteiner__claster acordeon-element__claster">
                    <div class="acordeon-conteiner__claster-wrapper">
                        <div class="checkbox-direction-redact">
                            <div class="box-redactor-text">
                                <h4 class="cart-main-info__title-ul">@lang('Təsvir'):</h4>
                                <p>{!! $type->getAttribute('description') !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            @lang('Mağaza tipi yoxdur')
        @endforelse
    </div>
</div>
