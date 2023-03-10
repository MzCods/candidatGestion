<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Referentiel;

class Type extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        "libeller"
    ];

    public function referentiels(){

        return $this->hasMany(Referentiel::class);

    }

}
