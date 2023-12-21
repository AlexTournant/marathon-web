<x-layout>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Informations du formulaire</h1>

        <div class="card">
            <div class="card-body">
                <h2 class="card-title">{{ $contact['name'] }}</h2>
                <p class="card-text">Email :  {{ $contact['email'] }}</p>
                <p class="card-text">Sujet :  {{ $contact['subject'] }}</p>
                <p class="card-text">Message :  {{ $contact['message'] }}</p>
            </div>
        </div>
    </div>
</x-layout>
