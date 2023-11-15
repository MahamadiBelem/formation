<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprochePedagogique extends Model
{
    use HasFactory;
    protected $table='approche_pedagogiques';

    /**
     * une approche_pedagogiques concerne plusieurs centre de formations
     */

    public function centreformation()
    {
        return $this->belongsToMany(CentreFormation::class);
    }
}
