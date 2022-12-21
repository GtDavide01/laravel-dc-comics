<header>
    <div class="logo mt-4 d-flex justify-content-center align-items-center">
        <div class="imglogo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
        <h1 class="p-2">Laravel Dc Comics</h1>
    </div>
    <nav class="navbar w-100">
        <div class="container w-100">
            <ul class="navbar-nav w-100 d-flex justify-content-between flex-row">
                <li class="nav-item">
                    <a class="btn btn-outline-primary" aria-current="page" href="{{ route('homecomics') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-primary" aria-current="page" href="{{ route('Comic.create') }}">Crea
                        fumetto</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-primary" aria-current="page" href="{{ route('Comic.index') }}">Tutti i
                        fumetti</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
