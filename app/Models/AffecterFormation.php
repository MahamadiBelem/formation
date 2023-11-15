<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffecterFormation extends Model
{
    use HasFactory;

    protected $table='affecter_formations';

    /** 
     * affecter formation n'est plus prise en compte.
     * Neamoins affectionFormation concerne un centre et une formation 
     */

    public function centreformation()
    {
        return $this->belongsTo(CentreFormation::class,'centre_formation_id');

    }

    public function formation()
    {
        return $this->belongsTo(Formations::class,'formation_id');
    }
}
