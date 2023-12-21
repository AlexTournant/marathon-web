<x-layout titre="Affiche une histoire">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">{{$histoire->titre}}</h1>
                <p class="text-center"><img src="{{$histoire->photo}}" class="text-center"> </p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Histoire N° : </strong> {{$histoire->id}}</p>
                        <p><strong>Synopsis : </strong> {{$histoire->pitch}}</p>
                    </div>
                    <div class="col-md-6">
                    </div>
                    <div class="text-center">
                        <a href={{"/chapitre/".(new \App\Http\Controllers\HistoireController())->getPremier($histoire->id)}}>Commencer l'histoire</a>
                    </div>
                    <div class="text-center">
                        <a href="/">Retour</a>
                    </div>
                </div>
                <h4>Avis</h4>
               @auth
                <form method="post" action="{{route('avis.store')}}">
                    @csrf
                    <input type="hidden" name="histoire_id" value="{{$histoire->id}}">
                    <textarea name="contenu" style="width:100%" rows="5"></textarea>
                    <input type="submit">
                </form>
                @endauth
                @foreach($histoire->avis()->orderByDesc('id')->limit(10)->get() as $a)
                    <div>
                        <b>{{$a->user->name}}</b>
                        <p>{{$a->contenu}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
