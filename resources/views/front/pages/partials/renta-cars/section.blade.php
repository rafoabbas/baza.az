<section class="{{ $className ?? 'rent-car' }}">
    <div class="general-conteiner">
        <h2 class="{{ $className ?? 'general'}}-title">Аренда автомобиля</h2>
        @php($showFilter = $showFilter ?? null)
        @if ($showFilter)
            <div class="rent-car__search-conteiner">
                <div class="rent-car__search-select">
                    <select name="" id="" class="select-type1">
                        <option value="">Класс автомобиля</option>
                        <option value="">@lang('Minik')</option>
                    </select>
                </div>
                <div class="rent-car__search-select">
                    <select name="" id="" class="select-type1">
                        <option value="">Коробка передач</option>
                        <option value="">Автомат</option>
                    </select>
                </div>
                <div class="rent-car__search-select">
                    <select name="" id="" class="select-type1">
                        <option value="">Город</option>
                        <option value="">Киев</option>
                    </select>
                </div>
                <div class="btn2">
                    <div class="icon-btn2">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.8067 12.86L11.54 10.6C12.2713 9.66831 12.6681 8.51777 12.6667 7.33334C12.6667 6.2785 12.3539 5.24736 11.7678 4.37029C11.1818 3.49323 10.3489 2.80965 9.37431 2.40598C8.39977 2.00231 7.32742 1.89669 6.29285 2.10248C5.25829 2.30827 4.30798 2.81622 3.5621 3.5621C2.81622 4.30798 2.30827 5.25829 2.10248 6.29285C1.89669 7.32742 2.00231 8.39977 2.40598 9.37431C2.80965 10.3489 3.49323 11.1818 4.37029 11.7678C5.24736 12.3539 6.2785 12.6667 7.33334 12.6667C8.51777 12.6681 9.66831 12.2713 10.6 11.54L12.86 13.8067C12.922 13.8692 12.9957 13.9188 13.077 13.9526C13.1582 13.9864 13.2453 14.0039 13.3333 14.0039C13.4213 14.0039 13.5085 13.9864 13.5897 13.9526C13.671 13.9188 13.7447 13.8692 13.8067 13.8067C13.8692 13.7447 13.9188 13.671 13.9526 13.5897C13.9864 13.5085 14.0039 13.4213 14.0039 13.3333C14.0039 13.2453 13.9864 13.1582 13.9526 13.077C13.9188 12.9957 13.8692 12.922 13.8067 12.86V12.86ZM3.33334 7.33334C3.33334 6.54221 3.56793 5.76885 4.00746 5.11106C4.44698 4.45326 5.0717 3.94057 5.8026 3.63782C6.53351 3.33507 7.33777 3.25585 8.1137 3.41019C8.88962 3.56454 9.60235 3.9455 10.1618 4.50491C10.7212 5.06432 11.1021 5.77705 11.2565 6.55297C11.4108 7.3289 11.3316 8.13317 11.0289 8.86407C10.7261 9.59497 10.2134 10.2197 9.55562 10.6592C8.89782 11.0987 8.12446 11.3333 7.33334 11.3333C6.27247 11.3333 5.25505 10.9119 4.50491 10.1618C3.75476 9.41162 3.33334 8.3942 3.33334 7.33334Z" fill="#768A9E"/>
                        </svg>
                    </div>
                    <p>Найти</p>
                </div>
            </div>
        @endif
        @php($route = $route ?? null)
        @php($paginationType = $paginationType ?? null)
        <div class="rent-car__car-conteiner">
            @foreach($items as $item)
                @include('front.pages.partials.renta-cars.list-item', [
                    'item' => $item,
                    'route' => $route
                ])
            @endforeach
        </div>
        @if ($paginationType === 'button')
            <div class="ads-conteiner__btn-line">
                <button class="btn1">Больше авто</button>
            </div>
        @else
            <div class="line-reload">
                <div class="line-reload__btn">
                <span>
                    <img src="{{ asset('assets/front/img/_src/reload.png') }}" alt="">
                </span>
                    <p>Показать еще</p>
                </div>
            </div>
        @endif
    </div>
</section>
