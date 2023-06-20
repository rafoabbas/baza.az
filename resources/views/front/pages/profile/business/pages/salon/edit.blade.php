@extends('front.layouts.app')

@section('content')
    <section class="cart-main-info">
        <div class="general-conteiner">
            {!! $pageTitleHtml !!}
            <div class="cart-main-info__conteiner">
                @include('front.pages.profile.business.layout.partials.navbar')
                <form class="cart-main-info__body-info cart-main-info__body-info_account"
                      action="{{ route('profile.salon.update') }}" method="post">
                    @method('put')
                    @csrf
                    <div class="user-account-busines-claster">
                        <div class="user-account-busines-claster__rent-car-conteiner">
                            <div class="acordeon-conteiner__box acordeon-element activ-acordeon">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">@lang("Avtosalon əlaqə məlumatları")</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/01</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    @include('front.pages.profile.business.particles.section.form.contact', ['item' => $salon])
                                </div>
                            </div>
                            <div class="acordeon-conteiner__box acordeon-element activ-acordeon">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">@lang('Şəkillər')</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/02</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper">
                                        <div class="acordeon-conteiner__photo-claster">
                                            @include('front.pages.profile.business.particles.common.main-image', [
                                                'name' => 'image',
                                                'value' => $salon->getAttribute('image'),
                                                'groupClass' => 'user-acc-red-photo',
                                                'imageInfo' => 'на главном фото автосалона должно быть Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.'
                                            ])
                                            @include('front.pages.profile.business.particles.common.images', ['name' => 'images', 'value' => $salon->getAttribute('images')])
                                        </div>
                                        @include('front.pages.profile.business.particles.common.logo-image', ['name' => 'logo', 'value' => $salon->getAttribute('logo')])
                                        <div class="acordeon-conteiner__baner-claster">
                                            <h4 class="cart-main-info__title-ul">@lang('Banner ölçüləriniz') 740 х
                                                260:</h4>
                                        </div>
                                        <input type="file" multiple name="banners[]">
                                    </div>
                                </div>
                            </div>
                            <div class="acordeon-conteiner__box acordeon-element activ-acordeon">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">@lang('Təsvir və faydalar')</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/03</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper">
                                        @include('front.pages.profile.business.particles.common.descriptions', ['name' => 'description', 'value' => $salon->getAttribute('description')])
                                        @include('front.pages.profile.business.particles.common.checkbox-specifications', ['checked' => $salon->specificationIds])
                                    </div>
                                </div>
                            </div>
                            <div class="acordeon-conteiner__box acordeon-element activ-acordeon">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">@lang('Xəritədə Salon')</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/04</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    @include('front.pages.profile.business.particles.common.map', ['item' => $salon])
                                </div>
                            </div>
                            <div class="save-btn-line">
                                <button class="btn1">@lang('Yadda saxla')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
