<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NiveauRecrutement extends Model
{
    
    use HasFactory;

    protected $table='niveau_recrutement';

    public function centreformation()
    {
        return $this->belongsToMany(Centreformation::class);
    }
}
