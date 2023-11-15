<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomaineFormation extends Model
{
    use HasFactory;
    protected $table='domaine_formation';
    /**
     * un domaine installation concerne plusieurs centre
     */

    public function centreformation()
    {
        return $this->belongsToMany(Centreformation::class);
    }
}
