<x-main>



<div class="container">
    <div class="content">
<h1>Connexion</h1>
        <div class="form-group">
            <label for="Nom d'utilisateur">Nom d'utilisateur</label>
            <input type="text" name="nom d'utilisateur" class="form-input" placeholder="Nom d'utilisateur">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" class="form-input" placeholder="Mot de passe">
        </div>
<div class='align'><input type="checkbox"><p>Se souvenir de moi</p></div>
<input class="btn" type="submit">
<p>Pas encore de compte ? <a href="{{route('register')}}">S'inscrire</a></p>
</div>
</div>
</x-main>