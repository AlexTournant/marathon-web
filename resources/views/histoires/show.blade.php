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
            </div>
        </div>
    </div>
</x-layout>
