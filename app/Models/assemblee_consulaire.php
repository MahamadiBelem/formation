<?php

namespace App\Models;

use App\Models\chambre_regionale;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assemblee_consulaire extends Model
{
    use HasFactory;

    protected $table ='assemblee_consulaire';

    public function chambre_regionale()
    {
        return $this->belongsTo(chambre_regionale::class);
    }
}
