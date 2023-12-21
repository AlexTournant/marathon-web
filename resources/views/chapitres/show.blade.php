<x-layout>
        
        <div class="titre">
                {{$chapitre["titrecourt"]}}
        </div>
        <div class="imgchap">
        @if(str_starts_with("chapitres/",$chapitre->media))
{{--                <img src="{{ \Illuminate\Support\Facades\Storage::url($chapitre->media)}}" >--}}
                <img src="{{$chapitre->media}}" >
        @else
                <img src="{{$chapitre->media}}" >
        @endif
        </div>

        <div class="text">
            <p>    {{$chapitre["texte"]}}</p>
        </div>
                <div class="boutoption">
                        <div class="option">

                                <div>
                                @if(count($chapitre->suivants) === 0)
                                        @php
                                                $histoire = \App\Models\Histoire::find($chapitre->histoire_id);
                                        @endphp
                                        {{Auth::user()->terminees()->attach($histoire->id, ['nombre' =>1])}}
                                        <button><a href="/index">Retourner a l'accueil</a></button>

                                @endif

                                @if(count($chapitre->suivants)>0)
                                        @foreach($chapitre->suivants as $c)
                                                <a href="{{"/chapitre/".$c->id}}">{{$c->pivot->reponse}}</a>
                                        @endforeach
                                @endif
                                </div>
                                <button><a href="/index">Retourner a l'accueil</a></button>
                        </div>
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
