<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kits extends Model
{
    use HasFactory;

    protected $table='kits';

    public function domainesinstallation()
    {
        return $this->belongsToMany(DomainesInstallation::class);
    }

    // ****les nouvellles relations aprés la mise à jour
    /*public function sourcefinancement()
    {
        return $this->belongsTo(SourceFinancements::class,'source_financement_id');

    }

    public function apprenant()
    {
        return $this->hasMany(Apprenants::class);
    }*/


}
