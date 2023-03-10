<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Formation;

class Candidat extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        "nom",
        "prenom",
        "email",
        "age",
        "niveauEtude",
        "Sexe"
    ];


    public function formations()
    {
        return $this->belongsToMany(Formation::class , 'pivot_formation_candidat');
    }
}
