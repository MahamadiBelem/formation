<?php

namespace App\Models;

use App\Models\chambre_regionale;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secretariat_ex_cra extends Model
{
    use HasFactory;

    protected $table ='secretariat_ex_cra';

    public function chambre_regionale()
    {
        return $this->belongsTo(chambre_regionale::class);
    }
}
