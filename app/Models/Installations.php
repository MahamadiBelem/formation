<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installations extends Model
{
    use HasFactory;

    protected $table='installations';

    public function affecterapprenants()
    {
        return $this->belongsTo(AffecterApprenants::class,'affecter_apprenant_id');
    }

    public function domainesinstallation()
    {
        return $this->belongsTo(DomainesInstallation::class,'domaines_installation_id');
    }

    public function sourcefinancements()
    {
        return $this->belongsTo(SourceFinancements::class,'source_financement_id');
    }

    //La mise a jour avec l'ajout de nouvel champs
    public function region()
    {
       return $this->belongsTo(Regions::class);
    }

    public function provinces()
    {
        return $this->belongsTo(Provinces::class);
    }

    public function communes()
    {
        return $this->belongsTo(Communes::class);
    }

    public function villages()
    {
        return $this->belongsTo(Villages::class);
    }

    public function centreformation()
    {
        return $this->belongsTo(CentreFormation::class);
    }
}
