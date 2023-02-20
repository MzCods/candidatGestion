<?php

namespace App\Http\Controllers;

use App\Models\Referentiel;
use App\Models\Type;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class TypeController extends Controller
{
    //

    public function create()
    {
        return view('type/ajout');
    }
    public function store(Request $request)
    {
        
        $input = $request->all();
        Type::create($input);
        return redirect('type/create')->with('flash_message','Type créé');
    }
    public function index()
    {
        $projets = Type::all();
        return view('type.index', ['type' => $projets]);
       
    }
    public function show($id){

    
        $projet = Type::find($id);
        return view('type.show', compact('type'));
    }

    public  function repartFormation_by_tzpe(Request $request){
        


    }
}
