<?php

namespace App\Models;

use App\Models\chambre_regionale;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commission_permanante extends Model
{
    use HasFactory;

    protected $table ='commission_permanante';

    public function chambre_regionale()
    {
        return $this->belongsTo(chambre_regionale::class);
    }
}
