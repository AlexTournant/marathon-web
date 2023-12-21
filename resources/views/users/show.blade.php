<x-layout>
{{--    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 60vh;">--}}
{{--        <div class="ratio ratio-1x1 rounded-circle overflow-hidden " style="max-height: 50vh; max-width: 50vh;border: 2px solid #1a202c;">--}}
{{--            <img src="{{asset("/storage/avatars/".\App\Models\User::all()->find(Auth::id())->get("avatar")[Auth::id()-1]["avatar"])}}" class="img-fluid " alt="Votre Image " >--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="container mt-2">
        <h1 class="text-center mb-2">Profil : {{ $user['name']  }}</h1>
        <h2 class="text-center mb-3">Informations détaillées</h2>

        @auth

            @if(auth()->user()->getAuthIdentifier() === $user['id'])
                <p class="text-center mb-3"><a href="/users/{{$user['id']}}/edit">Modifier le profil</a></p>
            @endif
        @endauth
        <p class="text-center mb-1"><strong>Adresse de courriel</strong></p>
        <p class="text-center mb-4"><a href="mailto:{{$user['email']}}">{{ $user['email'] }}</a></p>
    </div>
    <p><strong>Les histoires lues</strong></p>
    <div class="row">
        @foreach(App\Models\User::all()->find($user["id"])->terminees()->get() as $histoire )
            @if(Auth::user()->terminees->contains($histoire))
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset($histoire->photo) }}" class="card-img-top" alt="{{ $histoire->titre }}">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('histoires.show', $histoire->id) }}">{{ $histoire->titre }}</a>
                            </h5>
                            <p class="card-text">{{ $histoire->pitch }}</p>
                            @auth()
                                <p class="card-text"><small class="text-muted">{{ $histoire->active ? 'Actif' : 'Inactif' }}</small></p>
                            @endauth
                            <p class="card-text">
                                Utilisateur: <a href="{{ route('users.show', $histoire->user->id) }}">{{ $histoire->user->id}}</a>
                            </p>
                            <p class="card-text">Genre: <a href="{{route('genre', $histoire->genre->id)}}"> {{  $histoire->genre->label }} </a></p>
                            <p class="card-text">Genre: <a href="{{route('genre', $histoire->genre->id)}}"> En savoir plus </a></p>

                            @auth
                                @php
                                    $userCompletedStory = Auth::user()->terminees->contains($histoire);
                                @endphp

                                @if ($userCompletedStory)
                                    L'utilisateur a terminé cette histoire.
                                @else
                                    L'utilisateur n'a pas terminé cette histoire.
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <p><strong>Ces histoires</strong></p>
    <div class="row">
        @foreach(App\Models\User::all()->find($user["id"])->mesHistoires()->get() as $histoire )
            @if($histoire->active==1 or $histoire->user_id===Auth::id())
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset($histoire->photo) }}" class="card-img-top" alt="{{ $histoire->titre }}">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('histoires.show', $histoire->id) }}">{{ $histoire->titre }}</a>
                            </h5>
                            <p class="card-text">{{ $histoire->pitch }}</p>
                            @auth()
                                <p class="card-text"><small class="text-muted">{{ $histoire->active ? 'Actif' : 'Inactif' }}</small></p>
                            @endauth
                            <p class="card-text">
                                Utilisateur: <a href="{{ route('users.show', $histoire->user->id) }}">{{ $histoire->user->id}}</a>
                            </p>
                            <p class="card-text">Genre: <a href="{{route('genre', $histoire->genre->id)}}"> {{  $histoire->genre->label }} </a></p>
                            <p class="card-text">Genre: <a href="{{route('genre', $histoire->genre->id)}}"> En savoir plus </a></p>

                            @auth
                                @php
                                    $userCompletedStory = Auth::user()->terminees->contains($histoire);
                                @endphp

                                @if ($userCompletedStory)
                                    L'utilisateur a terminé cette histoire.
                                @else
                                    L'utilisateur n'a pas terminé cette histoire.
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</x-layout>
