<div class="select-form-conteiner">
    <h5 class="select-form-conteiner__title">@lang('Şəhər')</h5>
    <select name="region_id" id="region_id">
        <option>@lang('Şəhər')</option>
        @foreach($regions as $region)
            <option value="{{ $region->getAttribute('id') }}" @if ($selected === $region->getAttribute('id')) selected @endif>{{ $region->getAttribute('name') }}</option>
        @endforeach
    </select>
</div>
