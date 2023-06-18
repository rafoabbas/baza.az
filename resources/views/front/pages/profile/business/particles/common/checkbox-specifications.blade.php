<div class="box-redactor-text">
    <h4 class="cart-main-info__title-ul">@lang('Üstünlüklər'):</h4>
    <div class="box-redactor-text__checbox-advantages">
        @foreach($specifications as $specification)
            <div class="checkbox">
                <label class="custom-checkbox">
                    <input type="checkbox" name="specifications[]" value="{{ $specification->getAttribute('id') }}"
                       @if (in_array($specification->getAttribute('id'), old('specifications', $checked), true)) checked @endif>
                    <span>{{ $specification->getAttribute('name') }}</span>
                </label>
                @error('specifications')
                <span class="validate-text">
                    <smal class="text-danger">{{ $message }}</smal>
                </span>
                @enderror
            </div>
        @endforeach
    </div>
</div>
