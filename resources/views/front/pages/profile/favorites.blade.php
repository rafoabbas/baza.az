@extends('front.layouts.app')

@section('content')
    <section class="cart-main-info favorites-section">
        <div class="general-conteiner">
            <h2 class="cart-main-info__title">Избранное</h2>
            <div class="catalog_bread-crumbs">
                <a href="">Главная</a>
                <p>/ Избранное</p>
            </div>
            <div class="favorites-section__conteiner">
                <div class="ads-conteiner">
                    @foreach([0,1,2,3,4,5] as $item)
                    <div class="card-box">
                        <div class="ads_image">
                            <div class="ads_image_dop-info">
                                <div class="dop-info__element dop_store">автосалон</div>
                                <div class="dop-info__element dop_vip">новый</div>
                                <div class="dop-info__element dop_new">VIP</div>
                            </div>
                            <img src="{{ asset('assets/front/img/_src/car8.jpg') }}" alt="">
                        </div>
                        <div class="card-box__info">
                            <h3 class="card-box__title">
                                <a href="">Ford Focus Sport Plus Ford Focus Sport</a>
                            </h3>
                            <p class="card-box__date">08.02.2021, 16:58</p>
                            <div class="card-box__tegs-conteiner">
                                <div class="card-box__tegs-line">
                                    <span class="card-box__tegs-element">2014 г.</span>
                                    <span class="card-box__tegs-element">100 000 км</span>
                                    <span class="card-box__tegs-element">г. Баку</span>
                                    <span class="card-box__tegs-element">Механика</span>
                                    <span class="card-box__tegs-element">Бензин, 2.0 л</span>
                                </div>
                                <div class="card-box__tegs-image">
                                    <div class="card-box__tegs-img-element">
                                        <img src="{{ asset('assets/front/img/_src/sale.svg') }}" alt="">
                                    </div>
                                    <div class="card-box__tegs-img-element">
                                        <img src="{{ asset('assets/front/img/_src/trade.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="card-box__prise-line">
                                <span class="card-box__prise">8 900$</span>
                                <p class="card-box__date">08.02.2021, 16:58</p>
                                <div class="card-box__add-icon__conteiner">
                                    <div class="card-box__add-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.3281 23.25C18.3281 22.085 17.3837 21.1406 16.2188 21.1406H7.78125C6.61627 21.1406 5.67188 22.085 5.67188 23.25V24H18.3281V23.25Z" fill="#768A9E"></path>
                                            <path d="M22.5938 5.67187V4.26562H13.9799C13.7674 3.66994 13.2988 3.20133 12.7031 2.98889V0H11.2969V2.98889C10.7012 3.20133 10.2326 3.66994 10.0201 4.26562H1.40625V5.67187H3.16425L0 13.4062C0 15.3447 1.5772 16.9219 3.51562 16.9219H4.92188C6.8603 16.9219 8.4375 15.3447 8.4375 13.4062L5.25895 5.67187H10.0202C10.2326 6.26756 10.7012 6.73617 11.2969 6.94861V16.9989C9.92278 17.2801 8.83575 18.3597 8.55558 19.7344H15.4445C15.1643 18.3597 14.0773 17.2801 12.7032 16.9989V6.94861C13.2989 6.73617 13.7675 6.26756 13.9799 5.67187H18.7268L15.5625 13.4062C15.5625 15.3447 17.1397 16.9219 19.0781 16.9219H20.4844C22.4228 16.9219 24 15.3447 24 13.4062L20.8215 5.67187H22.5938ZM6.6795 12.7031H1.758L4.21875 6.79659L6.6795 12.7031ZM22.242 12.7031H17.3205L19.7812 6.79659L22.242 12.7031Z" fill="#768A9E"></path>
                                        </svg>
                                    </div>
                                    <div class="card-box__add-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.5607 21.0002C17.4008 21.0008 17.2431 20.9631 17.1007 20.8902L12.0007 18.2202L6.90074 20.8902C6.73513 20.9773 6.54842 21.0162 6.36182 21.0024C6.17522 20.9887 5.99622 20.9228 5.84517 20.8124C5.69412 20.702 5.57708 20.5514 5.50735 20.3778C5.43763 20.2041 5.41801 20.0144 5.45074 19.8302L6.45074 14.2002L2.33074 10.2002C2.2022 10.0719 2.11101 9.91107 2.06697 9.7349C2.02292 9.55872 2.02768 9.37388 2.08074 9.2002C2.1387 9.02248 2.24532 8.86456 2.38849 8.74436C2.53166 8.62417 2.70566 8.54651 2.89074 8.5202L8.59074 7.6902L11.1007 2.5602C11.1826 2.39113 11.3105 2.24855 11.4697 2.14878C11.6288 2.04901 11.8129 1.99609 12.0007 1.99609C12.1886 1.99609 12.3727 2.04901 12.5318 2.14878C12.691 2.24855 12.8189 2.39113 12.9007 2.5602L15.4407 7.6802L21.1407 8.5102C21.3258 8.53651 21.4998 8.61417 21.643 8.73436C21.7862 8.85456 21.8928 9.01248 21.9507 9.1902C22.0038 9.36388 22.0086 9.54872 21.9645 9.7249C21.9205 9.90107 21.8293 10.0619 21.7007 10.1902L17.5807 14.1902L18.5807 19.8202C18.6164 20.0077 18.5977 20.2015 18.5269 20.3787C18.456 20.5559 18.3359 20.7091 18.1807 20.8202C17.9997 20.9471 17.7816 21.0104 17.5607 21.0002V21.0002Z" fill="#768A9E"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
