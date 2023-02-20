<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class CandidatController extends Controller
{
    //

    public function create(Request $request)
    {
        $projet=$request->id;
        return view('candidat/ajouter', ['idform' => $projet]);
    }
    public function store(Request $request)
    {
        $candidat = Candidat::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'age' => $request->age,
            'niveauEtude' => $request->niveauEtude,
            'Sexe' => $request->sexe,
        ]);

        $candidat->formations()->attach($request->idform);
        
        
        return redirect()->route('liste');
    }
    public function index()
    {
        $projets = Candidat::all();  
        return view('candidat.index', ['candidat' => $projets]);
       
    }

    public function update(Request $request)
    {
        $projet=$request->id;
        return view('candidat/show', ['id' => $projet]);
    }


    public function store_update(Request $request)
    {
        $candidat= Candidat::find($request->id);
        $candidat->nom = $request->nom;
        $candidat->prenom = $request->prenom;
        $candidat->email = $request->email;
        $candidat->age = $request->age;
        $candidat->niveauEtude = $request->niveauEtude;
        $candidat->sexe = $request->sexe;
        $candidat->save();
        return redirect()->route('liste');
    }

    

    


    public function destroy(Request $request)
    {
        $candidat=Candidat::find($request->id);
        $candidat->delete();
        return redirect()->route('liste');
    }



    public function show($id){

        $projet = Candidat::find($id);
        return view('candidat.show', compact('candidat'));
    }

    

    public function ChartbyAge(){

        $candt =Candidat::all();

        $tranches_age = ['18-24', '25-34', '35-44', '45-54', '55+'];
        $nb_candidats = [0, 0, 0, 0, 0];

        foreach ($candt as $candt) {
            $age = $candt->age;
            if ($age >= 18 && $age <= 24) {
                $nb_candidats[0]++;
            } elseif ($age >= 25 && $age <= 34) {
                $nb_candidats[1]++;
            } elseif ($age >= 35 && $age <= 44) {
                $nb_candidats[2]++;
            } elseif ($age >= 45 && $age <= 54) {
                $nb_candidats[3]++;
            } else {
                $nb_candidats[4]++;
            }
        }

        
        return view('candidat.chartSexe',  ['tranches_age'=>$tranches_age, 'nb_candidats'=>$nb_candidats]);
    }


    public function Candidat(){
            $projet = Candidat::Where('Sexe','Homme')->get();

            $projet1 = Candidat::Where('Sexe','Femme')->get();
            return view('candidat.repart', ['homme' => $projet],['Femme' => $projet1]);
    }

   

   

    
}
