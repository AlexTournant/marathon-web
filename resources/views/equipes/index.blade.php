<x-layout>
    <div class="container mt-5">
        <h1 class="text-center mb-4">{{ $equipe['nomEquipe'] }}</h1>
        <img src="{{ asset($equipe['logo']) }}">

        <h3 class="text-center mb-4">Lieu de travail : {{ $equipe['localisation'] }}</h3>

        <div class="row mb-5">
            @foreach($equipe['membres'] as $membre)
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="{{ asset($membre['image']) }}" class="card-img-top" alt="{{ $membre['prenom'] }} {{ $membre['nom'] }}">
                        <div class="card-body">
                            <h2 class="card-title">{{ $membre['prenom'] }} {{ $membre['nom'] }}</h2>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ implode(', ', $membre['fonctions']) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
