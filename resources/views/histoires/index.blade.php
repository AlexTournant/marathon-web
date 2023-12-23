<x-layout>
    <div class="container">
        <h1>{{$titre}}</h1>
        @auth()
        <a href="{{ route('histoires.create') }}" class="btn">Nouvelle histoire</a>
        @endauth
        <div class="row">
            @foreach($histoires as $histoire )
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
                                Utilisateur: <a href="{{ route('users.show', $histoire->user->id) }}">{{ $histoire->user->name}}</a>
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
    </div>
</x-layout>