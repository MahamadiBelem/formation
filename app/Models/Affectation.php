<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    use HasFactory;

    protected $table='affectation';

    /**une affection concerne un seul apprenant, dans affectation le champ est apprenant_id */
    public function apprenant()
    {
        return $this->belongsTo(Apprenants::class,'apprenant_id');
    }

    /**une affectation concerne un kit, on peut mettre, id qui va pointer sur article */
    public function kit()  
    {
        return $this->belongsTo(Kits::class,'kit_id');
    }

    /** une affection concerne une source de financements qui est parametrable*/

    public function sourcefinancement()
    {
        return $this->belongsTo(SourceFinancements::class,'source_financement_id');
    }



}
