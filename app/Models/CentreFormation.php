<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentreFormation extends Model
{
    use HasFactory;

    protected $table='centre_formation';

    public function commune()
    {
        return $this->belongsTo(Communes::class);
    }

    public function gestionnaire()
    {
        return $this->belongsTo(Gestionnaire::class);
    }

    public function promoteur()
    {
        return $this->belongsTo(Promoteur::class);
    }
    public function approchepedagogique()
    {
        return $this->belongsToMany(ApprochePedagogique::class,'approche_pedagogique_centre_formations');
    }

    public function publiccible()
    {
        return $this->belongsToMany(PublicCible::class,'public_cible_centre_formations');
    }

    public function specialite()
    {
        return $this->belongsToMany(Specialites::class,'specialite_centre_formations','centre_formation_id','specialite_id');
    }

    public function domainesformation()
    {
        return $this->belongsToMany(DomaineFormation::class,'domaine_formation_centre_formations');
    }

    public function contribution()
    {
        return $this->belongsToMany(Contributions::class,'contribution_centre_formations','centre_formation_id','contribution_id');
    }

    public function niveaurecrutement()
    {
        return $this->belongsToMany(NiveauRecrutement::class,'niveau_recrutement_centre_formations','centre_formation_id','niveau_recrutement_id');
    }

    public function regime()
    {
       return $this->belongsTo(Regime::class);
    }

    public function affecterapprenants()
    {
        return $this->hasMany(AffecterApprenants::class);
    }
    public function affecterformateur()
    {
        return $this->hasMany(AffecterFormateur::class);
    }
    public function affecterformation()
    {
        return $this->hasMany(AffecterFormation::class);
    }
}
