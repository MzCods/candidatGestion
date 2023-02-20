<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Referentiel;
use App\Models\Candidat;

class Formation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        "nom",
        "duree",
        "description",
        "isStarted",
        "date_debut"

    ];

    public function referentiel(){

        return $this->belongsToMany(Referentiel::class,'pivot_formation_referentiel');
    }

    public function candidats()
    {
        return $this->belongsToMany(Candidat::class ,'pivot_formation_candidat');
    }

    
}
