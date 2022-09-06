<?php

namespace App\Models;

use App\Models\chambre_regionale;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rencontre_statuaire extends Model
{
    use HasFactory;

    protected $table ='rencontre_statuaire';

    public function chambre_regionale()
    {
        return $this->belongsTo(chambre_regionale::class);
    }
}
