<x-layout>
    <div class="row">
        {{-- COLONNE GAUCHE --}}
        <div class="col-md-6">
            <div class="table-responsive"> <!-- Utilisez table-responsive pour une table à défilement horizontal si nécessaire -->
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre Court</th>
                        <th>Question</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count(\App\Models\Histoire::find($id)->chapitres()->get())>0)
                        @foreach(\App\Models\Histoire::find($id)->chapitres()->get() as $c)
                            <tr>
                                <th>ID {{$c->id}}</th>
                                <th>Titre Court {{$c->titrecourt}}</th>
                                <th>Question {{$c->question}}</th>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
            <button class="btn btn-primary"><a href="/activate/{{$id}}" style="text-decoration: none;color: white">
                    @if(\App\Models\Histoire::find($id)->active===0)
                        Activer
                    @else
                        Desactiver
                    @endif
                </a>
            </button>
            <button class="btn btn-success"><a href="{{route("histoires.test",['id'=>\App\Models\Histoire::find($id)])}}" style="text-decoration: none;color: white">TESTER</a></button>
            <h3>Chapitre de l'histoire</h3>


            <form class="login-form" action="/newChapitre/{{$id}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Titre</label>
                    <input type="text" name="titre" class="form-control" placeholder="Titre">
                </div>

                <div class="form-group">
                    <label>Titre Court</label>
                    <input type="text" name="titrecourt" class="form-control" placeholder="Titre Court">
                </div>

                <div class="form-group">
                    <label>Media</label>
                    <input type="text" name="media" class="form-control" placeholder="Media">
                </div>

                <div class="form-group">
                    <label>Question</label>
                    <input type="text" name="question" class="form-control" placeholder="Question">
                </div>

                <div class="form-group mb-3 mt-3">
                    <label>
                        Premier
                        <input type="checkbox" name="check" class="form-check-input">
                    </label>
                </div>

                <div class="form-group">
                    <label>Texte</label>
                    <input type="text" name="texte" class="form-control" placeholder="Texte">
                </div>


                <!-- Login Button -->
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Envoyer</button>
                </div>
            </form>
        </div>

        {{-- COLONNE DROITE --}}
        <div class="col-md-6">
            <form class="login-form" action="/lienChapitre/{{$id}}" method="post">
                @csrf
                <div class="form-group">
                    <h3>Liaison des chapitres</h3>
                </div>

                <div class="form-group">
                    <label>Source :</label>
                    <select name="source" class="form-control">
                        @if(count(\App\Models\Histoire::find($id)->chapitres()->get())>0)
                            @foreach(\App\Models\Histoire::find($id)->chapitres()->get() as $c)
                                <option  value="{{$c->id}}">{{$c->id}}  {{$c->titrecourt}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="form-group">
                    <label>Destination :</label>
                    <select name="destination" class="form-control">
                        @if(count(\App\Models\Histoire::find($id)->chapitres()->get())>0)
                            @foreach(\App\Models\Histoire::find($id)->chapitres()->get() as $c)
                                <option  value="{{$c->id}}">{{$c->id}} {{$c->titrecourt}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="form-group">
                    <label>Reponse</label>
                    <input type="text" name="reponse" class="form-control" placeholder="Reponse">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Envoyer</button>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Source </th>
                        <th>Reponse </th>
                        <th>Destination </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach(\App\Models\Histoire::find($id)->chapitres()->get() as $c)
                            @foreach($c->suivants as $next)
                                <tr>
                            <td>Source {{$c->id}}</td>
                            <td>Reponse {{$next->pivot->reponse}}</td>
                            <td>Destination {{$next->id}}</td>
                                </tr>
                            @endforeach
                        @endforeach

                    <!-- Ajoutez d'autres lignes selon vos besoins -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>