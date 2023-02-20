<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;
use App\Models\Formation;

class Referentiel extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        "libeller",
        "valideted",
        "horaire"
        
    ];
    

    public function type(){

        return $this->belongsTo(Type::class);

    }


    public function formations(){

        return $this->belongsToMany(Formation::class , 'pivot_formation_referentiel');

    }
}
