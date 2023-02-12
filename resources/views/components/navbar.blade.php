<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav-tabs">
                    <li class="nav-item me-5">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('fruits') ? 'active' : '' }}" href="{{ url('/fruits') }}">Gyümölcsök</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('operas') ? 'active' : '' }}" href="{{ url('/operas') }}">Operák</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('fruits/create') ? 'active' : '' }}" href="{{ url('/fruits/create') }}">Új gyümölcs hozzáadása</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('operas/create') ? 'active' : '' }}" href="{{ url('/operas/create') }}">Új opera hozzáadása</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

