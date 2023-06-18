<aside class="catalog__filtr ads-sitebar ads-sitebar_user-account aside-old aside__cabinet">
    <nav class="user-account-nav">
        <ul class="user-account-nav__list">
            <li>
                <a href="{{ route('profile.business.index') }}">@lang('Şəxsi məlumat')</a>
            </li>
            <li class="user-account-nav__activ">
                <a href="{{ route('profile.salon.show') }}">@lang('Mənim avtosalonum')</a>
                <ul class="user-account-nav__sub-meny">
                    <li><a href="{{ route('profile.salon.edit') }}">@lang('Məlumatı Redaktə et')</a></li>
                    <li><a href="{{ route('profile.salon.autos') }}">@lang('Mənim avtomobillərim')</a></li>
                    <li><a href="{{ route('profile.salon.add-auto') }}">@lang('Avtomobil əlavə edin')</a></li>
                </ul>
            </li>
            <li class="user-account-nav__activ">
                <a href="{{ route('profile.service.show') }}">@lang('Mənim servisim')</a>
                <ul class="user-account-nav__sub-meny">
                    <li><a href="{{ route('profile.service.edit') }}">@lang('Məlumatı Redaktə et')</a></li>
                </ul>
            </li>
            <li class="user-account-nav__activ">
                <a href="{{ route('profile.store.show') }}">@lang('Mənim avtomağazam')</a>
                <ul class="user-account-nav__sub-meny">
                    <li><a href="{{ route('profile.store.edit') }}">@lang('Məlumatı Redaktə et')</a></li>
                </ul>
            </li>
            <li class="user-account-nav__activ">
                <a href="{{ route('profile.rental.show') }}">@lang('Arenda avtomobil')</a>
                <ul class="user-account-nav__sub-meny">
                    <li><a href="{{ route('profile.rental.edit') }}">@lang('Məlumatı Redaktə et')</a></li>
                    <li><a href="{{ route('profile.rental.add-auto') }}">@lang('Avtomobil əlavə edin')</a></li>
                </ul>
            </li>
            <li>
                <a href="">@lang('Hesabdan çıx')</a>
            </li>
        </ul>
    </nav>
</aside>
