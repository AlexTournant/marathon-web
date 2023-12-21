<x-main>
    <div class="wrap">
        <form class="login-form" action="{{route('register')}}" method="post">
            @csrf
            <div class="form-header">
                <h3>Enregistrement</h3>
                <p>Enregistrement pour l'accès à l'application</p>
            </div>
            <!--Nom Input-->
            <div class="form-group">
                <input type="text" name="name" class="form-input" placeholder="Prénom Nom">
            </div>
            <!--Email Input-->
            <div class="form-group">
                <input type="text" name="email" class="form-input" placeholder="email@exemple.com">
            </div>
            <!--Password Input-->
            <div class="form-group">
                <input type="password" name="password" class="form-input" placeholder="mot de passe">
            </div>
            <!--Confirm Password Input-->
            <div class="form-group">
                <input type="password" name="password_confirmation" class="form-input" placeholder="Confirmez mot de passe">
            </div>
            <!--Login Button-->
            <div class="form-group">
                <button class="form-button" type="submit">Enregistrement</button>
            </div>
            <div class="form-footer">
                Vous avez déjà un compte ? <a href="{{route('login')}}">Connexion</a>
            </div>
        </form>
    </div><!--/.wrap-->
</x-main>