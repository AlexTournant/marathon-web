<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Redacted+Script:wght@400">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-FXt5TUsjLeq/A6H9OMf+jrc+cJL4lAhL5d8tfw2EOZg=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-GLhlTQ8iK9tPte6sRUZfAqq6iENgH-zWT+O8OjmgF5PGNO1q1Bd2f6PUEisi1I6D" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/css/fortify.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
<nav style="background-color: #1a202c; width: 100%" class="navbar navbar-expand-lg navbar-dark p-2 marge-bot">
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

    <div>
        {{ $slot }}
    </div>
    <x-footer></x-footer>

</body>
</html>
