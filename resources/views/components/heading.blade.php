<header>
    <ul class="nav nav-pills" style="background-color: #63E6BE;">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Главная</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}">Галерея</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('contacts') ? 'active' : '' }}" href="{{ route('contacts') }}">Контакты</a>
        </li>
    </ul>
</header>
