<section class="search-security-services">
    <div class="general-conteiner">
        <h2 class="general-title">Ищите надежный автосервис?</h2>
        <p class="general-subtitle">В нашем каталоге более 100 проверенных станций со следующими направлениями: </p>
        <div class="search-security-services__conteiner">
            @foreach($items as $index => $item)
                @include('front.pages.partials.services.list-item', [
                    'index' => $index,
                    'item' => $item
                ])
            @endforeach
        </div>
    </div>
</section>
