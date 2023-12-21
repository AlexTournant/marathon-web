<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipe= [
            'nomEquipe'=>"L'Ekip",
            'logo'=>"/public/images/logo.png",
            'slogan'=>"L'Ekip on est là",
            'localisation'=>"04X",
            'membres'=> [
                [ 'nom'=>"Ballet",'prenom'=>"Dylan", 'image'=>"/public/images/dylan.png", 'fonctions'=>["développeur"] ],
                [ 'nom'=>"Tournant",'prenom'=>"Alex", 'image'=>"/public/images/alex.png", 'fonctions'=>["développeur"] ],
                [ 'nom'=>"Demory",'prenom'=>"Mael", 'image'=>"/public/images/mael.png", 'fonctions'=>["validateur","développeur"] ],
                [ 'nom'=>"Elhajali",'prenom'=>"Lola", 'image'=>"/public/images/prenom.png", 'fonctions'=>["concepteur"] ],
                [ 'nom'=>"Honore",'prenom'=>"Clara", 'image'=>"/public/images/clara.png", 'fonctions'=>["développeur", "concepteur"] ],
                [ 'nom'=>"Maison",'prenom'=>"Remy", 'image'=>"/public/images/remy.png", 'fonctions'=>["développeur", "concepteur"] ],
                [ 'nom'=>"Cohen",'prenom'=>"Simon", 'image'=>"/public/images/simon.png", 'fonctions'=>["développeur", "concepteur"] ],
            ],
            'autres'=>"Autre chose",
        ];
        return view('equipes.index', ['equipe' => $equipe]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
