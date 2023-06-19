<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activiteorgane extends Model
{
    use HasFactory;

    protected $table = 'activiteorganes';

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function activite()
    {
        return $this->belongsToMany(Activite::class,'activite_activiteorgane');
    }

    public function maillon()
    {
        return $this->belongsTo(Maillon::class);
    }

    public function cooperatives()
    {
        return $this->hasMany(Cooperative::class);
    }

    public function association()
    {
        return $this->hasMany(Association::class);
    }
}
