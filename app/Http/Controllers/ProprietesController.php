<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use App\Models\Proprietes;
use App\Models\TypeProprietes;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProprietesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        $proprietes = Proprietes::with('proprietaire')->get();
        return view('proprietes.welcome', compact('proprietes'));
    }

    public function create()
    {
        $proprietaires = Proprietaire::all();
        $typeProprietes = TypeProprietes::all();
        return view('proprietes.create', compact('proprietaires', 'typeProprietes'));
    }

    public function store(Request $request)
    {
        // Proprietes::create($request->all());
        $fileName = $request->image;
        $photoName = $request->file()['image']->storeAs('proprietes', $fileName, 'public' );
   
        Proprietes::create([
            
            'nom' => $request->nom,
            'superficie'=> $request->superficie,
            'photo'=> $photoName,
            'disponibilites'=> false,
            
            'description'=> $request->description,
    
            'proprietaire_id' => $request->proprietaire_id,
           
            'type_proprietes_id' => $request->nom_type,
           
        ]);

        return redirect()->route('proprietes.welcome')->with('success', 'Votre categorie a été bien créé');
    }

    public function liste(Proprietes $proprietes)
    {
        $proprietes = Proprietes::all();
        return view('proprietes.liste',compact('proprietes'));
    }

}
