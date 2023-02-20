<?php

namespace App\Http\Controllers;

use App\Models\Referentiel;
use Illuminate\Http\Request;

class ReferentielController extends Controller
{
    //

    public function create()
    {
        return view('referentiel/ajout');
    }
    public function store(Request $request)
    {
       
        
        $input = $request->all();
        Referentiel::create($input);
        return redirect('referentiel/create')->with('flash_message','Referentiel créé');
    }
    public function index()
    {
        $projets = Referentiel::all();
        return view('referentiel.index', ['referent' => $projets]);
        
    }
    public function show($id){
        $projet = Referentiel::find($id);
        return view('referentiel.show', compact('referent'));
    }
}
