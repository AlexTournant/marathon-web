<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Histoire;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class HistoireController extends Controller
{
    public function accueil()
    {
        $histoiresHome = Histoire::take(3)->get();

        return view('accueil', ['histoires'=>$histoiresHome]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $histoires = Histoire::all();
        $genres = Genre::all();

        return view('histoires.index',
            ['titre' => "Liste des histoires",'histoires' =>$histoires ,  '$genres' => $genres]);

    }

    public function genre($id) {
        $genres = Genre::all();
        $genre = Genre::findOrFail($id);
        return view('histoires.index',
            ['titre' => "Genre ".$genre->label,'histoires' =>$genre->histoires ,  '$genres' => $genres]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $histoires = Histoire::all();
        $genres = Genre::all();
        $users = User::all();

        return view('histoires.create', ['histoires' =>$histoires, 'genres' => $genres, 'users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    function store(Request $request)
    {
        // validation des données de la requête
        $this->validate(
            $request,
            [
                'titre' => 'required|string|max:255',
                'pitch' => 'required|string',
                'photo' => 'required|string',
                'active' => '|boolean',
                'user_id' => 'exists:users,id',
                'genre_id' => 'exists:genres,id',
            ],
            [
                'required' => 'Le champ :attribute est obligatoire'
            ]
        );

        // code exécuté uniquement si les données sont validées
        // sinon un message d'erreur est renvoyé vers l'utilisateur

        // préparation de l'enregistrement à stocker dans la base de données
        $histoire = new Histoire;

        $histoire->titre = $request->titre;
        $histoire->pitch = $request->pitch;
        $histoire->photo = $request->photo;
        $histoire->active = $request->active;
        $histoire->user_id = $request->user_id;
        $histoire->genre_id = $request->genre_id;

        // insertion de l'enregistrement dans la base de données

        $histoire->save();

        // redirection vers la page qui affiche la liste des tâches
        return redirect()->route('histoires.index')->with('type', 'primary')->with('msg', 'Histoire ajoutée avec succès');
    }



    /**
     * Display the specified resource.
     */

    public function show(Request $request, string $id)
    {
        $histoire = Histoire::find($id);
        $titre = $request->get('action', 'show') == 'show' ? "Détails de la scène" : "Suppression d'une scène";
        return view('histoires.show', ['titre' => $titre, 'histoire' => $histoire,
            'action' => $request->get('action', 'show')]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
