<div class="acordeon-conteiner__claster-wrapper">
    <div class="acordeon-conteiner__services-container services-container services-container_redact">
        @forelse($groups as $group)
            <div class="acordeon-conteiner__box acordeon-element">
                <div class="acordeon-conteiner__box-title acordeon-element__title">
                    <h4 class="cart-main-info__title">{{ $group->getAttribute('name') }}</h4>
                    <span class="acordeon-conteiner__box__nam-element">
                        {!! $group->icon !!}
                    </span>
                    <div class="acordeon-conteiner__open-icon">
                        <span class="ac-icV1"></span>
                        <span class="ac-icV2"></span>
                    </div>
                </div>
                <div class="acordeon-conteiner__claster acordeon-element__claster">
                    <div class="acordeon-conteiner__claster-wrapper">
                        <div class="box-redactor-text__checbox-advantages checkbox-services-redact">
                            @forelse($group->items as $item)
                                <div class="checkbox">
                                    <label class="custom-checkbox" for="service-group-{{ $item->id }}">
                                        <input type="checkbox" id="service-group-{{ $item->id }}" name="service_group[{{$group->id }}][]" value="{{ $item->id }}">
                                        <span>{{ $item->name }}</span>
                                    </label>
                                </div>
                            @empty
                                <p>@lang('Xidmət dəyəri boşdur')</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p>@lang('Xidmət yoxdur')</p>
        @endforelse
    </div>
</div>
