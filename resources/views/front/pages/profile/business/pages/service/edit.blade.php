@extends('front.layouts.app')

@section('content')
    <section class="cart-main-info">
        <div class="general-conteiner">
            {!! $pageTitleHtml !!}
            <div class="cart-main-info__conteiner">
                @include('front.pages.profile.business.layout.partials.navbar')
                <form class="cart-main-info__body-info cart-main-info__body-info_account" action="{{ route('profile.service.update') }}" method="post">
                    @method('put')
                    @csrf
                    <div class="user-account-busines-claster">
                        <div class="user-account-busines-claster__rent-car-conteiner">
                            <div class="acordeon-conteiner__box acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">@lang("Servis əlaqə məlumatları")</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/01</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper information-about-company">
                                        <div class="information-about-company__redact-claster">
                                            <p class="redact-info-subtitle">@lang('Bütün sahələr tələb olunur')</p>
                                            <div class="information-about-company__main-info-redact main-info-redact">
                                                <div class="user-main-info__inp-info input-form-conteiner">
                                                    <h5 class="input-form-conteiner__title">@lang('"Şirkət adı"'):</h5>
                                                    <div class="input-form-conteiner__claster">
                                                        <input type="text" class="input-form-conteiner__input" name="name" placeholder="@lang('"Şirkət adı"')" value="{{ $service->getAttribute('name') }}">
                                                    </div>
                                                </div>
                                                <div class="user-main-info__inp-info input-form-conteiner">
                                                    <h5 class="input-form-conteiner__title">@lang('Servis ünvanı'):</h5>
                                                    <div class="input-form-conteiner__claster">
                                                        <input type="text" class="input-form-conteiner__input" name="address" placeholder="@lang('Servis ünvanı')" value="{{ $service->getAttribute('address') }}">
                                                    </div>
                                                </div>
                                                <div class="main-info-redact__flex-line-V1">
                                                    <div class="user-main-info__inp-info input-form-conteiner">
                                                        <h5 class="input-form-conteiner__title">@lang('E poçta'):</h5>
                                                        <div class="input-form-conteiner__claster">
                                                            <input type="text" class="input-form-conteiner__input" name="email" placeholder="info@example.com" value="{{ $service->getAttribute('email') }}">
                                                        </div>
                                                    </div>
                                                    <div class="user-main-info__inp-info input-form-conteiner">
                                                        <h5 class="input-form-conteiner__title">@lang('Link'):</h5>
                                                        <div class="input-form-conteiner__claster">
                                                            <input type="text" class="input-form-conteiner__input" name="web_site" placeholder="avto.com" value="{{ $service->getAttribute('web_site') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="main-info-redact__flex-line-V2">
                                                    <h5 class="main-info-redact__title-flex-line">@lang('İş saatları'):</h5>
                                                    <div class="input-form-conteiner">
                                                        <h5 class="input-form-conteiner__title">@lang('Həftəiçi'):</h5>
                                                        <div class="input-form-conteiner__claster">
                                                            <input type="text" class="input-form-conteiner__input" name="working_hours[weekdays]" placeholder="08:00 — 20:00" value="{{ $service->getAttribute('working_hours.weekdays') }}">
                                                        </div>
                                                    </div>
                                                    <div class="input-form-conteiner">
                                                        <h5 class="input-form-conteiner__title">@lang('Şənbə'):</h5>
                                                        <div class="input-form-conteiner__claster">
                                                            <input type="text" class="input-form-conteiner__input" name="working_hours[saturday]" placeholder="08:00 — 20:00" value="{{ $service->getAttribute('working_hours.saturday') }}">
                                                        </div>
                                                    </div>
                                                    <div class="input-form-conteiner">
                                                        <h5 class="input-form-conteiner__title">@lang('Bazar'):</h5>
                                                        <div class="input-form-conteiner__claster">
                                                            <input type="text" class="input-form-conteiner__input" name="working_hours[sunday]" placeholder="08:00 — 20:00" value="{{ $service->getAttribute('working_hours.sunday') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="information-about-company__dop-info-redact">
                                                @include('front.pages.profile.business.particles.common.select-regions', ['selected' => $service->getAttribute('region_id')])
                                                @include('front.pages.profile.business.particles.common.phones', ['phones' => $service->getAttribute('phones')])
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="acordeon-conteiner__box acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">@lang('Şəkillər')</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/02</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper">
                                        <div class="acordeon-conteiner__photo-claster">
                                            <div class="photo-conteiner-add__main-photo">
                                                <h4 class="cart-main-info__title-ul">@lang('Əsas şəkil') :</h4>
                                                <div class="photo-conteiner-add__main-image-conteiner add-new-image-main">
                                                    <div class="file-image-add">
                                                        <div class="file-image-add__remove-image other-box__close"></div>
                                                        <div class="file-image-add__element">
                                                            <img src="{{ asset('assets/front/img/_src/car5.jpg') }}" alt="">
                                                        </div>
                                                    </div>
                                                    <a class="card-box-user__add-ads" style="display: none;">
                                                        <label class="custom-file-upload">
                                                            <input type="file"  accept="image/heic, image/png, image/jpeg, image/webp" id="main-car-photo-donload" >
                                                            <div class="card-box-user__add-ads-conteiner">
                                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M31.6665 18.3332H21.6665V8.33317C21.6665 7.89114 21.4909 7.46722 21.1783 7.15466C20.8658 6.8421 20.4419 6.6665 19.9998 6.6665C19.5578 6.6665 19.1339 6.8421 18.8213 7.15466C18.5088 7.46722 18.3332 7.89114 18.3332 8.33317V18.3332H8.33317C7.89114 18.3332 7.46722 18.5088 7.15466 18.8213C6.8421 19.1339 6.6665 19.5578 6.6665 19.9998C6.6665 20.4419 6.8421 20.8658 7.15466 21.1783C7.46722 21.4909 7.89114 21.6665 8.33317 21.6665H18.3332V31.6665C18.3332 32.1085 18.5088 32.5325 18.8213 32.845C19.1339 33.1576 19.5578 33.3332 19.9998 33.3332C20.4419 33.3332 20.8658 33.1576 21.1783 32.845C21.4909 32.5325 21.6665 32.1085 21.6665 31.6665V21.6665H31.6665C32.1085 21.6665 32.5325 21.4909 32.845 21.1783C33.1576 20.8658 33.3332 20.4419 33.3332 19.9998C33.3332 19.5578 33.1576 19.1339 32.845 18.8213C32.5325 18.5088 32.1085 18.3332 31.6665 18.3332Z" fill="#768A9E"></path>
                                                                </svg>
                                                                <p>@lang('Əsas şəkil əlavə edin')</p>
                                                            </div>
                                                        </label>
                                                    </a>
                                                </div>
{{--                                                <div class="photo-conteiner-add__main-image-info">--}}
{{--                                                    <div class="waring-text">--}}
{{--                                                        <span>Важно:</span>--}}
{{--                                                        <p>на главном фото автосалона должно быть Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                            </div>
                                            <div class="acordeon-conteiner__other-photo-conteiner">
                                                <h4 class="cart-main-info__title-ul">@lang('Digər fotoşəkillər') (не более 20):</h4>
                                                <div class="photo-conteiner-add__other-photo-conteiner">
                                                    <div class="hoto-conteiner-add__other-box other-box">
                                                        <div class="other-box__close"></div>
                                                        <div class="other-box__image">
                                                            <img src="{{ asset('assets/front/img/_src/car6.jpg') }}" alt="">
                                                        </div>
                                                    </div>
                                                    <a class="card-box-user__add-ads card-box-user__add-ads_filedonload" >
                                                        <label class="custom-file-upload">
                                                            <input type="file"  accept="image/heic, image/png, image/jpeg, image/webp" id="addotherimage" >
                                                            <div class="card-box-user__add-ads-conteiner">
                                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M31.6665 18.3332H21.6665V8.33317C21.6665 7.89114 21.4909 7.46722 21.1783 7.15466C20.8658 6.8421 20.4419 6.6665 19.9998 6.6665C19.5578 6.6665 19.1339 6.8421 18.8213 7.15466C18.5088 7.46722 18.3332 7.89114 18.3332 8.33317V18.3332H8.33317C7.89114 18.3332 7.46722 18.5088 7.15466 18.8213C6.8421 19.1339 6.6665 19.5578 6.6665 19.9998C6.6665 20.4419 6.8421 20.8658 7.15466 21.1783C7.46722 21.4909 7.89114 21.6665 8.33317 21.6665H18.3332V31.6665C18.3332 32.1085 18.5088 32.5325 18.8213 32.845C19.1339 33.1576 19.5578 33.3332 19.9998 33.3332C20.4419 33.3332 20.8658 33.1576 21.1783 32.845C21.4909 32.5325 21.6665 32.1085 21.6665 31.6665V21.6665H31.6665C32.1085 21.6665 32.5325 21.4909 32.845 21.1783C33.1576 20.8658 33.3332 20.4419 33.3332 19.9998C33.3332 19.5578 33.1576 19.1339 32.845 18.8213C32.5325 18.5088 32.1085 18.3332 31.6665 18.3332Z" fill="#768A9E"></path>
                                                                </svg>
                                                                <p>@lang('Foto əlavə edin')</p>
                                                            </div>
                                                        </label>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="acordeon-conteiner__baner-claster">
                                            <h4 class="cart-main-info__title-ul">@lang('Banner ölçüləriniz') 1280 х 400:</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="acordeon-conteiner__box acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">@lang('Təsvir və faydalar')</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/03</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper">
                                        <div class="box-redactor-text">
                                            <h4 class="cart-main-info__title-ul">@lang('Təsvir'):</h4>
                                            <div class="acordeon-conteiner__description-conteiner">
                                                <textarea placeholder="Текст описание">Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Quos aut consectetur, sunt sed. Ducimus laborum iure architecto, nesciunt, tempora porro quidem possimus quaerat repellendus doloribus, illum, nihil. Unde, odio quas.</textarea>
                                            </div>
                                        </div>
                                        @include('front.pages.profile.business.particles.common.checkbox-specifications', ['checked' => []])
                                    </div>
                                </div>
                            </div>
                            <div class="acordeon-conteiner__box acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">@lang('Xidmətləriniz')</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/04</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
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
                                </div>
                            </div>
                            <div class="acordeon-conteiner__box acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">@lang('Servisimizin işlədiyi brendlər')</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/05</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper">
                                        <div class="brend-conteiner__claster acordeon-conteiner__brends acordeon-conteiner__brends_redact brands-redact">
                                            <div class="checkbox brands-redact__all-brands">
                                                <label class="custom-checkbox">
                                                    <input type="checkbox" name="carbody" value="Viber">
                                                    <span>@lang('Bütün markalar')</span>
                                                </label>
                                            </div>
                                            <div class="brands_redact__list-brands">
                                                @forelse($brands as $brand)
                                                    <div class="checkbox">
                                                        <label class="custom-checkbox" for="car-brand-{{ $brand->id }}">
                                                            <input type="checkbox" id="car-brand-{{ $brand->id }}" name="car_brand[]" value="{{ $brand->id }}">
                                                            <span>{{ $brand->getAttribute('name') }}</span>
                                                        </label>
                                                    </div>
                                                @empty
                                                    <p>@lang('Marka yoxdur')</p>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="acordeon-conteiner__box acordeon-element">
                                <div class="acordeon-conteiner__box-title acordeon-element__title">
                                    <h4 class="cart-main-info__title">@lang('Xəritədə Servis')</h4>
                                    <span class="acordeon-conteiner__box__nam-element">/06</span>
                                    <div class="acordeon-conteiner__open-icon">
                                        <span class="ac-icV1"></span>
                                        <span class="ac-icV2"></span>
                                    </div>
                                </div>
                                <div class="acordeon-conteiner__claster acordeon-element__claster">
                                    <div class="acordeon-conteiner__claster-wrapper">
                                        <div class="acordeon-conteiner__add-more-location add-more-location">
                                            <div class="add-more-location__row add-more-location__defoult-location">
                                                <div class="catalog__filtr__filtr-element add-more-location__big-select">
                                                    <h5>@lang('Küçə'):</h5>
                                                    <div class="filtr-element__select">
                                                        <select name="" id="" class="full-select">
                                                            <option value="">Улица</option>
                                                            <option value="">Щевченка</option>
                                                            <option value="">Щевченка</option>
                                                            <option value="">Щевченка</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="btn-add-del del-location">
                                                    <div class="btn-add-del__icon">
                                                        <img src="{{ asset('assets/front/img/_src/del-ic.png') }}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="add-more-location__new-location">
                                                <div class="btn-add-del add-location">
                                                    <div class="btn-add-del__icon">
                                                        <img src="{{ asset('assets/front/img/_src/add-ic.png') }}" alt="">
                                                    </div>
                                                    <span>@lang('Başqa bir ünvan əlavə edin')</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="map3"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="save-btn-line">
                                <button type="submit" class="btn1">@lang('Yadda saxla')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
