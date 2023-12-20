<?php

namespace App\Http\Controllers;

use App\Models\Chapitre;
use Illuminate\Http\Request;

class ChapitreController extends Controller
{

    public function show(Request $request, $id)
    {
        $chapitre = Chapitre::find($id);
        $titre = $request->get('action', 'show') == 'show' ? "Détails de la scène" : "Suppression d'une scène";
        return view('chapitres.show', ['titre' => $titre, 'chapitre' => $chapitre,
            'action' => $request->get('action', 'show')]);
    }




}
