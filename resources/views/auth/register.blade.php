<x-main>

    <div class="container">
        <div class="content">
            <h1>Inscription</h1>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" name="username" class="form-input" placeholder="Nom d'utilisateur">
                </div>

                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" name="email" class="form-input" placeholder="email@example.com">
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" class="form-input" placeholder="Mot de passe">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirmer le mot de passe</label>
                    <input type="password" name="password_confirmation" class="form-input" placeholder="Confirmer le mot de passe">
                </div>

                <button type="submit" class="btn btn-primary">S'inscrire</button>
            </form>

            <p>Déjà inscrit ? <a href="{{ route('login') }}">Se connecter</a></p>
        </div>
    </div>
</x-main>