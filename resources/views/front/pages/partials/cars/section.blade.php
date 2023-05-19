<section class="{{ $className ?? 'vip-ads'}}">
    <div class="general-conteiner">
        @if ($title ?? false)
            <h2 class="{{ $className ?? 'general'}}-title">{{ $title }}</h2>
        @endif
        @if ($subtitle ?? false)
            <p class="general-subtitle">{{ $subtitle }}</p>
        @endif
        @php($route = $route ?? null)
        @php($paginationType = $paginationType ?? null)
        <div class="ads-conteiner">
            @foreach($items as $item)
                @include('front.pages.partials.cars.list-item', [
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
