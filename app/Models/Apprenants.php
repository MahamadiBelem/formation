<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenants extends Model
{
    use HasFactory;

    protected $table='apprenants';

    public function niveauinstructions()
    {
       return $this->belongsTo(NiveauInstructions::class,'niveau_instruction_id');
    }

    public function commune()
    {
       return $this->belongsTo(Communes::class,'commune_id');
    }

    
    public function affecterapprenants()
    {
        return $this->hasMany(AffecterApprenants::class);
    }
    
}
