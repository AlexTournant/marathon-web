<x-guest-layout>
    <div class="wrap">
        <div class="container">
            <div class="content">

        <form class="login-form" action="{{route('register')}}" method="post">
            @csrf
            <div class="form-header">
                <h3>Enregistrement</h3>
            </div>
            <!--Nom Input-->
            <div class="form-group">
                <input type="text" name="name" class="form-input" placeholder="Nom d'utilisateur">
            </div>
            <!--Email Input-->
            <div class="form-group">
                <input type="text" name="email" class="form-input" placeholder="email@exemple.com">
            </div>
            <!--Password Input-->
            <div class="form-group">
                <input type="password" name="password" class="form-input" placeholder="Mot de passe">
            </div>
            <!--Confirm Password Input-->
            <div class="form-group">
                <input type="password" name="password_confirmation" class="form-input" placeholder="Confirmez mot de passe">
            </div>
            <!--Login Button-->
            <div class="form-group">
                <button class="btn form-button" type="submit">Enregistrement</button>
            </div>
            <div class="form-footer">
                Vous avez déjà un compte ? <a href="{{route('login')}}">Connexion</a>
            </div>
        </form>
    </div><!--/.wrap-->
        </div>
    </div>
</x-guest-layout>