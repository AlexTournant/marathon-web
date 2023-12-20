<x-layout>
{{--    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 60vh;">--}}
{{--        <div class="ratio ratio-1x1 rounded-circle overflow-hidden " style="max-height: 50vh; max-width: 50vh;border: 2px solid #1a202c;">--}}
{{--            <img src="{{asset("/storage/avatars/".\App\Models\User::all()->find(Auth::id())->get("avatar")[Auth::id()-1]["avatar"])}}" class="img-fluid " alt="Votre Image " >--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="container mt-2">
        <h1 class="text-center mb-2">Profil : {{ $user['name']  }}</h1>
        <h2 class="text-center mb-3">Informations détaillées</h2>
        <p class="text-center mb-3"><a href="/users/{{$user['id']}}/edit">Modifier le profil</a></p>
        <p class="text-center mb-1"><strong>Adresse de courriel</strong></p>
        <p class="text-center mb-4"><a href="mailto:{{$user['email']}}">{{ $user['email'] }}</a></p>
    </div>
</x-layout>
