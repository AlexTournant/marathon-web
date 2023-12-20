<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Histoire;
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

    public function show(Request $request, string $id)
    {
        $histoire = Histoire::find($id);
        $titre = $request->get('action', 'show') == 'show' ? "Détails de la scène" : "Suppression d'une scène";
        return view('histoire.show', ['titre' => $titre, 'histoire' => $histoire,
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