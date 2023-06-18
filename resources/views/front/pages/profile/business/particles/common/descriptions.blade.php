@php
    $name  = $name ?? 'name';
    $value = $value ?? null;
@endphp
<div class="box-redactor-text">
    <h4 class="cart-main-info__title-ul">@lang('Təsvir'):</h4>
    <div class="acordeon-conteiner__description-conteiner">
        <textarea name="{{ $name }}" placeholder="Текст описание">{!! $value !!}</textarea>
    </div>
</div>
