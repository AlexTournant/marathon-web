<x-layout>
    <div class="container mt-5">
        <form action="/users/{{Auth::user()->id}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="name" name="name" required value="{{Auth::user()->name}}">
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" required value="{{Auth::user()->email}}">
            </div>

            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
{{--        <form action="{{route('users.upload', ['id' =>Auth::id()])}}" method="post" enctype="multipart/form-data" >--}}
{{--            @csrf--}}
{{--            <div class="form-group">--}}
{{--                <label for="doc">Image : </label>--}}
{{--                <input type="file" name="image" id="doc">--}}
{{--            </div>--}}
{{--            <input type="submit" value="Télécharger" name="submit">--}}
{{--        </form>--}}
    </div>

</x-layout>
