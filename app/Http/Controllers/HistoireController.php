<?php

namespace App\Http\Controllers;

use App\Models\Chapitre;
use App\Models\Genre;
use App\Models\Histoire;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $histoire->active = false;
        $histoire->user_id = Auth::id();
        $histoire->genre_id = $request->genre_id;

        // insertion de l'enregistrement dans la base de données

        $histoire->save();
        $h=Histoire::find($histoire->id);
        // redirection vers la page qui affiche la liste des tâches
        return redirect()->route('encours', ['id' => $histoire->id])
            ->with('type', 'primary')
            ->with('msg', 'Histoire ajoutée avec succès');
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

    public function getPremier(string $id){
        $histoire= Histoire::find($id);
        foreach ($histoire->chapitres as $h){
            if ($h->premier===1){
                return $h->id;
            }
        }
        return null;
    }

    public function vue($id){
        return view("histoires.chapitre",['id'=>$id]);
    }

    public function ajoutChapitre(Request $request, string $id ){
        $this->validate(
            $request,
            [
                'titre' => 'required|string|max:255',
                'titrecourt' => 'required|string',
                'media' => 'required|string',
                'question' => 'required|string',
                'premier' => '|boolean',
            ],
            [
                'required' => 'Le champ :attribute est obligatoire'
            ]
        );

        // code exécuté uniquement si les données sont validées
        // sinon un message d'erreur est renvoyé vers l'utilisateur

        // préparation de l'enregistrement à stocker dans la base de données
        $chapitre=new Chapitre;
        $chapitre->titre=$request->titre;
        $chapitre->titrecourt=$request->titrecourt;
        $chapitre->media=$request->media;
        $chapitre->question=$request->question;
        if ($request->check=="on") {
            $chapitre->premier = true;
        }
        else{
            $chapitre->premier = false;
        }
        $chapitre->histoire_id=$id;
        $chapitre->texte=$request->texte;
        $chapitre->save();

        // insertion de l'enregistrement dans la base de données

        // redirection vers la page qui affiche la même page
        return redirect()->route('encours', ['id' => $id])->with('type', 'primary')->with('msg', 'Histoire ajoutée avec succès');

    }

    public function link(Request $request, string $id ){

        // code exécuté uniquement si les données sont validées
        // sinon un message d'erreur est renvoyé vers l'utilisateur

        // préparation de l'enregistrement à stocker dans la base de données
        $chapitre=Chapitre::find($request->source);
        $chapitre->suivants()->attach($request->destination,["reponse"=>$request->reponse]);


        // redirection vers la page qui affiche la liste des tâches
        return redirect()->route('encours', ['id' => $id])->with('type', 'primary')->with('msg', 'Histoire ajoutée avec succès');

    }

    public function troisPremieresHistoires()
    {
        $troisHistoires = Histoire::take(3)->get();
        $genres = Genre::all();

        return view('histoires.accueil', ['histoires' => $troisHistoires, 'genres' => $genres]);
    }


}
