<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffecterModule extends Model
{
    use HasFactory;

    protected $table='affecter_module';

    /**
     * une affecter_module concerne un formateur
     */

    public function formateur()
    {
        return $this->belongsTo(Formateurs::class,'formateur_id');

    }

    /**
     * une affecter_module concerne un cycle de formation
     */
    public function typeformation()
    {
        return $this->belongsTo(TypeFormation::class,'type_formation_id');
    }

    /**
     * une affecter_module concerne plusieurs module
     */

    public function module()
    {
        return $this->belongsToMany(Module::class,'affecter_module_module','affecter_module_id','module_id');
    }
   
}
