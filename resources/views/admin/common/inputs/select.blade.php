@props([
    'id' => $id ?? \Illuminate\Support\Str::uuid(),
    'label' => $label ?? 'Label',
    'type' => $type ?? 'text',
    'name' => $name ?? 'name',
    'value' => $value ?? null,
    'placeholder' => $placeholder ?? null,
    'example' => $example ?? null,
    'col' => $col ?? 12,
    'options' => $options ?? [],
    'select2' => $select2 ?? 'select'
])


<div class="mb-3 col-md-{{ $col }} @error($name) is-invalid @enderror">
    <label for="{{ $id }}" class="form-label">{!! $label . ' ' . $example !!}</label>
    <select
        id="{{ $id }}"
        name="{{ $name }}"
        class="form-control @error($name) is-invalid @enderror "
        data-toggle="{{ $select2 }}"
    >
        @foreach($options as $key => $option)
            <option value="{{ $key }}" {{ $key == old($name, $value) ? 'selected' : '' }}>{{ $option }}</option>
        @endforeach
    </select>
</div>
