<nav style="background-color: #1a202c" class="navbar navbar-expand-lg navbar-dark p-2">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Raytracing</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/apropos">À Propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                @auth
                    <li>
                    {{Auth::user()->name}}
                    <a href="{{route("logout")}}"
                       onclick="document.getElementById('logout').submit(); return false;">Logout</a>
                    <form id="logout" action="{{route("logout")}}" method="post">
                        @csrf
                    </form>
                @else
                    <li>
                        <a href="{{route("login")}}">Login</a>
                    </li>
                    <a href="{{route("register")}}">Register</a>
                    </li>
                @endauth

            </ul>
            <x-banner class="ms-auto"></x-banner>
        </div>
    </div>
</nav>
