<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjetInstallations extends Model
{
    use HasFactory;
    protected $table='projet_installations';

    public function centreformation()
    {
        return $this->belongsTo(CentreFormation::class,'centre_formation_id');

    }

    public function apprenant()
    {
        return $this->belongsTo(Apprenants::class,'apprenant_id');

    }

    public function domainesinstallation()
    {
        return $this->belongsTo(DomainesInstallations::class,'domaines_installation_id');
    }


    /**public function kit()  
    {
        return $this->hasMany(Kits::class,'kit_id');
    } */
}
