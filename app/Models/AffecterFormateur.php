<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffecterFormateur extends Model
{
    use HasFactory;

    protected $table='affecter_formateurs';

    public function centreformation()
    {
        return $this->belongsTo(CentreFormation::class,'centre_formation_id');

    }

    public function formateur()
    {
        return $this->belongsTo(Formateurs::class,'formateur_id');

    }
}
