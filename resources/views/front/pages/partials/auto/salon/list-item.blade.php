@php
    $item = $item ?? [];
    $verified = $verified ?? false;
@endphp

<div class="catalog-showroom__card-box showroom-box">
    <a href="{{ route('common.salon.show', $item->getAttribute('id')) }}" class="overlay"></a>
    <div class="showroom-box__image">
        <img src="{{ asset('storage/' . $item->getAttribute('image')) }}" alt="">
    </div>
    <div class="showroom-box__info-wrapper">
        <h3 class="showroom-box__title">
            @if ($verified)
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
            @endif
            {{ $item->getAttribute('name') }}
        </h3>
        <p class="showroom-box__description">
            {{ $item->getAttribute('description') }}
        </p>
        <div class="showroom-box__contact-line">
            @foreach($item->getAttribute('phones') as $key => $phone)
                @if ($key < 2)
                    <a href="tel:{{ data_get($phone, 'phone', null) }}" class="cart-main-info__phone-conteiner">
                        {{ data_get($phone, 'phone', null) }}
                    </a>
                @endif
            @endforeach
            <div class="cart-main-info__time-work">@lang(':number elan', ['number' => 12 ])</div>
        </div>
    </div>
</div>
