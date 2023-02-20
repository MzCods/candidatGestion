<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Referentiel;
use App\Models\Type;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    //

    public function create()
    {
        return view('formation/ajouter');
    }
    public function store(Request $request)
    {
       
        
        $input = $request->all();
        Formation::create($input);
        
        return redirect('formation/ajouter')->with('flash_message','Formation créé');
    }
    public function index()
    {
        $projets = Formation::all();
        return view('formation.index', ['formation' => $projets]);
        
    }
    public function show($id){
        $projet = Formation::find($id);
        return view('formation.show', compact('formation'));
    }

    public function NbFormation(Request $request){
 
        $projet = Formation::where('referentiel_id',$request->id)->count();
        

        return view('referentiel.ajouter', ['referentiels' => $projet]);
        
    }

    public function type(Request $request){
 
        $projet = Formation::find(1);
        $projet1=$projet->referentiel->id;
        $projet2=Referentiel::find($projet1);
        $projet3=$projet2->type;
        $projet4=$projet3->libeller;
        dd($projet4);
        

        
        
    }

   

    
}
