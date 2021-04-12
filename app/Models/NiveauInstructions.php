<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NiveauInstructions extends Model
{
    use HasFactory;
    protected $table='niveau_instructions';
    public function apprenant() 
    {
        
        return $this->hasMany(Apprenants::class);
    }

 
}
