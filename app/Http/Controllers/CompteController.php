<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function index()
    {
        $comptes = Compte::all();    
        return view('index', compact('comptes'));
    }
    public function historique($id)
    {
        $comptes = Compte::findOrFail($id);    
        return view('historique', compact('comptes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required|email',
            'numero' => 'required|numeric',
        ]);
        
        $comptes = new Compte;
        $comptes->nom = $request->nom;
        $comptes->prenom = $request->prenom;
        $comptes->adresse = $request->adresse;
        $comptes->numero = $request->numero;
        $comptes->save();

        return redirect()
            ->route('acceuil');
    }
    
    
}
