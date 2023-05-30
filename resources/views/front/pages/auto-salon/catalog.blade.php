@extends('front.layouts.app')

@section('content')
    <section class="catalog-sec-page catalog-showroom">
        <div class="general-conteiner">
            <h2 class="general-title">@lang('Avtosalon kataloqu')</h2>
            <div class="catalog_bread-crumbs">
                <a href="">@lang('Ana səhifə')</a>
                <p>/ @lang('Avtosalon kataloqu')</p>
            </div>
            <div class="catalog-showroom__ads-wrapper">
                <h2 class="general-titleV2">@lang('Verified avtosalonlar')</h2>
                @foreach([0,1,2,3,4,5] as $item)
                    <div class="catalog-showroom__card-box showroom-box">
                        <a href="{{ route('auto-salon.show') }}" class="overlay"></a>
                        <div class="showroom-box__image">
                            <img src="{{ asset('assets/front/img/_src/showroom.jpg') }}" alt="">
                        </div>
                        <div class="showroom-box__info-wrapper">
                            <h3 class="showroom-box__title">
                                <div class="showroom-box__verified">
                                    <div class="showroom-box__verified__anons">
                                        <p>Verified Salon</p>
                                    </div>
                                    <svg height="2500" width="2500" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 512 512">
                                        <g fill="none" fill-rule="evenodd">
                                            <path
                                                d="M256 472.153L176.892 512l-41.725-81.129-86.275-16.654 11.596-91.422L0 256l60.488-66.795-11.596-91.422 86.275-16.654L176.892 0 256 39.847 335.108 0l41.725 81.129 86.275 16.654-11.596 91.422L512 256l-60.488 66.795 11.596 91.422-86.275 16.654L335.108 512z"
                                                fill="#4285f4"/>
                                            <path
                                                d="M211.824 284.5L171 243.678l-36 36 40.824 40.824-.063.062 36 36 .063-.062.062.062 36-36-.062-.062L376.324 192l-36-36z"
                                                fill="#fff"/>
                                        </g>
                                    </svg>
                                </div>
                                Автосалон Mercedes-Benz Baku
                            </h3>
                            <p class="showroom-box__description">Автомобильный центр Absheron является официальным
                                дилером Mercedes-Benz в Азербайджане.</p>
                            <div class="showroom-box__contact-line">
                                <a href="tel:+3800501234567" class="cart-main-info__phone-conteiner">+380 (050) 123 - 45
                                    - 67</a>
                                <a href="tel:+3800501234567" class="cart-main-info__phone-conteiner">+380 (050) 123 - 45
                                    - 67</a>
                                <div
                                    class="cart-main-info__time-work">@lang('number reklam', ['number' => 12 ])</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="catalog-showroom__ads-wrapper">
                <h2 class="general-titleV2">@lang('Avtosalonlar')</h2>
                @foreach([0,1,2,3,4,5] as $item)
                    <div class="catalog-showroom__card-box showroom-box">
                        <a href="{{ route('auto-salon.show') }}" class="overlay"></a>
                        <div class="showroom-box__image">
                            <img src="{{ asset('assets/front/img/_src/showroom.jpg') }}" alt="">
                        </div>
                        <div class="showroom-box__info-wrapper">
                            <h3 class="showroom-box__title">
                                Автосалон Mercedes-Benz Baku
                            </h3>
                            <p class="showroom-box__description">Автомобильный центр Absheron является официальным
                                дилером Mercedes-Benz в Азербайджане.</p>
                            <div class="showroom-box__contact-line">
                                <a href="tel:+3800501234567" class="cart-main-info__phone-conteiner">+380 (050) 123 - 45
                                    - 67</a>
                                <a href="tel:+3800501234567" class="cart-main-info__phone-conteiner">+380 (050) 123 - 45
                                    - 67</a>
                                <div
                                    class="cart-main-info__time-work">@lang('number reklam', ['number' => 12 ])</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
