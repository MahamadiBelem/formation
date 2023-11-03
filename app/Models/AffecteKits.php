<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffecteKits extends Model
{
    use HasFactory;

    protected $table='affecte_kits';


    public function sourcefinancement()
    {
        return $this->belongsTo(SourceFinancements::class,'source_financement_id');

    }

    public function apprenant()
    {
        return $this->hasMany(Apprenants::class);
    }

    //***Kits constitue le type de kit ****/
    public function kits()
    {
        return $this->hasMany(Kits::class);
    }


}
