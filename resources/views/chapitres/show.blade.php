<x-layout>
        <div>
                {{$chapitre["titrecourt"]}}
        </div>
        <video width="640" height="360" controls>
                <source src="{{ Vite::asset('resources/video/'.$chapitre["media"])}}" type="video/mp4">
                Votre navigateur ne supporte pas la balise vidéo.
        </video>
        <div>
                {{$chapitre["texte"]}}
        </div>
        <div>
                <button>Retourner a l'accueil</button>

                @if(count($chapitre->suivants)>0)
                        @foreach($chapitre->suivants as $c)
                                <a href="/histoire/{{$id}}/chapitre/{{$c["id"]}}">{{$c->pivot->reponse}}</a>
                        @endforeach
                @endif

        </div>
{{--        "id" => 1--}}
{{--        "titre" => null--}}
{{--        "titrecourt" => "et 1"--}}
{{--        "texte" => "Aujourd'hui z1 ne sait pas trop quel nombre il va représenter. Tout dépend déjà de la première question."--}}
{{--        "media" => null--}}
{{--        "question" => "Est-ce-qu'il fait beau aujourd'hui ?"--}}
{{--        "histoire_id" => 1--}}
{{--        "premier" => 1--}}
</x-layout>
