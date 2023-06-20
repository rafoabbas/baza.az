@php
    $item = $item ?? null;
@endphp

<div class="acordeon-conteiner__claster-wrapper">
    @if ($specifications = $item->getAttribute('specifications'))
        <div class="box-redactor-text">
            <h4 class="cart-main-info__title-ul">@lang('Üstünlüklər'):</h4>
            <ul>
                @foreach ($specifications as $specification)
                    <li>{{ $specification->name }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($description = $item->getAttribute('description'))
        <div class="box-redactor-text">
            <h4 class="cart-main-info__title-ul">@lang('Təsvir'):</h4>
            <p>{!! $description !!}</p>
        </div>
    @endif
</div>
