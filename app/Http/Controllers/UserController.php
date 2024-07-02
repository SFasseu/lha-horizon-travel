<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //    récupération de tous les utlisateurs
        $users = User::all();
        
        return view('user.index', ['user' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|string|max:255|min:2',
            'password' => 'required|min:6|confirmed',
        ]);

        //Récupération des données du formulaire
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $confirmPasswrod = $request->input('password_confirmation');

        //création de l'utilisateur
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();

        return redirect()->route('user.index');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $name = $request->input('name');
        $email = $request->input('email');

        $user->email = $email;
        $user->name = $name;
        $user->save();

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user=user::find($id);
        $user->delete();
        return redirect()->route('user.index');
       

    }
}
