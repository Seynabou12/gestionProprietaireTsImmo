<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use App\Models\Proprietes;
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
        return view('proprietes.create', compact('proprietaires'));
    }

    public function store(Request $request)
    {
        Proprietes::create($request->all());
        $photoName = $request->file()['image']->store('proprietes');
   
        Proprietes::create([
            
            'nom' => $request->nom,
            'superficie'=> $request->superficie,
            'photo'=> $photoName,
            'disponibilites'=> $request->disponibilites,
            'description'=> $request->description,
    
            'proprietaire_id' => $request->proprietaire
            
        ]);
        return redirect()->route('proprietes.welcome')->with('success', 'Votre cateorie a été bien créé');
       
    
    }


}
