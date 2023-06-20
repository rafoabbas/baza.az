@php
    $item = $item ?? null;
@endphp
<div class="acordeon-conteiner__claster-wrapper">
    <div class="user-account-ads__ads-line ads-body__conteiner ads-body__conteiner_rent-car-account">
        @foreach([0,1,2,3,4] as $item)
            <div class="card-box card-box-user">
                <div class="ads_image">
                    <img src="{{ asset('assets/front/img/_src/car7.jpg') }}" alt="">
                </div>
                <div class="card-box__info">
                    <h3 class="card-box__title">
                        <a href="">Ford Focus Sport Plus Ford Focus Sport</a>
                    </h3>
                    <div class="card-box-user__line-data">
                        <p class="card-box__date">08.02.2021, 16:58</p>
                        <p class="card-box__date"><b>Объявление №</b> 234 345 345</p>
                    </div>
                    <div class="card-box-user__prise-line">
                        <span class="card-box__prise">8 900$</span>
                        <span class="card-box-user__viev">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path d="M12 4.84668C7.41454 4.84668 3.25621 7.35543 0.187788 11.4303C-0.0625959 11.7641 -0.0625959 12.2305 0.187788 12.5644C3.25621 16.6442 7.41454 19.1529 12 19.1529C16.5855 19.1529 20.7438 16.6442 23.8122 12.5693C24.0626 12.2354 24.0626 11.769 23.8122 11.4352C20.7438 7.35543 16.5855 4.84668 12 4.84668ZM12.3289 17.0369C9.28506 17.2284 6.7714 14.7196 6.96287 11.6709C7.11998 9.1572 9.15741 7.11977 11.6711 6.96267C14.7149 6.7712 17.2286 9.27994 17.0371 12.3287C16.8751 14.8375 14.8377 16.8749 12.3289 17.0369ZM12.1767 14.7098C10.537 14.8129 9.18196 13.4628 9.28997 11.8231C9.37343 10.468 10.4732 9.37322 11.8282 9.28485C13.4679 9.18175 14.823 10.5319 14.7149 12.1716C14.6266 13.5316 13.5268 14.6264 12.1767 14.7098Z" fill="#324153"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="24" height="24" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                            <p>3 484</p>
                        </span>
                    </div>
                    <div class="card-box-user__controls-conteiner">
                        <div class="card-box-user__controls-box controls-box-ads">
                            <div class="controls-box-ads__icon">
                                <img src="{{ asset('assets/front/img/_src/c_redact.png') }}" alt="">
                            </div>
                            <p>Редактировать</p>
                        </div>
                        <div class="card-box-user__controls-box controls-box-ads">
                            <div class="controls-box-ads__icon">
                                <img src="{{ asset('assets/front/img/_src/c_viev.png') }}" alt="">
                            </div>
                            <p>Просмотреть</p>
                        </div>
                        <div class="card-box-user__controls-box controls-box-ads">
                            <div class="controls-box-ads__icon">
                                <img src="{{ asset('assets/front/img/_src/c_vip.png') }}" alt="">
                            </div>
                            <p>Сделать VIP</p>
                        </div>
                        <div class="card-box-user__controls-box controls-box-ads controls-box-ads_remove-style">
                            <div class="controls-box-ads__icon">
                                <img src="{{ asset('assets/front/img/_src/c_remove.png') }}" alt="">
                            </div>
                            <p>Удалить</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <a href="" class="card-box card-box-user card-box-user__add-ads">
            <div class="card-box-user__add-ads-conteiner">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M31.6665 18.3332H21.6665V8.33317C21.6665 7.89114 21.4909 7.46722 21.1783 7.15466C20.8658 6.8421 20.4419 6.6665 19.9998 6.6665C19.5578 6.6665 19.1339 6.8421 18.8213 7.15466C18.5088 7.46722 18.3332 7.89114 18.3332 8.33317V18.3332H8.33317C7.89114 18.3332 7.46722 18.5088 7.15466 18.8213C6.8421 19.1339 6.6665 19.5578 6.6665 19.9998C6.6665 20.4419 6.8421 20.8658 7.15466 21.1783C7.46722 21.4909 7.89114 21.6665 8.33317 21.6665H18.3332V31.6665C18.3332 32.1085 18.5088 32.5325 18.8213 32.845C19.1339 33.1576 19.5578 33.3332 19.9998 33.3332C20.4419 33.3332 20.8658 33.1576 21.1783 32.845C21.4909 32.5325 21.6665 32.1085 21.6665 31.6665V21.6665H31.6665C32.1085 21.6665 32.5325 21.4909 32.845 21.1783C33.1576 20.8658 33.3332 20.4419 33.3332 19.9998C33.3332 19.5578 33.1576 19.1339 32.845 18.8213C32.5325 18.5088 32.1085 18.3332 31.6665 18.3332Z" fill="#768A9E"></path>
                </svg>
                <p>@lang('elan əlavə edin')</p>
            </div>
        </a>
    </div>
    <div class="line-reload">
        <div class="line-reload__btn">
            <span>
                <img src="{{ asset('assets/front/img/_src/reload.png') }}" alt="">
            </span>
            <p>@lang('Daha çox göstər')</p>
        </div>
    </div>
</div>
