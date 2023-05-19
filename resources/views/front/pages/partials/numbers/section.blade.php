<section class="vip-namber">
    <div class="general-conteiner">
        <h2 class="general-title">VIP номера</h2>
        <div class="vip-namber__conteiner">
            @foreach($items as $index => $item)
                @include('front.pages.partials.numbers.list-item', [
                    'index' => $index,
                    'item' => $item
                ])
            @endforeach
        </div>
        <div class="ads-conteiner__btn-line">
            <button class="btn1">Показать еще</button>
        </div>
    </div>
</section>
