<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use App\Models\Proprietes;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProprietaireController extends Controller
{
    public function index()
    {
        $proprietaires = Proprietaire::all();
        return view('proprietaire.index', compact('proprietaires'));
    }

    public function create()
    {
        return view('proprietaire.create');
    }

    public function store(Request $request)
    {
        Proprietaire::create([
            
            'nom' => $request->nom_proprietaire,
            // dd($request->nom_proprietaire),
            'prenom'=> $request->prenom_proprietaire,
            'adresse'=> $request->adresse,
            'telephone'=> $request->telephone,
            'date_naissance'=> $request->date_naissance,
            'sexe'=> $request->sexe,
            'lieu_naissance'=> $request->lieu_naissance,
            'email'=> $request->email,
           
        ]);
      
        return redirect()->route('proprietes.create')->with('success', 'Votre proprietés a été bien créé');
    }

    public function liste(Proprietaire $proprietaire)
    {
        $proprietaires = Proprietaire::all();
        return view('proprietaire.liste',compact('proprietaires'));
    }

    public function show(Proprietaire $proprietaire)
    {
        $proprietaires = Proprietaire::all();
        return view('proprietaire.show', compact('proprietaires'));
    }
}
