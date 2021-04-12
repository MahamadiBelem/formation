<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomaineFormation extends Model
{
    use HasFactory;
    protected $table='domaine_formation';

    public function centreformation()
    {
        return $this->belongsToMany(Centreformation::class);
    }
}
