<div class="select-form-conteiner">
    <h5 class="select-form-conteiner__title">@lang('Şəhər')</h5>
    <select class=" @error('region_id') is-invalid @enderror" name="region_id" id="region_id">
        <option>@lang('Şəhər')</option>
        @foreach($regions as $region)
            <option value="{{ $region->getAttribute('id') }}" @if (old('region_id', $selected) == $region->getAttribute('id')) selected @endif>{{ $region->getAttribute('name') }}</option>
        @endforeach
    </select>
    @error('region_id')
    <span class="validate-text">
        <smal class="text-danger">{{ $message }}</smal>
    </span>
    @enderror
</div>
