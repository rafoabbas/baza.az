@php
    $title          = $title ?? null;
    $name           = $name ?? null;
    $options        = $options ?? null;
    $selected       = $selected ?? null;
    $groupClass     = $groupClass ?? null;
    $selectClass    = $selectClass ?? null;
@endphp

<div class="filtr-element__select {{ $groupClass }}">
    <h5>{{ __($title) }}:</h5>
    <select name="{{ $name }}" id="filter-element-{{ $name }}" class="full-select {{ $selectClass }}">
        <option value="">{{ __($title) }}</option>
        @foreach($options as $option)
            <option value="{{ $option->id }}" {{ $selected == $option->id ? 'selected' : '' }}>{{ $option->name }}</option>
        @endforeach
    </select>
    @error($name)
    <span class="validate-text">
        <smal class="text-danger">{{ $message }}</smal>
    </span>
    @enderror
</div>
