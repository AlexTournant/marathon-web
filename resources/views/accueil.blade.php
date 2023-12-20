<x-layout>

    <div class="container">
        <h1 style="margin-top: 15px">Bienvenue sur notre site</h1>
        <div class="text-center">
            <a style="margin-bottom: 25px" href="{{ route('histoires.index') }}" class="btn btn-primary mx-auto">Voir toutes les histoires</a>
        </div>
        <div class="row">
            @foreach($histoires as $histoire)

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset($histoire->photo) }}" class="card-img-top" alt="{{ $histoire->titre }}">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('histoires.show', $histoire->id) }}" class="text-decoration-none">{{ $histoire->titre }}</a>
                            </h5>
                            <p class="card-text">{{ $histoire->pitch }}</p>
                            <p class="card-text"><small class="text-muted">{{ $histoire->active ? 'Actif' : 'Inactif' }}</small></p>
                            <p class="card-text">Utilisateur: {{ $histoire->user->name }}</p>
                            <p class="card-text">Genre: <a href="{{route('genre', $histoire->genre->id)}}"> {{  $histoire->genre->label }} </a></p>
                            <p class="card-text">Genre: <a href="{{route('genre', $histoire->genre->id)}}"> En savoir plus </a></p>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>

