<?php

namespace App\Models;

use Facade\FlareClient\Glows\Recorder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

 class Cooperative extends Model
{

    use HasFactory;

    protected $table ='cooperatives';

    public function commune()
    {
        return $this->belongsTo(Communes::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function forme_juridique()
    {
        return $this->belongsTo(FormeJuridique::class);
    }

    public function type_organisation()
    {
        return $this->belongsTo(TypeOrganisation::class);
    }

    public function fonctionement_organe_cooperative()
    {
        return $this->hasMany(FonctionementOrganeCooperative::class);
    }
    public function organe_gestion()
    {
        return $this->hasMany(OrganeGestion::class);
    }
    public function organe_controle()
    {
        return $this->hasMany(OrganeControle::class);
    }
    public function secretariat_executif()
    {
        return $this->hasMany(SecretariatExecutif::class);
    }

}
