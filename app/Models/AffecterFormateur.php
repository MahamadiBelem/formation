<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffecterFormateur extends Model
{
    use HasFactory;

    protected $table='affecter_formateurs';


    /**
     * dans affecterFormateur, un formateur est affecté à un seul centre de formation
     */
    public function centreformation()
    {
        return $this->belongsTo(CentreFormation::class,'centre_formation_id');

    }

    /**
     * une affectation concerne une seul formateur
     */
    public function formateur()
    {
        return $this->belongsTo(Formateurs::class,'formateur_id');

    }

    /**
     * dans affecter formateur on peut chosir plusieurs type de formation equivalent a cycle
     * une nouvelle table affecter_formateurs_type_formation qui prendre en champs id de la table courante (affecter_formateurs_id)
     * et type_formation_id 
     */
    public function typeformation()
    {
        return $this->belongsToMany(TypeFormation::class,'affecter_formateurs_type_formation','affecter_formateurs_id','type_formation_id');
    }
    
}
