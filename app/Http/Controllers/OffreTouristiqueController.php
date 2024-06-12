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
    public function show(OffreTouristique $offreTouristique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OffreTouristique $offreTouristique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OffreTouristique $offreTouristique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OffreTouristique $offreTouristique)
    {
        //
    }
}
