<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffecterModule extends Model
{
    use HasFactory;

    protected $table='affecter_module';

    public function formateur()
    {
        return $this->belongsTo(Formateurs::class,'formateur_id');

    }

    public function typeformation()
    {
        return $this->belongsTo(TypeFormation::class,'type_formation_id');
    }

    public function module()
    {
        return $this->belongsTo(Module::class,'module_id');
    }
}
