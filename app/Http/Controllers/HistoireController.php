<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Histoire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class HistoireController extends Controller
{
    public function welcome()
    {
        $histoiresHome = Histoire::take(3)->get();

        return view('welcome', ['histoires'=>$histoiresHome]);
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
