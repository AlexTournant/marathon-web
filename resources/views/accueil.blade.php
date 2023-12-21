<x-main>
    <main>
        <div>
            <img class='fond' src="{{ asset('images/histoires.jpg') }}">
            <h1 class='presentation'>Venez découvrir de nouvelles histoires totalement inédites !</h1>
        </div>
<h1 id='titre1'>Histoires</h1>
<h3 class="plus">voir <a href="{{route('histoires.index')}}">plus</a></h3>


        <div class="row" style="max-width: 99%">
            @foreach($histoires as $histoire)
                <div class="col-md-4 mb-4">
                    <div class="card" style="margin-left: 50px">
                        <img src="{{ asset($histoire->photo) }}" class="card-img-top img-fluid" alt="{{ $histoire->titre }}">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('histoires.show', $histoire->id) }}">{{ $histoire->titre }}</a>
                            </h5>
                            <p class="card-text">{{ $histoire->pitch }}</p>
                            <p class="card-text"><small class="text-muted">{{ $histoire->active ? 'Actif' : 'Inactif' }}</small></p>
                            <p class="card-text">
                                Utilisateur: <a href="{{ route('users.show', $histoire->user->id) }}">{{ $histoire->user->id}}</a>
                            </p>
                            <p class="card-text">Genre: <a href="{{ route('genre', $histoire->genre->id) }}"> {{  $histoire->genre->label }} </a></p>

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
            @endforeach
        </div>



</main>

</x-main>

