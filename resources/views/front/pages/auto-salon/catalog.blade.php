@extends('front.layouts.app')

@section('content')
    <section class="catalog-sec-page catalog-showroom">
        <div class="general-conteiner">
            <h2 class="general-title">Каталог автосалонов</h2>
            <div class="catalog_bread-crumbs">
                <a href="">Главная</a>
                <p>/ Каталог автосалонов</p>
            </div>
            <div class="catalog-showroom__ads-wrapper">
                @foreach([0,1,2,3,4,5] as $item)
                <div class="catalog-showroom__ads-box showroom-box">
                    <a href="{{ route('auto-salon.show') }}" class="showroom-box__image">
                        <img src="{{ asset('assets/front/img/_src/showroom.jpg') }}" alt="">
                    </a>
                    <div class="showroom-box__info-wrapper">
                        <h3 class="showroom-box__title">
                            <a href="{{ route('auto-salon.show') }}">Автосалон Mercedes-Benz Baku</a>
                        </h3>
                        <p class="showroom-box__description">Автомобильный центр Absheron является официальным дилером Mercedes-Benz в Азербайджане.</p>
                        <div class="showroom-box__contact-line">
                            <a href="tel:+3800501234567" class="cart-main-info__phone-conteiner">+380 (050) 123 - 45 - 67</a>
                            <a href="tel:+3800501234567" class="cart-main-info__phone-conteiner">+380 (050) 123 - 45 - 67</a>
                            <div class="cart-main-info__time-work">12 объявлений</div>
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
