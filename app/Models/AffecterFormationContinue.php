<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffecterFormationContinue extends Model
{
    use HasFactory;
    protected $table='affecter_formation_continue';

    public function centreformation()
    {
        return $this->belongsTo(CentreFormation::class,'centre_formation_id');

    }

    public function formation()
    {
        return $this->belongsTo(Formations::class,'formation_id');
    }
    
    
}
