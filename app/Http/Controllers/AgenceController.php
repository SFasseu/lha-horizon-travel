<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use Illuminate\Http\Request;

class AgenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('agence.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agence.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           
            'name' => 'required|string|max:255|min:2',
            'adresse' => 'required|string|max:255|min:2',
            'telephone' => 'required|string|max:9|min:9',
            'email' => 'required|email|unique:agences',
          
        ]);

        //Récupération des données du formulaire
        $name = $request->input('name');
        $adresse = $request->input('adresse');
        $telephone = $request->input('telephone');
        $email = $request->input('email');
       
       

        //création de l'utilisateur
        $user = new agence();
        $user->name = $name;
        $user->adresse= $adresse;
        $user->telephone= $telephone;
        $user->email = $email;
        $user->save();

        return redirect()->route('agence.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agence $agence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agence $agence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agence $agence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agence $agence)
    {
        //
    }
}
