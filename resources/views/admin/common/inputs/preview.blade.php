@props([
    'id' => $id ?? \Illuminate\Support\Str::uuid(),
    'name' => $name ?? 'image',
    'length' => $length ?? 1,
    'value' => $value ?? null,
])

<div class="img-component">
    <div class="img-preview-div">
        <label class="img-preview @error($name) border-danger border-1 @enderror"
            data-route="{{ route('common.upload.image') }}"
            data-length="{{ $length }}"
            data-name="{{ $name }}"
            data-id="{{ $id }}"
            for="{{ 'file'. '-' . $id  }}"
        >
            <div class="icon d-flex justify-content-center align-center text-center flex-column">
                <i class="fas fa-image"></i>
                <span class="text">@lang('Drag & Drop')</span>
                <span class="text">@lang('your picture or <span>Browse</span>')</span>
            </div>
            <div class="spinner-border d-none" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <input type="file" id="{{ 'file'. '-' . $id  }}" class="d-none img-preview-file"  name="{{ 'file-' . $name }}">
        </label>
        @error($name)
        <small class="mt-3 text-danger" >
            {{ $message }}
        </small>
        @enderror
    </div>
    <div class="img-list" id="image-list-{{ $id }}">

    </div>
</div>


@if(old('preview-' . $name, $value))
    @push('script')
        <script>
            @if(is_array(old('preview-' . $name)))
                getImages('{{ route('common.upload.get.images') }}', '@json(old('preview-' . $name, $value))', '{{ $length }}', '{{ $name }}', '{{ '#image-list-' . $id }}');
            @elseif(is_numeric(old('preview-' . $name, $value)))
                getImages('{{ route('common.upload.get.images') }}', '@json([old('preview-' . $name, $value)])', '{{ $length }}', '{{ $name }}', '{{ '#image-list-' . $id }}');
            @endif
        </script>
    @endpush
@endif


