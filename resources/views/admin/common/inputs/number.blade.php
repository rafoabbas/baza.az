@props([
    'id' => $id ?? \Illuminate\Support\Str::uuid(),
    'label' => $label ?? 'Label',
    'type' => $type ?? 'number',
    'name' => $name ?? 'name',
    'value' => $value ?? null,
    'placeholder' => $placeholder ?? null,
    'example' => $example ?? null,
    'col' => $col ?? 12,
    'step' => $step ?? '',
])

<div class="mb-3 col-md-{{ $col }}">
    <label for="{{ $id }}" class="form-label">{!! $label . ' ' . $example !!}</label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        value="{{ $value }}"
        class="form-control @error($name) is-invalid @enderror"
        id="{{ $id }}"
        placeholder="{{ $placeholder }}"
        step="{{ $step }}"
    >
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
