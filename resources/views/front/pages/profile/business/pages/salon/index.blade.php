@extends('front.layouts.app')

@section('content')
    <section class="cart-main-info">
        <div class="general-conteiner">
            {!! $pageTitleHtml !!}
            <div class="cart-main-info__conteiner">
                @include('front.pages.profile.business.layout.partials.navbar')
                <div class="cart-main-info__body-info cart-main-info__body-info_account">
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
                                    @include('front.pages.profile.business.particles.section.view.contact', ['item' => $salon])
                                </div>
                            </div>
                            <div class="acordeon-conteiner__box acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">@lang('Şəkillər')</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/02</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    @include('front.pages.profile.business.particles.section.view.photos', ['item' => $salon])
                                </div>
                            </div>
                            <div class="acordeon-conteiner__box acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">@lang('Təsvir və faydalar')</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/03</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    @include('front.pages.profile.business.particles.section.view.description', ['item' => $salon])
                                </div>
                            </div>
                            <div class="acordeon-conteiner__box acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">@lang('Maşınlarınız')</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/04</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    @include('front.pages.profile.business.particles.section.view.autos', ['item' => $salon])
                                </div>
                            </div>
                            <div class="acordeon-conteiner__box acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">@lang('Xəritədə Salon')</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/05</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    @include('front.pages.profile.business.particles.section.view.map', ['item' => $salon])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
