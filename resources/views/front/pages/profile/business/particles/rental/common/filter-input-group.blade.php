@php
    $title          = $title ?? null;
    $subtitle       = $subtitle ?? null;
    $name           = $name ?? null;
    $type           = $type ?? 'text';
    $placeholder    = $placeholder ?? null;
    $value          = $value ?? null;
    $groupClass     = $groupClass ?? null;
    $inputClass     = $inputClass ?? null;
@endphp

<div class="catalog__filtr__filtr-element {{ $groupClass }}">
    @if ($title)
        <h5>{{ __($title) }}: {{ __($subtitle) }}</h5>
    @endif
    <div class="filtr-element__select">
        <div class="filtr-element__input">
            <input name="{{ $name }}"
               id="filter-element-{{ $name }}"
               type="{{ $type }}"
               class="{{ $inputClass }} @error($name) is-invalid @enderror"
               placeholder="{{ __($placeholder ?? $title) }}"
               value="{{ old($name, $value) }}"
            >
        </div>
        @error($name)
        <span class="validate-text">
            <smal class="text-danger">{{ $message }}</smal>
        </span>
        @enderror
    </div>
</div>
