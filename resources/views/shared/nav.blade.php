<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #dddddd">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('shop.index')}}">Słodycze.pl</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav gap-2">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Nasze słodycze
                    </a>
                    <ul class="dropdown-menu" style="background-color: #dddddd">
                    <li><a class="dropdown-item" href="{{route('shop.shop', ['category' => 'cukierki'])}}">Cukierki</a></li>
                    <li><a class="dropdown-item" href="{{route('shop.shop', ['category' => 'czekolada'])}}">Czekolada</a></li>
                    <li><a class="dropdown-item" href="{{route('shop.shop', ['category' => 'żelki'])}}">Żelki</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nowości</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">O nas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Twój koszyk</a>
                </li>
            </ul>
            <button class="btn btn-outline-dark ms-auto" href="#">Zaloguj</button>
        </div>
    </div>
  </nav>

