<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="/"><img class="nav-logo" src="{{ asset('images/logo.png') }}" alt="Card image cap"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="gold nav-link" href="/movies">Movies</a>
            </li>
            <li class="nav-item">
                <a class="gold nav-link" href="/series">Series</a>
            </li>
        </ul>

        <ul class="navbar-nav">
            @include('includes.headersearch')
        </ul>

        <ul class="navbar-nav">

            @guest
            <li class="nav-item">
                <a class="gold nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="gold nav-link" href="{{ route('register') }}">Register</a>
            </li>
            @else

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="avatar-thumbnail" src="{{ Auth::user()->profile_picture }}" alt=":)">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item gold" href="/user/profile/{{ Auth::user()->name }}">My page</a>
                    @if (\Auth::user()->type === 'admin')
                    <a class="dropdown-item gold" href="/admin">Admin dashboard</a>
                    @endif
                    <a class="dropdown-item gold" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Log out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                </div>
            </li>
            @endguest

        </ul>

    </div>
</nav>