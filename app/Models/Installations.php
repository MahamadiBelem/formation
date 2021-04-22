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
}
