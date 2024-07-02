<?php

namespace App\Http\Controllers;

use App\Models\OffreTouristique;
use Illuminate\Http\Request;

class OffreTouristiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('offre.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('offre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'name' => 'required|string|max:255|min:2',
            'description'=>'required|string|max:255|',
            'prix' => 'required|integer|max:255|min:2',
            'duree' => 'required|integer|max:255|min:2',
            
        ]);

        //Récupération des données du formulaire
        $name = $request->input('name');
        $description = $request->input('email');
        $prix = $request->input('prix');
        $duree = $request->input('duree');
        //création de l'utilisateur
        $offreTouristique = new OffreTouristique();
        $offreTouristique->name = $name;
        $offreTouristique->description = $description;
        $offreTouristique->prix = $prix;
        $offreTouristique->duree = $duree;
        $offreTouristique->save();

        return redirect()->route('offre.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(OffreTouristique $offreTouristique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OffreTouristique $offreTouristique)
    {
        return view('OffreTouristique.edit',compact('$offreTouristique'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OffreTouristique $offreTouristique)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $prix = $request->input('prix');
        $duree = $request->input('duree');

        $offreTouristique->name= $name;
        $offreTouristique->description = $description;
        $offreTouristique->prix= $prix;
        $offreTouristique->duree= $duree;
        $offreTouristique->save();

        return redirect()->route('offre.index');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    
    {
        
}
