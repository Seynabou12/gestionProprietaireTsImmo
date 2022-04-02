<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeProprietes;
use Illuminate\Routing\Controller;

class TypeProprietesController extends Controller
{

    public function create()
    {
        return view('typeProprietes.create');
    }

    public function store(Request $request)
    {
        TypeProprietes::create([
            
            'nomType' => $request->nom_type,
            'libelle'=> $request->libelle,
            
        ]);
      
        return redirect()->route('proprietes.create')->with('success', 'Votre type de proprietes a été bien créé');
    }
}
