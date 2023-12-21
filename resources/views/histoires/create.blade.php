<x-main>
    <div class="container">
        <h1>Créer une nouvelle Histoire</h1>

        <form method="post" action="{{ route('histoires.store') }}">
            @csrf

            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" class="form-control" id="titre" name="titre" value="{{ old('titre') }}" required>
            </div>

            <div class="form-group">
                <label for="pitch">Pitch</label>
                <textarea class="form-control" id="pitch" name="pitch" rows="4" required>{{ old('pitch') }}</textarea>
            </div>

            <div class="form-group">
                <label for="photo">URL de la Photo</label>
                <input type="text" class="form-control" id="photo" name="photo" value="{{ old('photo') }}" required>
            </div>

            <div class="form-group">
                <label for="genre_id">Genre</label>
                <select class="form-control" id="genre_id" name="genre_id" required>
                    @foreach($genres as $genre)
                        <option value="{{ $genre->id }}" {{ old('genre_id') == $genre->id ? 'selected' : '' }}>{{ $genre->label }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Créer l'Histoire</button>
        </form>
    </div>
</x-main>