<x-guest-layout>
    <div class="wrap">
        <div class="container">
            <div class="content">
        <form class="login-form" action="{{route('login')}}" method="post">
            @csrf
            <div class="form-header">
                <h3>Connexion</h3>
            </div>
            <!--Email Input-->
            <div class="form-group">
                <input type="text" name="email" class="form-input" placeholder="email@example.com">
            </div>
            <!--Password Input-->
            <div class="form-group">
                <input type="password" name="password" class="form-input" placeholder="password">
            </div>
            <!--Login Button-->
            <div class="form-group">
                <button class="btn form-button" type="submit">Login</button>
            </div>
            <div class="form-footer">
                Vous n'avez pas de compte ? <a href="{{route('register')}}">Enregistrement</a>
            </div>
        </form>
    </div><!--/.wrap-->
        </div>
    </div>
</x-guest-layout>