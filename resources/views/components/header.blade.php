<nav style="background-color: #1a202c" class="navbar navbar-expand-lg navbar-dark p-2">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">HistoryMaker</a>
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
                @guest
                    <li class="m-2" id="banner"><a href="{{ route('login') }}">Login</a></li>
                    <li class="m-2" id="banner"><a href="{{ route('register') }}">Register</a></li>
                @endguest
                @auth
                    <li class="text-white m-2 fw-bold"> Bonjour {{ Auth::user()->name }}</li>
                    @if (Auth::user())

                        <li class="m-2 end-100" id="banner"><a href="#">Des liens spécifiques pour utilisateurs connectés...</a></li>
                    @endif
                    <li class="m-2" id="banner"><a href="#" id="logout">Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}"
                          method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <div class="image-container ratio ratio-1x1 rounded-circle overflow-hidden" style="max-height: 5vh; max-width: 5vh;">
                        <a href="/users/{{Auth::user()->id}}">            <img src="{{asset("/storage/avatars/".\App\Models\User::all()->find(Auth::id())->get("avatar")[Auth::id()-1]["avatar"])}}" class="img-fluid " alt="Votre Image " >
                        </a>
                    </div>

                    <script>
                        document.getElementById('logout').addEventListener("click", (event) => {
                            document.getElementById('logout-form').submit();
                        });
                    </script>
                @endauth
            </ul>
        </div>
    </div>
</nav>
