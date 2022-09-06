<?php

namespace App\Models;

use App\Models\chambre_regionale;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bureau_executif extends Model
{
    use HasFactory;

    protected $table ='bureau_executif';

    public function chambre_regionale()
    {
        return $this->belongsTo(chambre_regionale::class);
    }
}
