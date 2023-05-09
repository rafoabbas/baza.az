@props([
    'id' => $id ?? \Illuminate\Support\Str::uuid(),
    'label' => $label ?? 'Label',
    'type' => $type ?? 'text',
    'name' => $name ?? 'name',
    'value' => $value ?? null,
    'placeholder' => $placeholder ?? null,
])

<div class="mb-3">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}" class="form-control @error($name) is-invalid @enderror" id="{{ $id }}" placeholder="{{ $placeholder }}">
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
