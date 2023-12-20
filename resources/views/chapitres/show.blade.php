<x-layout>
    <h1>{{$titre}}</h1>
    <div class="container">
        <div> Chapitre #{{$chapitre->id}}</div>
        <div>{{$chapitre->titrecourt}}</div>
        <div>{{$chapitre->texte}}</div>

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
                    <a href="{{route('accueil')}}">Retour à l'accueil</a>
                </div>
            {{--@endif--}}
        </div>
    </div>
</x-layout>
