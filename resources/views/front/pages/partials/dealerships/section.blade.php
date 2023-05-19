<section class="auto-store">
    <div class="general-conteiner">
        <h2 class="general-title">Автомагазины</h2>

        <div class="auto-store__conteiner">
            @foreach($items as $index => $item)
                @include('front.pages.partials.dealerships.list-item', [
                    'index' => $index,
                    'item' => $item
                ])
            @endforeach
        </div>
    </div>
</section>
