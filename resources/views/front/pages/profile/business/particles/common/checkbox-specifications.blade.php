<div class="box-redactor-text">
    <h4 class="cart-main-info__title-ul">@lang('Üstünlüklər'):</h4>
    <div class="box-redactor-text__checbox-advantages">
        @foreach($specifications as $specification)
            <div class="checkbox">
                <label class="custom-checkbox">
                    <input type="checkbox" name="specifications[]" value="{{ $specification->getAttribute('id') }}">
                    <span>{{ $specification->getAttribute('name') }}</span>
                </label>
            </div>
        @endforeach
    </div>
</div>
