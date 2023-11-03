<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormationInitiale extends Model
{
    use HasFactory;
    protected $table='formation_initiale';

    public function sourcefinancement()
    {
        return $this->belongsTo(SourceFinancements::class,'source_financement_id');

    }

    public function typeformation()
    {
        return $this->belongsTo(TypeFormation::class,'type_formation_id');
    }

    public function affecterformation()
    {
        return $this->hasMany(AffecterFormation::class);
    }
}
