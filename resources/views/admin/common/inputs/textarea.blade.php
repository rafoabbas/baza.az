@props([
    'id' => $id ?? \Illuminate\Support\Str::uuid(),
    'label' => $label ?? 'Label',
    'name' => $name ?? 'name',
    'value' => $value ?? null,
    'placeholder' => $placeholder ?? null,
    'example' => $example ?? null,
    'col' => $col ?? 12,
    'rows' => $rows ?? 10,
])

<div class="mb-3 col-md-{{ $col }}">
    <label for="{{ $id }}" class="form-label">{!! $label . ' ' . $example !!}</label>
    <textarea
        rows="{{ $rows }}"
        name="{{ $name }}"
        class="form-control @error($name) is-invalid @enderror"
        id="{{ $id }}"
        placeholder="{{ $placeholder }}"
    >{!! $value !!}</textarea>
    @error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
