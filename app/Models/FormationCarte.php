<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormationCarte extends Model
{
    use HasFactory;
    protected $table='formation_carte';

    public function sourcefinancement()
    {
        return $this->belongsTo(SourceFinancements::class,'source_financement_id');

    }

    public function typeformation()
    {
        return $this->belongsTo(TypeFormation::class,'type_formation_id');
    }

    /**
     * une formation_carte concerne plusieurs affecterformation
     */
    public function affecterformation()
    {
        return $this->hasMany(AffecterFormation::class);
    }

    public function specialite()
    {
        return $this->belongsTo(Specialites::class,'specialite_id');

    }
}
