@php
    $item = $item ?? null;
@endphp

<div class="acordeon-conteiner__claster-wrapper">
    @if ($brands = $item->brands)
        <div class="brend-conteiner__claster acordeon-conteiner__brends">
            @foreach($brands as $brand)
                <div class="brend-conteiner__box">
                    <div class="brend-conteiner__icon">
                        <img src="{{ asset('storage/' . $brand->getAttribute('logo')) }}" srcset="{{ asset('assets/front/img/_src/mark1.svg') }}" alt="">
                    </div>
                    <h5 class="brend-conteiner__title">{{ $brand->getAttribute('name') }}</h5>
                </div>
            @endforeach
        </div>
    @endif
</div>
