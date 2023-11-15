<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffecterFormationCarte extends Model
{
    use HasFactory;
    protected $table='affecter_formation_carte';

    /**
     * une affecter_formation_carte concerne un centre, 
     */

    public function centreformation()
    {
        return $this->belongsTo(CentreFormation::class,'centre_formation_id');

    }

    /**
     * une affecter_formation_carte concerne un domaine de formation
     * n'est plus necessaire
     */

   /* public function formation()
    {
        return $this->belongsTo(Formations::class,'formation_id');
    }*/
}
