<x-layout>
        <div>
                {{$chapitre["titrecourt"]}}
        </div>
        @if(str_starts_with("chapitres/",$chapitre->media))
{{--                <img src="{{ \Illuminate\Support\Facades\Storage::url($chapitre->media)}}" >--}}
                <img src="{{$chapitre->media}}" >
        @else
                <img src="{{$chapitre->media}}" >
        @endif
        <div>
                {{$chapitre["texte"]}}
        </div>
        <div>
                <button><a href="/index">Retourner a l'accueil</a></button>

                @if(count($chapitre->suivants)>0)
                        @foreach($chapitre->suivants as $c)
                                <a href="{{"/chapitre/".$c->id}}">{{$c->pivot->reponse}}</a>
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
