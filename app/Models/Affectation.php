<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    use HasFactory;

    protected $table='affectation';


    public function apprenant()
    {
        return $this->belongsTo(Apprenants::class,'apprenant_id');
    }

    public function kit()  
    {
        return $this->belongsTo(Kits::class,'kit_id');
    }

    public function sourcefinancement()
    {
        return $this->belongsTo(SourceFinancements::class,'source_financement_id');
    }



}
