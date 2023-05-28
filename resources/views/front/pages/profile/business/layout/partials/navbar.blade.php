<aside class="catalog__filtr ads-sitebar ads-sitebar_user-account aside-old aside__cabinet">
    <nav class="user-account-nav">
        <ul class="user-account-nav__list">
            <li>
                <a href="{{ route('profile.business.index') }}">Личная информация</a>
            </li>
            <li class="user-account-nav__activ">
                <a href="{{ route('profile.business.autosalon.index') }}">Мой автосалон</a>
                <ul class="user-account-nav__sub-meny">
                    <li><a href="{{ route('profile.business.autosalon.edit') }}">Редактировать информацию</a></li>
                    <li><a href="{{ route('profile.business.autosalon.autos') }}">Мои авто</a></li>
                    <li><a href="{{ route('profile.business.autosalon.add-auto') }}">Добавить авто</a></li>
                </ul>
            </li>
            <li class="user-account-nav__activ">
                <a href="{{ route('profile.business.autoservice.index') }}">Мое СТО</a>
                <ul class="user-account-nav__sub-meny">
                    <li><a href="{{ route('profile.business.autoservice.edit') }}">Редактировать информацию</a></li>
                </ul>
            </li>
            <li class="user-account-nav__activ">
                <a href="{{ route('profile.business.autostore.index') }}">Мой автомагазин</a>
                <ul class="user-account-nav__sub-meny">
                    <li><a href="{{ route('profile.business.autostore.edit') }}">Редактировать информацию</a></li>
                </ul>
            </li>
            <li class="user-account-nav__activ">
                <a href="{{ route('profile.business.rentacar.index') }}">Аренда авто</a>
                <ul class="user-account-nav__sub-meny">
                    <li><a href="{{ route('profile.business.rentacar.edit') }}">Редактировать информацию</a></li>
                    <li><a href="{{ route('profile.business.rentacar.add-auto') }}">Добавить авто</a></li>
                </ul>
            </li>
            <li>
                <a href="">Выход</a>
            </li>
        </ul>
    </nav>
</aside>
