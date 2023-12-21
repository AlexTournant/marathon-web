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
            'logo'=>"/images/ekip.jpeg",
            'slogan'=>"L'Ekip on est là",
            'localisation'=>"04X",
            'membres'=> [
                [ 'nom'=>"Ballet",'prenom'=>"Dylan", 'image'=>"/images/Dylan.jpg", 'fonctions'=>["développeur"] ],
                [ 'nom'=>"Tournant",'prenom'=>"Alex", 'image'=>"/images/Alex.jpg", 'fonctions'=>["développeur"] ],
                [ 'nom'=>"Demory",'prenom'=>"Mael", 'image'=>"/images/Mael.jpg", 'fonctions'=>["validateur","développeur"] ],
                [ 'nom'=>"Fournier",'prenom'=>"Corentin", 'image'=>"/images/Corentin.jpg", 'fonctions'=>["développeur"] ],
                [ 'nom'=>"Elhajali",'prenom'=>"Lola", 'image'=>"/images/Lola.jpg", 'fonctions'=>["concepteur"] ],
                [ 'nom'=>"Honore",'prenom'=>"Clara", 'image'=>"/images/Clara.jpg", 'fonctions'=>["développeur", "concepteur"] ],
                [ 'nom'=>"Maison",'prenom'=>"Remy", 'image'=>"/images/Remy.jpg", 'fonctions'=>["développeur", "concepteur"] ],
                [ 'nom'=>"Cohen",'prenom'=>"Simon", 'image'=>"/images/Simon.jpg", 'fonctions'=>["développeur", "concepteur"] ],
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
