<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #dddddd">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('shop.index')}}">Słodycze.pl</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav gap-2">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Nasze słodycze
                    </a>
                    <ul class="dropdown-menu" style="background-color: #dddddd">
                    <li><a class="dropdown-item" href="{{route('shop.shop', ['category' => 'cukierki'])}}">Cukierki</a></li>
                    <li><a class="dropdown-item" href="{{route('shop.shop', ['category' => 'czekolada'])}}">Czekolada</a></li>
                    <li><a class="dropdown-item" href="{{route('shop.shop', ['category' => 'żelki'])}}">Żelki</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    @if (Auth::check())
                        <a class="nav-link" href="{{ route('shop.cart', ['id' => Auth::user()->id ])}}">Twój koszyk</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if (Auth::check())
                        @if (Auth::user()->role_id == 1)
                            <a class="nav-link" href="{{route('shop.create')}}">Dodaj produkt</a>
                        @endif
                    @endif
                </li>
                <li class="nav-item">
                    @if (Auth::check())
                        @if (Auth::user()->role_id == 1)
                            <a class="nav-link" href="{{route('user.add')}}"><b>Dodaj użytkownika</b></a>
                        @endif
                    @endif
                </li>
                <li class="nav-item">
                    @if (Auth::check())
                        @if (Auth::user()->role_id == 1)
                            <a class="nav-link" href="{{route('user.users')}}">Użytkownicy</a>
                        @endif
                    @endif
                </li>
                <li>
                    <form action="{{ route('shop.search') }}" method="GET">
                        @csrf
                        @method('GET')
                        <div class="mb-3 mb-lg-0">
                          <input type="text" class="form-control" id="search" name="search" placeholder="Szukaj" style="background-color: #e2dfdf; border: 2px solid #707070; border-width: 1 1 1px;">
                        </div>
                    </form>
                </li>
            </ul>
            @if (Auth::check())
                <div class="navbar-nav ms-auto text-end">
                    <li class="ms-auto nav-item dropdown me-3" style="list-style-type: none; position: relative;">
                        <a class="dropdown-toggle-no-caret btn btn-outline-dark" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" style="background-color: #dddddd;">
                            <li><a class="dropdown-item" href="{{ route('shop.profil', ['id' => Auth::user()->id ])}}">Profil</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Wyloguj</a></li>
                        </ul>
                    </li>
                </div>
            @else
                <div class="navbar-nav ms-auto text-end">
                    <a class="btn btn-outline-dark ms-auto" href="{{ route('login') }}">Zaloguj</a>
                </div>
            @endif
        </div>
    </div>
  </nav>

