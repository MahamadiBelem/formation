<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffecterFormationInitiale extends Model
{
    use HasFactory;
    protected $table='affecter_formation_initiale';

    /** 
     *  affecter_formation_initiale concerne un centre de formation 
     * */

    public function centreformation()
    {
        return $this->belongsTo(CentreFormation::class,'centre_formation_id');

    }

    /**
     * une affecter_formation_initiale concerne un cycle de formation equivalent a type de formation
     */
    public function typeformation()
    {
        return $this->belongsTo(TypeFormation::class,'type_formation_id');
    }
}
