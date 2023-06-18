@php
    $name       = $name ?? 'name';
    $value      = $value ?? null;
    $route      = $route ?? route('common.upload.image');
    $groupClass = $groupClass ?? '';
    $imageInfo  = $imageInfo ?? null;
@endphp

<div class="photo-conteiner-add__main-photo {{ $groupClass }}">
    <h4 class="cart-main-info__title-ul">@lang('Əsas şəkil') :</h4>
    <div id="{{ $name }}-container" class="photo-conteiner-add__main-image-conteiner add-new-image-main">
        <input type="hidden" name="{{ $name }}" id="{{ 'input-'.$name }}" value="{{ old($name, $value) }}">
        @if ($value)
            <div class="file-image-add">
                <div class="file-image-add__remove-image other-box__close"></div>
                <div class="file-image-add__element">
                    <img src="{{ asset('storage/' . $value) }}" alt="">
                </div>
            </div>
        @endif
        <a class="card-box-user__add-ads" style="@if($value) display: none; @endif">
            <label class="custom-file-upload" for="main-car-photo-download_{{ $name }}">
                <input type="file" data-toggle="upload-file" data-route="{{ $route }}" data-name="{{ $name }}" name="file" accept="image/heic, image/png, image/jpeg, image/webp" id="main-car-photo-download_{{ $name }}" >
                <div class="card-box-user__add-ads-conteiner">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.6665 18.3332H21.6665V8.33317C21.6665 7.89114 21.4909 7.46722 21.1783 7.15466C20.8658 6.8421 20.4419 6.6665 19.9998 6.6665C19.5578 6.6665 19.1339 6.8421 18.8213 7.15466C18.5088 7.46722 18.3332 7.89114 18.3332 8.33317V18.3332H8.33317C7.89114 18.3332 7.46722 18.5088 7.15466 18.8213C6.8421 19.1339 6.6665 19.5578 6.6665 19.9998C6.6665 20.4419 6.8421 20.8658 7.15466 21.1783C7.46722 21.4909 7.89114 21.6665 8.33317 21.6665H18.3332V31.6665C18.3332 32.1085 18.5088 32.5325 18.8213 32.845C19.1339 33.1576 19.5578 33.3332 19.9998 33.3332C20.4419 33.3332 20.8658 33.1576 21.1783 32.845C21.4909 32.5325 21.6665 32.1085 21.6665 31.6665V21.6665H31.6665C32.1085 21.6665 32.5325 21.4909 32.845 21.1783C33.1576 20.8658 33.3332 20.4419 33.3332 19.9998C33.3332 19.5578 33.1576 19.1339 32.845 18.8213C32.5325 18.5088 32.1085 18.3332 31.6665 18.3332Z" fill="#768A9E"></path>
                    </svg>
                    <p>@lang('Əsas şəkil əlavə edin')</p>
                </div>
            </label>
            @error($name)
            <span class="invalid-feedback" role="alert">
                <small>{{ $message }}</small>
            </span>
            @enderror
        </a>
    </div>
    @if ($imageInfo)
        <div class="photo-conteiner-add__main-image-info">
            <div class="waring-text">
                <p>
                    <span>@lang('Əhəmiyyətli'):</span>
                    {{ $imageInfo }}
                </p>
            </div>
        </div>
    @endif
</div>

@push('scripts')
<script>
    $(document).ready(function () {
        let imageElementHtml = `<div class="file-image-add">
            <div class="file-image-add__remove-image other-box__close"></div>
            <div class="file-image-add__element">
                <img src="$src" alt="">
            </div>
        </div>`;

        $('[data-toggle="upload-file"]').on('change', function (e) {
            let name = $(this).attr('data-name');
            let route = $(this).attr('data-route');
            let formData = new FormData();
            let target = $(this);
            formData.append('_token', $('[name="csrf-token"]').attr('content'));
            formData.append('file', this.files[0]);

            $.ajax({
                url: route,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {
                    let { url } = data.data;
                    let newImageElement = imageElementHtml.replace('$src', url);
                    $(target).closest('.add-new-image-main').append(newImageElement);
                    $(target).closest('.card-box-user__add-ads').css({
                        'display':'none'
                    });
                    $('#input-' + name).val(url);

                    $(target).closest('.add-new-image-main').find('.file-image-add__remove-image').on('click',function(){
                        $(target).closest('.add-new-image-main').find('.file-image-add').remove();
                        $(target).closest('.add-new-image-main').find('.card-box-user__add-ads').css({
                            'display':'flex'
                        });
                    });
                },
                error: function (xhr, status, error) {
                    console.log({xhr, status, error})
                }
            });
        });
    });
</script>
@endpush
