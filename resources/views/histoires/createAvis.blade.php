<x-layout>
    <div class="main-container">
        <h1>Création d'un commentaire</h1>

        {{--
           messages d'erreurs dans la saisie du formulaire.
        --}}

        {{--        @if ($errors->any())
                    <div class="errors">
                        <h3 class="titre-erreurs">Liste des erreurs</h3>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif--}}
        {{--
             formulaire de saisie d'une tâche
             la fonction 'route' utilise un nom de route
             'csrf_field' ajoute un champ caché qui permet de vérifier
               que le formulaire vient du serveur.
          --}}

        <form action="{{route('histoires.ajoutAvis')}}" method="POST">
            {!! csrf_field() !!}
            <div class="form-create">
                {{-- le contenu  --}}
                <div class="form-control">
                    <label class="form-label" for="contenu">Texte :</label>
                    <textarea class="form-input" name="contenu" id="contenu" rows="6"
                              value="{{ old('contenu') }}"></textarea>
                </div>

                <div class="form-buttons">
                    <button type="reset">Annule</button>
                    <button type="submit">Valide</button>
                </div>
            </div>
        </form>
    </div>
</x-layout>
