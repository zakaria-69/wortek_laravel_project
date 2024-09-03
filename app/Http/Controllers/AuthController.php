<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class AuthController extends Controller
{
    //

    public function showLoginAuthPage()
    {
        return view('/pages/login_auth');
    }

    public function showLoginForm()
    {
        return view('/pages/login_auth');
    }

    public function login(Request $request)
    {
        return view('/pages/home');
        // Logique de connexion
    }

    public function showAuthentificationForm()
    {
        return view('/login_authentification/authentification');
    }

    public function register(Request $request)
    {
        //valider les données de la requete
        $validateData = $request->validate([
            'email'=>'required|email|unique:clients,email',
            'password'=>'required|min:8',
            'adress'=>'nullable|string|max:255',
            'isPremium'=>'nullable|boolean|',
        ]);
        //crée un nouveau client
        $client = new Client([
            'email'=>$validateData['email'],
            'password'=>bcrypt($validateData['password']),
            'adress'=>$validateData['adress'],
            'isPremium'=>$request->has('isPremium'),
        ]);
        $client->save();
        echo('vous êtes enregister avec succès');
        return redirect('/login')->with('success', 'Vous êtes enregistré avec succès');
    }
}
