<x-layout>
    <img class="logo" src="{{Vite::asset('resources/images/logo.jpg')}}" alt="Logo">
    <h2>Ressource statique</h2>
    <p>Après avoir ajouté le code :</p>
    <pre><code class="language-javascript">import.meta.glob([
    '../images/**',
    '../fonts/**',
]);</code></pre>
    <p>dans le fichier <code>resources/js/app.js</code>.</p>
    <pre><code>&lt;img class="img-land" src="&lcub;&lcub;Vite::asset('resources/images/arbre.jpg')&rcub;&rcub;" alt="Arbre"&gt;</code></pre>

    <img class="img-land" src="{{Vite::asset('resources/images/arbre.jpg')}}" alt="Arbre">
    <h2>Ressource uploadée</h2>
    <p>Soit une image qui a été téléversée sur le serveur dans le répertoire
        <code>storage/app/public/images/surfer.jpg</code>.</p>
    <p>Il faut aussi avoir modifié la variable d'environnement <code>FILESYSTEM_DISK</code> en lui donnant comme valeur
        :</p>
    <pre><code>FILESYSTEM_DISK=public</code></pre>
    <p>Dans le fichier <code>.env</code>.</p>
    <p>Comme un lien existe entre <code>public/storage</code> et <code>storage/app/public</code>
        (résultat de la commande <code>php artisan storage:link</code>), on peut utiliser
        la fonction <code>Storage::url</code> pour construire le lien vers l'image.</p>
    <p><strong>Attention : </strong> il faut avoir mis à jour la variable d'environnement <code>APP_URL</code> et <code>ASSET_URL</code> sur la
        machine de déploiement.</p>
    <p>Dans notre cas <code>APP_URL=http://marathon.ipa.iutlens.local/~but23_groupeT</code> et
        <code>ASSET_URL=http://marathon.ipa.iutlens.local/~but23_groupeT</code>.</p>
    <pre><code>&lt;img class="img-land" src="{{Storage::url('images/surfer.jpg')}}" alt="Surfer"&gt;</code></pre>
    <img class="img-land" src="{{Storage::url('images/surfer.jpg')}}" alt="Surfer">

    <h2>Les polices de caractères</h2>
    <h3>Police locale</h3>
    <p class="shadow">Utilisation d'une police de caractères différente</p>
    <h3>Police sur le net</h3>
    <p class="redact">Utilisation d'une police de caractères différente</p>


    <h2>Utilisation de javascript</h2>
    <p>
        Entrez la valeur en euros :
        <input id="euros" type="text" value="0"/><br/>
        <input id="convertir" type="button" value="Convertir"/><br/>
        La valeur correspondante en francs est <span id="francs">0</span> francs.
    </p>

    <h2>Les sources</h2>
    <p>Voir les fichiers :</p>
    <ul>
        <li>
            <p><code>resources/js/test-vite.js</code></p>
        </li>
        <li>
            <p><code>resources/css/test-vite.css</code></p>
        </li>
        <li>
            <p>le fichier de configuration de Vite <code>vite.config.js</code></p>
        </li>
        <li>
            <p>Utiliser à partir du composant <code>Layout</code> et la vue <code>layout.blade.php</code>.</p>
        </li>
        <li>
            <p>Appeler comme résultat du traitement de la requête <code>/test-vite</code> par la méthode
                <code>index</code> du contrôleur <code>ViteController</code>.</p>
        </li>
    </ul>
</x-layout>

