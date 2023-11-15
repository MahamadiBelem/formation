<?php

namespace App\Models;

use App\Models\Regions;
use App\Models\Communes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    use HasFactory;
    protected $table='provinces';


    /** 
     * une province appartient a une seule regions 
     * 
     * */
    public function region()
    {
       return $this->belongsTo(Regions::class);
    }

    /** une province a plusieurs commune */
    public function communes()
    {
        return $this->hasMany(Communes::class);
    }
}
