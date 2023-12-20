<x-layout>
    <h1>{{$titre}}</h1>
    <div class="container">
        <div> Chapitre #{{$chapitre->id}}</div>
        <div>{{$chapitre->titre}}</div>
        <div>{{$chapitre->texte}}</div>
        <div> <img src="{{asset($chapitre->media)}}"> </div>
        <div>{{$chapitre->question}}</div>
        <div class="tache-des">
            {{--
            @if($action == 'delete')
                <form action="{{route('chapitres.destroy',$chapitre->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="text-center">
                        <button type="submit" name="delete" value="valide">Valide</button>
                        <button type="submit" name="delete" value="annule">Annule</button>
                    </div>
                </form>
            @else--}}
                <div>
                    <a href="{{route('histoires.index')}}">Retour à l'accueil</a>
                </div>
            {{--@endif--}}
        </div>
    </div>
</x-layout>
