<?php

namespace App\Http\Controllers;

use App\Models\Histoire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Avis;

class AvisController extends Controller
{


    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'contenu' => 'required|string',
            'histoire_id' => 'required|exists:histoires,id',
        ]);

        // Créer un nouvel avis
        $avis = new Avis;
        $avis->contenu = $request->contenu;
        $avis->user_id = Auth::id(); // Utilisateur actuellement connecté
        $avis->histoire_id = $request->histoire_id;
        $avis->save();

        // Rediriger avec un message de succès ou effectuer d'autres actions nécessaires
        return back()->with('success', 'Avis créé avec succès!');
    }
}