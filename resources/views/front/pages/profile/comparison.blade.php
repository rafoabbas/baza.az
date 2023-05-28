@extends('front.layouts.app')

@section('content')
    <section class="cart-main-info simile-cars">
        <div class="general-conteiner">
            <h2 class="cart-main-info__title simile-cars__main-title">Сравнение автомобилей Pajero Sport и Nissan Patrol</h2>
            <div class="simile-cars__conteiner">
                <div class="simile-cars__header">
                    <a href="" class="simile-cars__header-btn">
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.85982 20.1863C6.85982 19.2337 6.08758 18.4614 5.13499 18.4614C4.18239 18.4614 3.41016 19.2337 3.41016 20.1863C3.41016 21.1389 4.18239 21.9111 5.13499 21.9111C6.08713 21.9101 6.85873 21.1385 6.85982 20.1863Z" fill="#0D417B"/>
                            <path d="M22.3543 16.0838L20.312 15.1474C20.2208 15.1081 20.1433 15.0425 20.0895 14.9589L18.3077 12.1268C17.9957 11.6363 17.4505 11.344 16.8693 11.3558H9.628C9.10154 11.3475 8.60139 11.5855 8.27569 11.9992L5.98066 14.9846C5.91075 15.0745 5.81345 15.1391 5.70345 15.1687L1.85979 16.2166C1.35892 16.3516 1.00815 16.8021 1 17.3208V18.7216C1 19.3527 1.54711 19.8863 2.17817 19.8863H2.40266C2.55056 18.62 3.54921 17.6214 4.81551 17.4735C6.32432 17.2973 7.69029 18.3775 7.86648 19.8863H15.941C16.0889 18.62 17.0875 17.6214 18.3538 17.4735C19.8626 17.2973 21.2286 18.3775 21.4048 19.8863H21.9055C22.5366 19.8863 22.9997 19.3527 22.9997 18.7216V17.1228C23.0094 16.6792 22.7563 16.2717 22.3543 16.0838Z" fill="#0D417B"/>
                            <path d="M18.6721 21.9111C19.6242 21.91 20.3958 21.1385 20.3969 20.1863V20.1863C20.3969 19.2337 19.6247 18.4614 18.6721 18.4614C17.7195 18.4614 16.9473 19.2337 16.9473 20.1863C16.9473 21.1389 17.7195 21.9111 18.6721 21.9111Z" fill="#0D417B"/>
                            <path d="M22.0586 5.5H19.0586V2.5C19.0586 2.36739 19.0059 2.24021 18.9121 2.14645C18.8184 2.05268 18.6912 2 18.5586 2C18.426 2 18.2988 2.05268 18.205 2.14645C18.1113 2.24021 18.0586 2.36739 18.0586 2.5V5.5H15.0586C14.926 5.5 14.7988 5.55268 14.705 5.64645C14.6113 5.74021 14.5586 5.86739 14.5586 6C14.5586 6.13261 14.6113 6.25979 14.705 6.35355C14.7988 6.44732 14.926 6.5 15.0586 6.5H18.0586V9.5C18.0586 9.63261 18.1113 9.75979 18.205 9.85355C18.2988 9.94732 18.426 10 18.5586 10C18.6912 10 18.8184 9.94732 18.9121 9.85355C19.0059 9.75979 19.0586 9.63261 19.0586 9.5V6.5H22.0586C22.1912 6.5 22.3184 6.44732 22.4121 6.35355C22.5059 6.25979 22.5586 6.13261 22.5586 6C22.5586 5.86739 22.5059 5.74021 22.4121 5.64645C22.3184 5.55268 22.1912 5.5 22.0586 5.5Z" fill="#0D417B"/>
                            </svg>
                        </span>
                        <p>Добавить еще авто</p>
                    </a>
                    <a href="" class="simile-cars__header-btn">
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.3281 23.25C18.3281 22.085 17.3837 21.1406 16.2188 21.1406H7.78125C6.61627 21.1406 5.67188 22.085 5.67188 23.25V24H18.3281V23.25Z" fill="#0D417B"/>
                            <path d="M22.5938 5.67187V4.26562H13.9799C13.7674 3.66994 13.2988 3.20133 12.7031 2.98889V0H11.2969V2.98889C10.7012 3.20133 10.2326 3.66994 10.0201 4.26562H1.40625V5.67187H3.16425L0 13.4062C0 15.3447 1.5772 16.9219 3.51562 16.9219H4.92188C6.8603 16.9219 8.4375 15.3447 8.4375 13.4062L5.25895 5.67187H10.0202C10.2326 6.26756 10.7012 6.73617 11.2969 6.94861V16.9989C9.92278 17.2801 8.83575 18.3597 8.55558 19.7344H15.4445C15.1643 18.3597 14.0773 17.2801 12.7032 16.9989V6.94861C13.2989 6.73617 13.7675 6.26756 13.9799 5.67187H18.7268L15.5625 13.4062C15.5625 15.3447 17.1397 16.9219 19.0781 16.9219H20.4844C22.4228 16.9219 24 15.3447 24 13.4062L20.8215 5.67187H22.5938ZM6.6795 12.7031H1.758L4.21875 6.79659L6.6795 12.7031ZM22.242 12.7031H17.3205L19.7812 6.79659L22.242 12.7031Z" fill="#0D417B"/>
                            </svg>
                        </span>
                        <p>Списки сравнения</p>
                    </a>
                    <a href="" class="simile-cars__header-btn">
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path d="M19.2285 16.9749C18.3129 16.9749 17.4876 17.3303 16.8611 17.9026L8.27673 12.8966C8.34298 12.6255 8.38517 12.3424 8.38517 12.0532C8.38517 11.7641 8.34298 11.4809 8.27673 11.2099L16.7707 6.25202C17.4153 6.85445 18.2768 7.22793 19.2285 7.22793C21.2225 7.22793 22.843 5.60747 22.843 3.61347C22.843 1.61948 21.2225 -0.000976562 19.2285 -0.000976562C17.2345 -0.000976562 15.6141 1.61948 15.6141 3.61347C15.6141 3.90263 15.6563 4.18574 15.7225 4.45683L7.22854 9.41461C6.58398 8.81218 5.7225 8.43871 4.77071 8.43871C2.77671 8.43871 1.15625 10.0592 1.15625 12.0532C1.15625 14.0472 2.77671 15.6676 4.77071 15.6676C5.7225 15.6676 6.58398 15.2941 7.22854 14.6917L15.8129 19.6977C15.7526 19.9507 15.7165 20.2158 15.7165 20.4869C15.7165 22.4266 17.2888 23.9989 19.2285 23.9989C21.1683 23.9989 22.7406 22.4266 22.7406 20.4869C22.7406 18.5471 21.1683 16.9749 19.2285 16.9749Z" fill="#0D417B"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        <p>Поделиться списком сравнения</p>
                    </a>
                </div>
                <div class="simile-cars__row">
                    <div class="simile-cars__box">
                        <span class="simile-cars__image">
                            <img src="{{ asset('assets/front/img/_src/car4.jpg') }}" alt="">
                        </span>
                        <div class="simile-cars__info-about">
                            <div class="simile-cars__header-box">
                                <h5 class="simile-cars__title"><a href="">Mitsubishi Pajero Sport</a></h5>
                                <div class="card-box__add-icon__conteiner">
                                    <div class="card-box__add-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.3281 23.25C18.3281 22.085 17.3837 21.1406 16.2188 21.1406H7.78125C6.61627 21.1406 5.67188 22.085 5.67188 23.25V24H18.3281V23.25Z" fill="#768A9E"></path>
                                            <path d="M22.5938 5.67187V4.26562H13.9799C13.7674 3.66994 13.2988 3.20133 12.7031 2.98889V0H11.2969V2.98889C10.7012 3.20133 10.2326 3.66994 10.0201 4.26562H1.40625V5.67187H3.16425L0 13.4062C0 15.3447 1.5772 16.9219 3.51562 16.9219H4.92188C6.8603 16.9219 8.4375 15.3447 8.4375 13.4062L5.25895 5.67187H10.0202C10.2326 6.26756 10.7012 6.73617 11.2969 6.94861V16.9989C9.92278 17.2801 8.83575 18.3597 8.55558 19.7344H15.4445C15.1643 18.3597 14.0773 17.2801 12.7032 16.9989V6.94861C13.2989 6.73617 13.7675 6.26756 13.9799 5.67187H18.7268L15.5625 13.4062C15.5625 15.3447 17.1397 16.9219 19.0781 16.9219H20.4844C22.4228 16.9219 24 15.3447 24 13.4062L20.8215 5.67187H22.5938ZM6.6795 12.7031H1.758L4.21875 6.79659L6.6795 12.7031ZM22.242 12.7031H17.3205L19.7812 6.79659L22.242 12.7031Z" fill="#768A9E"></path>
                                        </svg>
                                    </div>
                                    <div class="card-box__add-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 5.99991H16V4.32991C15.9765 3.68973 15.7002 3.08497 15.2316 2.64821C14.7629 2.21144 14.1402 1.97831 13.5 1.99991H10.5C9.85975 1.97831 9.23706 2.21144 8.76843 2.64821C8.2998 3.08497 8.02346 3.68973 8 4.32991V5.99991H3C2.73478 5.99991 2.48043 6.10527 2.29289 6.29281C2.10536 6.48034 2 6.7347 2 6.99991C2 7.26513 2.10536 7.51948 2.29289 7.70702C2.48043 7.89456 2.73478 7.99991 3 7.99991H4V18.9999C4 19.7956 4.31607 20.5586 4.87868 21.1212C5.44129 21.6838 6.20435 21.9999 7 21.9999H17C17.7956 21.9999 18.5587 21.6838 19.1213 21.1212C19.6839 20.5586 20 19.7956 20 18.9999V7.99991H21C21.2652 7.99991 21.5196 7.89456 21.7071 7.70702C21.8946 7.51948 22 7.26513 22 6.99991C22 6.7347 21.8946 6.48034 21.7071 6.29281C21.5196 6.10527 21.2652 5.99991 21 5.99991ZM10 15.9999C10 16.2651 9.89464 16.5195 9.70711 16.707C9.51957 16.8946 9.26522 16.9999 9 16.9999C8.73478 16.9999 8.48043 16.8946 8.29289 16.707C8.10536 16.5195 8 16.2651 8 15.9999V11.9999C8 11.7347 8.10536 11.4803 8.29289 11.2928C8.48043 11.1053 8.73478 10.9999 9 10.9999C9.26522 10.9999 9.51957 11.1053 9.70711 11.2928C9.89464 11.4803 10 11.7347 10 11.9999V15.9999ZM10 4.32991C10 4.16991 10.21 3.99991 10.5 3.99991H13.5C13.79 3.99991 14 4.16991 14 4.32991V5.99991H10V4.32991ZM16 15.9999C16 16.2651 15.8946 16.5195 15.7071 16.707C15.5196 16.8946 15.2652 16.9999 15 16.9999C14.7348 16.9999 14.4804 16.8946 14.2929 16.707C14.1054 16.5195 14 16.2651 14 15.9999V11.9999C14 11.7347 14.1054 11.4803 14.2929 11.2928C14.4804 11.1053 14.7348 10.9999 15 10.9999C15.2652 10.9999 15.5196 11.1053 15.7071 11.2928C15.8946 11.4803 16 11.7347 16 11.9999V15.9999Z" fill="#768A9E"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <ul class="simile-cars__prise-list prise-list-cars">
                                <li class="prise-list-cars__main">122 900$</li>
                                <li class="prise-list-cars__second">119 700€</li>
                                <li class="prise-list-cars__last">207 400 azn</li>
                            </ul>
                            <ul class="cart-main-info__ul-info ">
                                <li>
                                    <p>Продавец:</p>
                                    <span><b>Ceyhun</b></span>
                                </li>
                            </ul>
                            <ul class="cart-main-info__phone-conteiner">
                                <li><a href="tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                                <li><a href="tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                                <li><a href="tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="simile-cars__box">
                        <span class="simile-cars__image">
                            <img src="{{ asset('assets/front/img/_src/car4.jpg') }}" alt="">
                        </span>
                        <div class="simile-cars__info-about">
                            <div class="simile-cars__header-box">
                                <h5 class="simile-cars__title"><a href="">Mitsubishi Pajero Sport</a></h5>
                                <div class="card-box__add-icon__conteiner">
                                    <div class="card-box__add-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.3281 23.25C18.3281 22.085 17.3837 21.1406 16.2188 21.1406H7.78125C6.61627 21.1406 5.67188 22.085 5.67188 23.25V24H18.3281V23.25Z" fill="#768A9E"></path>
                                            <path d="M22.5938 5.67187V4.26562H13.9799C13.7674 3.66994 13.2988 3.20133 12.7031 2.98889V0H11.2969V2.98889C10.7012 3.20133 10.2326 3.66994 10.0201 4.26562H1.40625V5.67187H3.16425L0 13.4062C0 15.3447 1.5772 16.9219 3.51562 16.9219H4.92188C6.8603 16.9219 8.4375 15.3447 8.4375 13.4062L5.25895 5.67187H10.0202C10.2326 6.26756 10.7012 6.73617 11.2969 6.94861V16.9989C9.92278 17.2801 8.83575 18.3597 8.55558 19.7344H15.4445C15.1643 18.3597 14.0773 17.2801 12.7032 16.9989V6.94861C13.2989 6.73617 13.7675 6.26756 13.9799 5.67187H18.7268L15.5625 13.4062C15.5625 15.3447 17.1397 16.9219 19.0781 16.9219H20.4844C22.4228 16.9219 24 15.3447 24 13.4062L20.8215 5.67187H22.5938ZM6.6795 12.7031H1.758L4.21875 6.79659L6.6795 12.7031ZM22.242 12.7031H17.3205L19.7812 6.79659L22.242 12.7031Z" fill="#768A9E"></path>
                                        </svg>
                                    </div>
                                    <div class="card-box__add-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 5.99991H16V4.32991C15.9765 3.68973 15.7002 3.08497 15.2316 2.64821C14.7629 2.21144 14.1402 1.97831 13.5 1.99991H10.5C9.85975 1.97831 9.23706 2.21144 8.76843 2.64821C8.2998 3.08497 8.02346 3.68973 8 4.32991V5.99991H3C2.73478 5.99991 2.48043 6.10527 2.29289 6.29281C2.10536 6.48034 2 6.7347 2 6.99991C2 7.26513 2.10536 7.51948 2.29289 7.70702C2.48043 7.89456 2.73478 7.99991 3 7.99991H4V18.9999C4 19.7956 4.31607 20.5586 4.87868 21.1212C5.44129 21.6838 6.20435 21.9999 7 21.9999H17C17.7956 21.9999 18.5587 21.6838 19.1213 21.1212C19.6839 20.5586 20 19.7956 20 18.9999V7.99991H21C21.2652 7.99991 21.5196 7.89456 21.7071 7.70702C21.8946 7.51948 22 7.26513 22 6.99991C22 6.7347 21.8946 6.48034 21.7071 6.29281C21.5196 6.10527 21.2652 5.99991 21 5.99991ZM10 15.9999C10 16.2651 9.89464 16.5195 9.70711 16.707C9.51957 16.8946 9.26522 16.9999 9 16.9999C8.73478 16.9999 8.48043 16.8946 8.29289 16.707C8.10536 16.5195 8 16.2651 8 15.9999V11.9999C8 11.7347 8.10536 11.4803 8.29289 11.2928C8.48043 11.1053 8.73478 10.9999 9 10.9999C9.26522 10.9999 9.51957 11.1053 9.70711 11.2928C9.89464 11.4803 10 11.7347 10 11.9999V15.9999ZM10 4.32991C10 4.16991 10.21 3.99991 10.5 3.99991H13.5C13.79 3.99991 14 4.16991 14 4.32991V5.99991H10V4.32991ZM16 15.9999C16 16.2651 15.8946 16.5195 15.7071 16.707C15.5196 16.8946 15.2652 16.9999 15 16.9999C14.7348 16.9999 14.4804 16.8946 14.2929 16.707C14.1054 16.5195 14 16.2651 14 15.9999V11.9999C14 11.7347 14.1054 11.4803 14.2929 11.2928C14.4804 11.1053 14.7348 10.9999 15 10.9999C15.2652 10.9999 15.5196 11.1053 15.7071 11.2928C15.8946 11.4803 16 11.7347 16 11.9999V15.9999Z" fill="#768A9E"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <ul class="simile-cars__prise-list prise-list-cars">
                                <li class="prise-list-cars__main">122 900$</li>
                                <li class="prise-list-cars__second">119 700€</li>
                                <li class="prise-list-cars__last">207 400 azn</li>
                            </ul>
                            <ul class="cart-main-info__ul-info ">
                                <li>
                                    <p>Продавец:</p>
                                    <span><b>Ceyhun</b></span>
                                </li>
                            </ul>
                            <ul class="cart-main-info__phone-conteiner">
                                <li><a href="tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                                <li><a href="tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                                <li><a href="tel:+3800501234567">+380 (050) 123 - 45 - 67</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="simile-cars__acordeon-conteiner simile-cars-acordeon ">
                    <div class="acordeon-conteiner__box acordeon-element">
                        <div class="acordeon-conteiner__box-title acordeon-element__title">
                            <h4 class="cart-main-info__title">Характеристика</h4>
                            <span class="acordeon-conteiner__box__nam-element">/01</span>
                            <div class="acordeon-conteiner__open-icon">
                                <span class="ac-icV1"></span>
                                <span class="ac-icV2"></span>
                            </div>
                        </div>
                        <div class="acordeon-conteiner__claster acordeon-element__claster">
                            <div class="simile-cars-acordeon__row">
                                <div class="simile-cars-acordeon__box">
                                    <h4 class="cart-main-info__title-ul">Тип кузова:</h4>
                                    <h5>Mitsubishi Pajero Sport</h5>
                                    <p>Внедорожник</p>
                                </div>
                                <div class="simile-cars-acordeon__box">
                                    <h4 class="cart-main-info__title-ul">Тип кузова:</h4>
                                    <h5>Mitsubishi Pajero Sport</h5>
                                    <p>Внедорожник</p>
                                </div>
                            </div>
                            <div class="simile-cars-acordeon__row">
                                <div class="simile-cars-acordeon__box">
                                    <h4 class="cart-main-info__title-ul">Двигатель:</h4>
                                    <h5>Mitsubishi Pajero Sport</h5>
                                    <p>Внедорожник</p>
                                </div>
                                <div class="simile-cars-acordeon__box">
                                    <h4 class="cart-main-info__title-ul">Двигатель:</h4>
                                    <h5>Mitsubishi Pajero Sport</h5>
                                    <p>Внедорожник</p>
                                </div>
                            </div>
                            <div class="simile-cars-acordeon__row">
                                <div class="simile-cars-acordeon__box">
                                    <h4 class="cart-main-info__title-ul">Привод:</h4>
                                    <h5>Mitsubishi Pajero Sport</h5>
                                    <p>Внедорожник</p>
                                </div>
                                <div class="simile-cars-acordeon__box">
                                    <h4 class="cart-main-info__title-ul">Привод:</h4>
                                    <h5>Mitsubishi Pajero Sport</h5>
                                    <p>Внедорожник</p>
                                </div>
                            </div>
                            <div class="simile-cars-acordeon__row">
                                <div class="simile-cars-acordeon__box">
                                    <h4 class="cart-main-info__title-ul">Коробка передач:</h4>
                                    <h5>Mitsubishi Pajero Sport</h5>
                                    <p>Внедорожник</p>
                                </div>
                                <div class="simile-cars-acordeon__box">
                                    <h4 class="cart-main-info__title-ul">Коробка передач:</h4>
                                    <h5>Mitsubishi Pajero Sport</h5>
                                    <p>Внедорожник</p>
                                </div>
                            </div>
                            <div class="simile-cars-acordeon__row">
                                <div class="simile-cars-acordeon__box">
                                    <h4 class="cart-main-info__title-ul">Цвет:</h4>
                                    <h5>Mitsubishi Pajero Sport</h5>
                                    <p>Внедорожник</p>
                                </div>
                                <div class="simile-cars-acordeon__box">
                                    <h4 class="cart-main-info__title-ul">Цвет:</h4>
                                    <h5>Mitsubishi Pajero Sport</h5>
                                    <p>Внедорожник</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="acordeon-conteiner__box acordeon-element">
                        <div class="acordeon-conteiner__box-title acordeon-element__title">
                            <h4 class="cart-main-info__title">Комфорт</h4>
                            <span class="acordeon-conteiner__box__nam-element">/02</span>
                            <div class="acordeon-conteiner__open-icon">
                                <span class="ac-icV1"></span>
                                <span class="ac-icV2"></span>
                            </div>
                        </div>
                        <div class="acordeon-conteiner__claster acordeon-element__claster">
                            <div class="simile-cars-acordeon__row">
                                <div class="simile-cars-acordeon__box">
                                    <h5>Mitsubishi Pajero Sport</h5>
                                    <p>Круиз контроль, бортовой компьютер, подогрев сидений, подогрев зеркал, сенсор дождя, усилитель руля, датчик света, подогрев руля, климат контроль, парктроник, омыватель фар, кондиционер, кожаный салон, память сидений</p>
                                </div>
                                <div class="simile-cars-acordeon__box">
                                    <h5>Mitsubishi Pajero Sport</h5>
                                    <p>Круиз контроль, бортовой компьютер, подогрев сидений, подогрев зеркал, сенсор дождя, усилитель руля, датчик света, подогрев руля, климат контроль, парктроник, омыватель фар, кондиционер, кожаный салон, память сидений</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="acordeon-conteiner__box acordeon-element">
                        <div class="acordeon-conteiner__box-title acordeon-element__title">
                            <h4 class="cart-main-info__title">Безопасность</h4>
                            <span class="acordeon-conteiner__box__nam-element">/03</span>
                            <div class="acordeon-conteiner__open-icon">
                                <span class="ac-icV1"></span>
                                <span class="ac-icV2"></span>
                            </div>
                        </div>
                        <div class="acordeon-conteiner__claster acordeon-element__claster">
                            <div class="simile-cars-acordeon__row">
                                <div class="simile-cars-acordeon__box">
                                    <h5>Mitsubishi Pajero Sport</h5>
                                    <p>Круиз контроль, бортовой компьютер, подогрев сидений, подогрев зеркал, сенсор дождя, усилитель руля, датчик света, подогрев руля, климат контроль, парктроник, омыватель фар, кондиционер, кожаный салон, память сидений</p>
                                </div>
                                <div class="simile-cars-acordeon__box">
                                    <h5>Mitsubishi Pajero Sport</h5>
                                    <p>Круиз контроль, бортовой компьютер, подогрев сидений, подогрев зеркал, сенсор дождя, усилитель руля, датчик света, подогрев руля, климат контроль, парктроник, омыватель фар, кондиционер, кожаный салон, память сидений</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="acordeon-conteiner__box acordeon-element">
                        <div class="acordeon-conteiner__box-title acordeon-element__title">
                            <h4 class="cart-main-info__title">Мультимедиа</h4>
                            <span class="acordeon-conteiner__box__nam-element">/04</span>
                            <div class="acordeon-conteiner__open-icon">
                                <span class="ac-icV1"></span>
                                <span class="ac-icV2"></span>
                            </div>
                        </div>
                        <div class="acordeon-conteiner__claster acordeon-element__claster">
                            <div class="simile-cars-acordeon__row">
                                <div class="simile-cars-acordeon__box">
                                    <h5>Mitsubishi Pajero Sport</h5>
                                    <p>Круиз контроль, бортовой компьютер, подогрев сидений, подогрев зеркал, сенсор дождя, усилитель руля, датчик света, подогрев руля, климат контроль, парктроник, омыватель фар, кондиционер, кожаный салон, память сидений</p>
                                </div>
                                <div class="simile-cars-acordeon__box">
                                    <h5>Mitsubishi Pajero Sport</h5>
                                    <p>Круиз контроль, бортовой компьютер, подогрев сидений, подогрев зеркал, сенсор дождя, усилитель руля, датчик света, подогрев руля, климат контроль, парктроник, омыватель фар, кондиционер, кожаный салон, память сидений</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
