<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in avatars.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user=User::find($id);
        return view('users.show',["user"=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('users.edit');
    }

    /**
     * Update the specified resource in avatars.
     */
    public function update(Request $request)
    {
        Auth::user()->name=$request->name;
        Auth::user()->email=$request->email;
        Auth::user()->save();
        $user=User::find(Auth::id());
        return view('users.show',["user"=>$user]);
    }

    /**
     * Remove the specified resource from avatars.
     */
    public function destroy(string $id)
    {
        //
    }
    public function upload(Request $request)
    {
        // Validate the request
//            $request->validate([
//                'image' => 'required|mimes:jpeg,png,jpg,gif', // Adjust the allowed image types and maximum size as needed
//            ]);
        // Retrieve the authenticated user
        $user = Auth::user();

        // Check if the request has a file and if it's a valid file
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
        } else {
            return redirect()->route('users.show', ['user'=>User::find($user->id)])
                ->with('type', 'error')
                ->with('msg', 'Tâche non modifiée. Aucun fichier téléchargé ou fichier mal téléchargé.');
        }

        // Generate a unique name for the uploaded file based on the current timestamp
        $nom = 'image_' . time() . '.' . $file->extension();

        // Store the file in the 'avatars' directory (you may change it to 'img' or any desired directory)
        $file->storeAs('avatars', $nom, 'public');


        // If the user already has an avatar, delete the old one
        if ($user->avatar && $user->avatar !== "default.png") {
            Storage::disk('public')->delete('avatars/' . $user->avatar);
        }

        // Update the user's avatar with the new file name
        $user->avatar = $nom;
        $user->save();

        return redirect()->route('users.show', ["user"=>$user->id])
            ->with('type', 'success')
            ->with('msg', 'Avatar mis à jour avec succès.');
    }
}
