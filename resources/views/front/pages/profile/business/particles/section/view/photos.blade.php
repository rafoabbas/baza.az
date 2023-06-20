@php
    $item = $item ?? null;
@endphp

<div class="acordeon-conteiner__claster-wrapper">
    <div class="acordeon-conteiner__photo-claster">
        @if ($image = $item->getAttribute('image'))
            <div class="acordeon-conteiner__main-photo-claster">
                <h4 class="cart-main-info__title-ul">@lang('Əsas şəkil'):</h4>
                <div class="photo-conteiner-add__main-image-conteiner add-new-image-main">
                    <div class="file-image-add">
                        <div class="file-image-add__element">
                            <img src="{{ asset('storage/' . $image) }}" srcset="{{ asset('assets/front/img/_src/car1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if ($logo = $item->getAttribute('logo'))
            <div class="acordeon-conteiner__logo-conteiner">
                <h4 class="cart-main-info__title-ul">@lang('Logo')</h4>
                <div class="acordeon-conteiner__logo-image">
                    <img src="{{ asset('storage/' . $logo) }}" srcset="{{ asset('assets/front/img/_src/lx.png') }}" alt="">
                </div>
            </div>
        @endif
        @if ($images = $item->images)
            <div class="acordeon-conteiner__other-photo-conteiner">
                <h4 class="cart-main-info__title-ul">@lang('Digər fotoşəkillər'):</h4>
                <div class="photo-conteiner-add__other-photo-conteiner">
                    @foreach($images as $image)
                        <div class="other-box hoto-conteiner-add__other-box">
                            <div class="other-box__image">
                                <img src="{{ asset('storage/' . $image) }}" srcset="{{ asset('assets/front/img/_src/car1.jpg') }}" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
    @if ($banners = $item->banners)
        <div class="acordeon-conteiner__baner-claster">
            <h4 class="cart-main-info__title-ul">@lang('Banner ölçüləriniz') 1280 х 400:</h4>
            @foreach($banners as $banner)
                <div class="rent-car__baners">
                    <img src="{{ asset('storage/' . $banner) }}" srcset="{{ asset('assets/front/img/_src/baner-sto.jpg') }}" alt="">
                </div>
            @endforeach
        </div>
    @endif
</div>
