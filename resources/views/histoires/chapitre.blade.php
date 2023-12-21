<x-layout>
    {{-- A GAUCHE --}}
    <button>ACTIVATE</button>
    <button>TESTER</button>
    <h3>Chapitre de l'histoire</h3>
    <div>
        <p>ID</p>
        <p>Titre Court</p>
        <p>Question</p>
    </div>
    <form class="login-form" action="/newChapitre/{{$id}}" method="post">
        @csrf
        <div class="form-header">
        </div>
        <div class="form-group">
            <input type="text" name="titre" class="form-input" placeholder="Titre">
        </div>
        <div class="form-group">
            <input type="text" name="titrecourt" class="form-input" placeholder="Titre Court">
        </div>
        <div class="form-group">
            <input type="text" name="media" class="form-input" placeholder="Media">
        </div>
        <div class="form-group">
            <input type="text" name="question" class="form-input" placeholder="Question">
        </div>
        <div class="form-group">
            <p>Premier</p>
            <input type="checkbox" name="check" class="form-input" >
        </div>
        <p>texte</p>
        <div class="form-group">
            <input type="text" width="200px" name="texte" class="form-input" >
        </div>
        <!--Login Button-->
        <div class="form-group">
            <button class="form-button" type="submit">Envoyer</button>
        </div>
    </form>
    {{-- A DROITE --}}
    <form class="login-form" action="/lienChapitre/{{$id}}" method="post">
        @csrf
        <div class="form-header">
            <h3>Liaison des chapitres</h3>
        </div>
        <!--Email Input-->
        <div class="form-group">
            <p>Source : </p>
            <select name="options">
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
            </select>
        </div>
        <!--Password Input-->
        <div class="form-group">
            <p>Destination : </p>
            <select name="options">
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" name="reponse" class="form-input" placeholder="Reponse">
        </div>
        <!--Login Button-->
        <div class="form-group">
            <button class="form-button" type="submit">Envoyer</button>
        </div>
    </form>
    <p>Source</p>
    <p>Reponse</p>
    <p>Destination</p>
</x-layout>