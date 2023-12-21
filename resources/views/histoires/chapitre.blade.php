<!-- resources/views/nom-de-votre-page.blade.php -->

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
                    <tr>
                        <td>1</td>
                        <td>Titre Court 1</td>
                        <td>Question 1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Titre Court 2</td>
                        <td>Question 2</td>
                    </tr>
                    <!-- Ajoutez d'autres lignes selon vos besoins -->
                    </tbody>
                </table>
            </div>
            <button class="btn btn-primary">ACTIVATE</button>
            <button class="btn btn-success">TESTER</button>
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
                    <select name="options" class="form-control">
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Destination :</label>
                    <select name="options" class="form-control">
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
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
                        <th>Source</th>
                        <th>Reponse</th>
                        <th>Destination</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Source 1</td>
                        <td>Reponse 1</td>
                        <td>Destination 1</td>
                    </tr>
                    <tr>
                        <td>Source 2</td>
                        <td>Reponse 2</td>
                        <td>Destination 2</td>
                    </tr>
                    <!-- Ajoutez d'autres lignes selon vos besoins -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
