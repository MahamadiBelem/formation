<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffecterFormationInitiale extends Model
{
    use HasFactory;
    protected $table='affecter_formation_initiale';

    public function centreformation()
    {
        return $this->belongsTo(CentreFormation::class,'centre_formation_id');

    }

    public function typeformation()
    {
        return $this->belongsTo(TypeFormation::class,'type_formation_id');
    }
}
