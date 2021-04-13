<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinFormations extends Model
{
    use HasFactory;

    protected $table='fin_formations';

    public function affecterapprenants()
    {
        return $this->belongsTo(AffecterApprenants::class,'affecter_apprenant_id');
    }
}
