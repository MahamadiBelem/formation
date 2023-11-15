<?php

namespace App\Models;

use App\Models\chambre_regionale;
use App\Models\Provinces;
use App\Models\Villages;
use App\Models\CentreFormation;
use App\Models\Cooperative;
use App\Models\Apprenants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communes extends Model
{
    use HasFactory;

    protected $table='communes';

    /**
     * une commune appartient a une province
     */
    public function province()
    {
        return $this->belongsTo(Provinces::class);
    }
    /**
     * une commune a plusieurs villages
     */
    public function villages()
    {
        return $this->hasMany(Villages::class);
    }

    /**
     * une commune a plusieurs centre de format
     */
    public function centreformation()
    {
        return $this->hasMany(CentreFormation::class);
    }

    public function apprenant()
    {

        return $this->hasMany(Apprenants::class);
    }
    public function cooperativec()
    {

        return $this->hasMany(Cooperative::class);
    }

    public function association()
    {
        return $this->hasMany(Association::class);
    }

    public function chambre_regionale()
    {
        return $this->hasOne(chambre_regionale::class);
    }

}
