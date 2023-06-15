<aside class="catalog__filtr ads-sitebar ads-sitebar_user-account aside-old aside__cabinet">
    <nav class="user-account-nav">
        <ul class="user-account-nav__list">
            <li>
                <a href="{{ route('profile.business.index') }}">@lang('Şəxsi məlumat')</a>
            </li>
            <li class="user-account-nav__activ">
                <a href="{{ route('profile.business.salon.index') }}">@lang('Mənim avtosalonum')</a>
                <ul class="user-account-nav__sub-meny">
                    <li><a href="{{ route('profile.business.salon.edit', '1') }}">@lang('Məlumatı Redaktə et')</a></li>
                    <li><a href="{{ route('profile.business.salon.autos') }}">@lang('Mənim avtomobillərim')</a></li>
                    <li><a href="{{ route('profile.business.salon.add-auto') }}">@lang('Avtomobil əlavə edin')</a></li>
                </ul>
            </li>
            <li class="user-account-nav__activ">
                <a href="{{ route('profile.service.show') }}">@lang('Mənim servisim')</a>
                <ul class="user-account-nav__sub-meny">
                    <li><a href="{{ route('profile.service.edit') }}">@lang('Məlumatı Redaktə et')</a></li>
                </ul>
            </li>
            <li class="user-account-nav__activ">
                <a href="{{ route('profile.business.store.index') }}">@lang('Mənim avtomağazam')</a>
                <ul class="user-account-nav__sub-meny">
                    <li><a href="{{ route('profile.business.store.edit', '1') }}">@lang('Məlumatı Redaktə et')</a></li>
                </ul>
            </li>
            <li class="user-account-nav__activ">
                <a href="{{ route('profile.business.rentacar.index') }}">@lang('Arenda avtomobil')</a>
                <ul class="user-account-nav__sub-meny">
                    <li><a href="{{ route('profile.business.rentacar.edit') }}">@lang('Məlumatı Redaktə et')</a></li>
                    <li><a href="{{ route('profile.business.rentacar.add-auto') }}">@lang('Avtomobil əlavə edin')</a></li>
                </ul>
            </li>
            <li>
                <a href="">@lang('Hesabdan çıx')</a>
            </li>
        </ul>
    </nav>
</aside>
