<nav style="background-color: #000022; padding: 20px;" class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid d-flex">
        <div style="width: 40%">
        <a class="navbar-brand" href="/" style="font-size: 24px"><img src="{{ asset("/images/logo.png")}}" style="width: 40%"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto" style="font-size: 18px; width:100%;justify-content: space-around;">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/apropos">À Propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/contact">Contact</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link text-white" style="text-decoration: none">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link text-white" style="text-decoration: none">Inscription</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <a href="#" id="logout" style="text-decoration: none;" class="nav-link text-white">Logout</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <script>
                        document.getElementById('logout').addEventListener("click", (event) => {
                            document.getElementById('logout-form').submit();
                        });
                    </script>
                    <li class="nav-item">
                        <div class="image-container ratio ratio-1x1 rounded-circle overflow-hidden" style="max-height: 50px; max-width: 50px;min-height: 50px; min-width: 50px; ">
                            <a href="/users/{{Auth::user()->id}}">
                                @if(isset(Auth::user()->avatar))
                                <img src="{{asset("/storage/avatars/".Auth::user()->avatar)}}" class="img-fluid " alt="Votre Image">
                                @else
                                    <img src="{{asset("/images/default_avatar.jpg")}}" class="img-fluid " alt="Avatar par défaut">
                                @endif
                            </a>
                        </div>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
