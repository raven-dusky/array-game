<nav class="navbar">
    <ul class="navbar-list">
        <li class="navbar-item"><a href="{{ route('homepage') }}">Homepage</a></li>
        @guest
        <li class="navbar-item"><a href="{{ route('login') }}">Login</a></li>
        <li class="navbar-item"><a href="{{ route('register') }}">Register</a></li>
        @endguest
        @auth
        <li class="navbar-item"><a href="{{ route('upgrades') }}">Upgrades</a></li>
        <li class="navbar-item"><a href="{{ route('leaderboard') }}">Leaderboard</a></li>
        <li class="navbar-item">
            <a href="" onclick="event.preventDefault(); document.querySelector('#logout').submit()">Logout</a>
            <form method="POST" action="{{ route('logout') }}" id="logout">
                @csrf
            </form>
        </li>
        @endauth
    </ul>
</nav>
