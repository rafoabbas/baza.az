@include('front.layouts.partials.navbar.nav')
<header class="headerV1">
    <div class="header__top">
        <div class="general-conteiner">
            <a href="/" class="header__logo-mobile">
                <svg width="68" height="38" viewBox="0 0 68 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.1436 14.2754C13.7744 13.6025 15.3359 11.5459 15.3359 9.70508C15.3359 7.30566 13.2031 5.61719 8.91211 5.61719C8.25195 5.61719 6.52539 5.66797 4.82422 5.66797C3.36426 5.66797 1.75195 5.64258 0.875977 5.5918V6.1123C2.51367 6.18848 2.81836 6.45508 2.81836 8.34668V21.2451C2.81836 23.1367 2.52637 23.4033 0.875977 23.4795V24C1.75195 23.9492 3.33887 23.9238 4.875 23.9238C7.08398 23.9238 8.69629 24 9.50879 24C13.9648 24 16.6816 22.2354 16.6816 18.96C16.6816 16.8525 15.0059 14.6943 10.1436 14.3262V14.2754ZM6.95703 14.2246V8.34668C6.95703 6.55664 7.23633 6.1123 8.56934 6.1123C10.4102 6.1123 11.1211 7.43262 11.1211 9.98438C11.1211 12.2441 10.5244 14.2246 8.07422 14.2246H6.95703ZM6.95703 14.6689H8.04883C11.1338 14.6689 12.3652 16.2051 12.3652 18.8457C12.3652 21.7656 11.2861 23.4033 8.74707 23.4033C7.26172 23.4033 6.95703 23.0605 6.95703 21.2451V14.6689ZM26.6602 5.54102C26.3809 5.56641 26.0635 5.5791 25.7588 5.5791C25.4414 5.5791 25.1367 5.56641 24.8574 5.54102L18.9414 20.75C18.2051 22.667 17.4434 23.3398 16.6816 23.4795V24C17.2021 23.9492 17.9131 23.9238 18.6748 23.9238C19.7539 23.9238 20.7314 23.9492 21.9121 24V23.4795C20.4902 23.4414 19.6016 23.0859 19.6016 21.7148C19.6016 21.0293 19.8174 20.1025 20.3125 18.833L21.0107 17.0303H26.6602L28.2217 21.2959C28.4248 21.8164 28.5264 22.2227 28.5264 22.5273C28.5264 23.2383 27.9424 23.4287 26.6982 23.4795V24C27.5615 23.9492 29.0469 23.9238 30.6592 23.9238C32.0811 23.9238 33.5791 23.9492 34.6074 24V23.4795C34.1123 23.4541 33.4521 23.0605 32.9697 21.8164L26.6602 5.54102ZM26.4697 16.5098H21.2012L23.8926 9.51465L26.4697 16.5098ZM48.9023 6.1123V5.5918C46.6299 5.66797 43.8369 5.66797 41.4883 5.66797C39.7744 5.66797 37.375 5.66797 35.6357 5.5918C35.7754 7.16602 35.8262 8.76562 35.8262 9.54004C35.8262 10.3145 35.8008 11.0381 35.75 11.5205H36.3467C36.8418 7.41992 38.9619 6.18848 41.5391 6.18848H44.5098L35.4453 23.4795V24C37.6035 23.9238 40.1807 23.9238 42.4277 23.9238C44.3193 23.9238 46.9727 23.9238 48.9023 24C48.7373 22.4385 48.7246 20.8262 48.7246 20.0518C48.7246 19.1504 48.75 18.3506 48.8008 17.7539H48.2041C47.7471 22.0322 45.0811 23.4033 42.7197 23.4033H39.8633L48.9023 6.1123ZM59.6426 5.54102C59.3633 5.56641 59.0459 5.5791 58.7412 5.5791C58.4238 5.5791 58.1191 5.56641 57.8398 5.54102L51.9238 20.75C51.1875 22.667 50.4258 23.3398 49.6641 23.4795V24C50.1846 23.9492 50.8955 23.9238 51.6572 23.9238C52.7363 23.9238 53.7139 23.9492 54.8945 24V23.4795C53.4727 23.4414 52.584 23.0859 52.584 21.7148C52.584 21.0293 52.7998 20.1025 53.2949 18.833L53.9932 17.0303H59.6426L61.2041 21.2959C61.4072 21.8164 61.5088 22.2227 61.5088 22.5273C61.5088 23.2383 60.9248 23.4287 59.6807 23.4795V24C60.5439 23.9492 62.0293 23.9238 63.6416 23.9238C65.0635 23.9238 66.5615 23.9492 67.5898 24V23.4795C67.0947 23.4541 66.4346 23.0605 65.9521 21.8164L59.6426 5.54102ZM59.4521 16.5098H54.1836L56.875 9.51465L59.4521 16.5098Z" fill="#05182E"/>
                    <path d="M13.84 37H14.47V35.902C14.698 36.294 14.996 36.606 15.364 36.838C15.736 37.066 16.174 37.18 16.678 37.18C17.29 37.18 17.808 37.03 18.232 36.73C18.656 36.426 18.978 36.016 19.198 35.5C19.418 34.98 19.528 34.396 19.528 33.748C19.528 33.108 19.418 32.532 19.198 32.02C18.982 31.504 18.666 31.096 18.25 30.796C17.834 30.492 17.332 30.34 16.744 30.34C16.244 30.34 15.808 30.444 15.436 30.652C15.064 30.856 14.762 31.14 14.53 31.504V28.36H13.84V37ZM16.636 36.52C16.152 36.52 15.75 36.4 15.43 36.16C15.11 35.916 14.87 35.586 14.71 35.17C14.55 34.75 14.47 34.276 14.47 33.748C14.47 33.212 14.55 32.738 14.71 32.326C14.87 31.914 15.11 31.59 15.43 31.354C15.75 31.118 16.148 31 16.624 31C17.116 31 17.522 31.122 17.842 31.366C18.162 31.606 18.4 31.934 18.556 32.35C18.712 32.762 18.79 33.228 18.79 33.748C18.79 34.272 18.71 34.744 18.55 35.164C18.39 35.58 18.15 35.91 17.83 36.154C17.51 36.398 17.112 36.52 16.636 36.52ZM22.7198 37.18C23.2798 37.18 23.7778 37.068 24.2138 36.844C24.6538 36.62 24.9978 36.296 25.2458 35.872V37H25.8758V32.962C25.8758 32.73 25.8638 32.5 25.8398 32.272C25.8158 32.04 25.7698 31.838 25.7018 31.666C25.5418 31.25 25.2578 30.926 24.8498 30.694C24.4458 30.458 23.9458 30.34 23.3498 30.34C22.6498 30.34 22.0758 30.498 21.6278 30.814C21.1798 31.13 20.8818 31.582 20.7338 32.17L21.4418 32.368C21.6898 31.46 22.3178 31.006 23.3258 31.006C24.0058 31.006 24.4858 31.168 24.7658 31.492C25.0498 31.816 25.1898 32.306 25.1858 32.962C24.9338 32.994 24.6338 33.032 24.2858 33.076C23.9378 33.116 23.5798 33.164 23.2118 33.22C22.8478 33.276 22.5078 33.338 22.1918 33.406C21.7198 33.518 21.3178 33.72 20.9858 34.012C20.6538 34.304 20.4878 34.724 20.4878 35.272C20.4878 35.612 20.5698 35.928 20.7338 36.22C20.8978 36.508 21.1458 36.74 21.4778 36.916C21.8098 37.092 22.2238 37.18 22.7198 37.18ZM22.7558 36.544C22.3678 36.544 22.0598 36.48 21.8318 36.352C21.6038 36.224 21.4398 36.062 21.3398 35.866C21.2438 35.67 21.1958 35.474 21.1958 35.278C21.1958 35.014 21.2578 34.796 21.3818 34.624C21.5098 34.452 21.6678 34.316 21.8558 34.216C22.0478 34.116 22.2378 34.042 22.4258 33.994C22.6938 33.926 22.9918 33.868 23.3198 33.82C23.6478 33.768 23.9738 33.726 24.2978 33.694C24.6258 33.658 24.9218 33.626 25.1858 33.598C25.1858 33.742 25.1798 33.91 25.1678 34.102C25.1598 34.29 25.1418 34.466 25.1138 34.63C25.0298 35.21 24.7798 35.674 24.3638 36.022C23.9518 36.37 23.4158 36.544 22.7558 36.544ZM26.8338 37H32.1918V36.322H28.0278L32.4558 30.724V30.52H27.1338V31.198H31.2618L26.8338 36.814V37ZM35.2823 37.18C35.8423 37.18 36.3403 37.068 36.7763 36.844C37.2163 36.62 37.5603 36.296 37.8083 35.872V37H38.4383V32.962C38.4383 32.73 38.4263 32.5 38.4023 32.272C38.3783 32.04 38.3323 31.838 38.2643 31.666C38.1043 31.25 37.8203 30.926 37.4123 30.694C37.0083 30.458 36.5083 30.34 35.9123 30.34C35.2123 30.34 34.6383 30.498 34.1903 30.814C33.7423 31.13 33.4443 31.582 33.2963 32.17L34.0043 32.368C34.2523 31.46 34.8803 31.006 35.8883 31.006C36.5683 31.006 37.0483 31.168 37.3283 31.492C37.6123 31.816 37.7523 32.306 37.7483 32.962C37.4963 32.994 37.1963 33.032 36.8483 33.076C36.5003 33.116 36.1423 33.164 35.7743 33.22C35.4103 33.276 35.0703 33.338 34.7543 33.406C34.2823 33.518 33.8803 33.72 33.5483 34.012C33.2163 34.304 33.0503 34.724 33.0503 35.272C33.0503 35.612 33.1323 35.928 33.2963 36.22C33.4603 36.508 33.7083 36.74 34.0403 36.916C34.3723 37.092 34.7863 37.18 35.2823 37.18ZM35.3183 36.544C34.9303 36.544 34.6223 36.48 34.3943 36.352C34.1663 36.224 34.0023 36.062 33.9023 35.866C33.8063 35.67 33.7583 35.474 33.7583 35.278C33.7583 35.014 33.8203 34.796 33.9443 34.624C34.0723 34.452 34.2303 34.316 34.4183 34.216C34.6103 34.116 34.8003 34.042 34.9883 33.994C35.2563 33.926 35.5543 33.868 35.8823 33.82C36.2103 33.768 36.5363 33.726 36.8603 33.694C37.1883 33.658 37.4843 33.626 37.7483 33.598C37.7483 33.742 37.7423 33.91 37.7303 34.102C37.7223 34.29 37.7043 34.466 37.6763 34.63C37.5923 35.21 37.3423 35.674 36.9263 36.022C36.5143 36.37 35.9783 36.544 35.3183 36.544ZM40.1403 37H41.0103V36.13H40.1403V37ZM44.7042 37.18C45.2642 37.18 45.7622 37.068 46.1982 36.844C46.6382 36.62 46.9822 36.296 47.2302 35.872V37H47.8602V32.962C47.8602 32.73 47.8482 32.5 47.8242 32.272C47.8002 32.04 47.7542 31.838 47.6862 31.666C47.5262 31.25 47.2422 30.926 46.8342 30.694C46.4302 30.458 45.9302 30.34 45.3342 30.34C44.6342 30.34 44.0602 30.498 43.6122 30.814C43.1642 31.13 42.8662 31.582 42.7182 32.17L43.4262 32.368C43.6742 31.46 44.3022 31.006 45.3102 31.006C45.9902 31.006 46.4702 31.168 46.7502 31.492C47.0342 31.816 47.1742 32.306 47.1702 32.962C46.9182 32.994 46.6182 33.032 46.2702 33.076C45.9222 33.116 45.5642 33.164 45.1962 33.22C44.8322 33.276 44.4922 33.338 44.1762 33.406C43.7042 33.518 43.3022 33.72 42.9702 34.012C42.6382 34.304 42.4722 34.724 42.4722 35.272C42.4722 35.612 42.5542 35.928 42.7182 36.22C42.8822 36.508 43.1302 36.74 43.4622 36.916C43.7942 37.092 44.2082 37.18 44.7042 37.18ZM44.7402 36.544C44.3522 36.544 44.0442 36.48 43.8162 36.352C43.5882 36.224 43.4242 36.062 43.3242 35.866C43.2282 35.67 43.1802 35.474 43.1802 35.278C43.1802 35.014 43.2422 34.796 43.3662 34.624C43.4942 34.452 43.6522 34.316 43.8402 34.216C44.0322 34.116 44.2222 34.042 44.4102 33.994C44.6782 33.926 44.9762 33.868 45.3042 33.82C45.6322 33.768 45.9582 33.726 46.2822 33.694C46.6102 33.658 46.9062 33.626 47.1702 33.598C47.1702 33.742 47.1642 33.91 47.1522 34.102C47.1442 34.29 47.1262 34.466 47.0982 34.63C47.0142 35.21 46.7642 35.674 46.3482 36.022C45.9362 36.37 45.4002 36.544 44.7402 36.544ZM48.8181 37H54.1761V36.322H50.0121L54.4401 30.724V30.52H49.1181V31.198H53.2461L48.8181 36.814V37Z" fill="#324153"/>
                </svg>
            </a>
            <div class="header__top-conteiner-right">
                <ul class="header__ul">
                    <li><a href="{{ route('partnership') }}">Стать партнером</a></li>
                </ul>
                <a href="{{ route('comparison') }}" class="header__like iconsvg">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.3281 23.25C18.3281 22.085 17.3837 21.1406 16.2188 21.1406H7.78125C6.61627 21.1406 5.67188 22.085 5.67188 23.25V24H18.3281V23.25Z" fill="#768A9E"/>
                        <path d="M22.5938 5.67187V4.26562H13.9799C13.7674 3.66994 13.2988 3.20133 12.7031 2.98889V0H11.2969V2.98889C10.7012 3.20133 10.2326 3.66994 10.0201 4.26562H1.40625V5.67187H3.16425L0 13.4062C0 15.3447 1.5772 16.9219 3.51562 16.9219H4.92188C6.8603 16.9219 8.4375 15.3447 8.4375 13.4062L5.25895 5.67187H10.0202C10.2326 6.26756 10.7012 6.73617 11.2969 6.94861V16.9989C9.92278 17.2801 8.83575 18.3597 8.55558 19.7344H15.4445C15.1643 18.3597 14.0773 17.2801 12.7032 16.9989V6.94861C13.2989 6.73617 13.7675 6.26756 13.9799 5.67187H18.7268L15.5625 13.4062C15.5625 15.3447 17.1397 16.9219 19.0781 16.9219H20.4844C22.4228 16.9219 24 15.3447 24 13.4062L20.8215 5.67187H22.5938ZM6.6795 12.7031H1.758L4.21875 6.79659L6.6795 12.7031ZM22.242 12.7031H17.3205L19.7812 6.79659L22.242 12.7031Z" fill="#768A9E"/>
                    </svg>
                </a>
                <a href="{{ route('favorite') }}" class="header__like iconsvg">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.5607 21.0002C17.4008 21.0008 17.2431 20.9631 17.1007 20.8902L12.0007 18.2202L6.90074 20.8902C6.73513 20.9773 6.54842 21.0162 6.36182 21.0024C6.17522 20.9887 5.99622 20.9228 5.84517 20.8124C5.69412 20.702 5.57708 20.5514 5.50735 20.3778C5.43763 20.2041 5.41801 20.0144 5.45074 19.8302L6.45074 14.2002L2.33074 10.2002C2.2022 10.0719 2.11101 9.91107 2.06697 9.7349C2.02292 9.55872 2.02768 9.37388 2.08074 9.2002C2.1387 9.02248 2.24532 8.86456 2.38849 8.74436C2.53166 8.62417 2.70566 8.54651 2.89074 8.5202L8.59074 7.6902L11.1007 2.5602C11.1826 2.39113 11.3105 2.24855 11.4697 2.14878C11.6288 2.04901 11.8129 1.99609 12.0007 1.99609C12.1886 1.99609 12.3727 2.04901 12.5318 2.14878C12.691 2.24855 12.8189 2.39113 12.9007 2.5602L15.4407 7.6802L21.1407 8.5102C21.3258 8.53651 21.4998 8.61417 21.643 8.73436C21.7862 8.85456 21.8928 9.01248 21.9507 9.1902C22.0038 9.36388 22.0086 9.54872 21.9645 9.7249C21.9205 9.90107 21.8293 10.0619 21.7007 10.1902L17.5807 14.1902L18.5807 19.8202C18.6164 20.0077 18.5977 20.2015 18.5269 20.3787C18.456 20.5559 18.3359 20.7091 18.1807 20.8202C17.9997 20.9471 17.7816 21.0104 17.5607 21.0002V21.0002Z" fill="#768A9E"/>
                    </svg>
                </a>
                <a href="{{ route('profile') }}" class="header__personal-acc">
                    <span class="iconsvg">
                        <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 10.1059C12.7911 10.1059 13.5645 9.89039 14.2223 9.4866C14.8801 9.08281 15.3928 8.50889 15.6955 7.83741C15.9983 7.16593 16.0775 6.42705 15.9231 5.71422C15.7688 5.00138 15.3878 4.34659 14.8284 3.83267C14.269 3.31874 13.5563 2.96875 12.7804 2.82696C12.0044 2.68517 11.2002 2.75794 10.4693 3.03608C9.73836 3.31421 9.11365 3.78522 8.67412 4.38953C8.2346 4.99385 8 5.70433 8 6.43113C8 7.40574 8.42143 8.34044 9.17157 9.02959C9.92172 9.71875 10.9391 10.1059 12 10.1059Z" fill="#768A9E"/>
                        <path d="M18 19.2929C18.2652 19.2929 18.5196 19.1961 18.7071 19.0238C18.8946 18.8516 19 18.6179 19 18.3742C19 16.6687 18.2625 15.0329 16.9497 13.8269C15.637 12.6209 13.8565 11.9434 12 11.9434C10.1435 11.9434 8.36301 12.6209 7.05025 13.8269C5.7375 15.0329 5 16.6687 5 18.3742C5 18.6179 5.10536 18.8516 5.29289 19.0238C5.48043 19.1961 5.73478 19.2929 6 19.2929H18Z" fill="#768A9E"/>
                        </svg>
                    </span>
                    <p>Личный кабинет</p>
                </a>
                <a href="{{ route('profile.business.index') }}" class="header__personal-acc">
                    <span class="iconsvg">
                        <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 10.1059C12.7911 10.1059 13.5645 9.89039 14.2223 9.4866C14.8801 9.08281 15.3928 8.50889 15.6955 7.83741C15.9983 7.16593 16.0775 6.42705 15.9231 5.71422C15.7688 5.00138 15.3878 4.34659 14.8284 3.83267C14.269 3.31874 13.5563 2.96875 12.7804 2.82696C12.0044 2.68517 11.2002 2.75794 10.4693 3.03608C9.73836 3.31421 9.11365 3.78522 8.67412 4.38953C8.2346 4.99385 8 5.70433 8 6.43113C8 7.40574 8.42143 8.34044 9.17157 9.02959C9.92172 9.71875 10.9391 10.1059 12 10.1059Z" fill="#768A9E"/>
                        <path d="M18 19.2929C18.2652 19.2929 18.5196 19.1961 18.7071 19.0238C18.8946 18.8516 19 18.6179 19 18.3742C19 16.6687 18.2625 15.0329 16.9497 13.8269C15.637 12.6209 13.8565 11.9434 12 11.9434C10.1435 11.9434 8.36301 12.6209 7.05025 13.8269C5.7375 15.0329 5 16.6687 5 18.3742C5 18.6179 5.10536 18.8516 5.29289 19.0238C5.48043 19.1961 5.73478 19.2929 6 19.2929H18Z" fill="#768A9E"/>
                        </svg>
                    </span>
                    <p>Business кабинет</p>
                </a>
                <div class="header__select-list">
                    <span>USD</span>
                    <ul>
                        <li><a href="">EUR</a></li>
                        <li><a href="">LIR</a></li>
                    </ul>
                </div>
                <div class="header__select-list">
                    <span>RU</span>
                    <ul>
                        <li><a href="">EN</a></li>
                        <li><a href="">FR</a></li>
                        <li><a href="">UA</a></li>
                    </ul>
                </div>
                <a class="header__mobide-add-ads">
                    <img src="{{ asset('assets/front/img/_src/plus.svg') }}" alt="">
                </a>
                <div class="header__burger-meny">
                    <span class="burger-meny burger-meny__el1"></span>
                    <span class="burger-meny burger-meny__el2"></span>
                    <span class="burger-meny burger-meny__el3"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="general-conteiner">
            <a href="/" class="header__logo">
                <img src="{{ asset('assets/front/img/_src/logo.png') }}" alt="">
            </a>
            <nav class="header__nav">
                <ul class="header__ul">
                    @include('front.layouts.partials.navbar.navbar')
                </ul>
            </nav>
            <a href="{{ route('add.ads') }}" class="btn1">Подать объявление</a>
        </div>
    </div>
</header>
