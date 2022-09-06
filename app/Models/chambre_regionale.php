<?php

namespace App\Models;

use App\Models\Communes;
use App\Models\secretariat_ex_cra;
use App\Models\commission_permanante;
use App\Models\rencontre_statuaire;
use App\Models\assemblee_consulaire;
use App\Models\bureau_executif;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chambre_regionale extends Model
{
    use HasFactory;

    protected $table ='chambre_regionale';

    public function commune()
    {
        return $this->belongsTo(Communes::class); 
    }

    public function secretariat_ex_cra()
    {
        return $this->hasMany(secretariat_ex_cra::class);
    }

    public function commission_permanante()
    {
        return $this->hasMany(commission_permanante::class);
    }

    public function rencontre_statuaire()
    {
        return $this->hasMany(rencontre_statuaire::class);
    }

    public function assemblee_consulaire()
    {
        return $this->hasMany(assemblee_consulaire::class);
    }

    public function bureau_executif()
    {
        return $this->hasMany(bureau_executif::class);
    }
}
