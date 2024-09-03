<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{

    //afficher le liste des clients
    public function index()
    {
        $clients = Client::all();
        return view('pages.home', compact('clients'));
    }
    //Afficher le formulaire d'ajout de client.
    public function create()
    {
        return view('/pages/login_auth');
    }
    // Enregistrer un nouveau client dans la base de données.
    public function store(Request $request)
    {
        $validateData = $request ->validate([
        'client_id' => 'required|unique:clients',
        'adress' => 'required|string|max:255',
        'email' => 'required|email|unique:clients',
        'password' => 'required|string|min:8',
        'isPremium' => 'boolean',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        $client = new Client($validatedData);
        $client->save();
    
        return redirect('/clients')->with('success', 'Client enregistré avec succès !');
     
    }
    //Afficher le formulaire d'édition de client.
    public function edit($id)
    {
        $client = Client::findOrFail($id); // TODO: ajouter récupération du customer
        return view('clients.edit', ['client' => $client]);
    }

    //Mettre à jour un client existant.
    public function update(Request $request, $id)
    {
    }

    //Supprimer un client.
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect('/clients');
    }
}