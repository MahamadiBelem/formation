<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialites extends Model
{
    use HasFactory;

    protected  $table='specialites';

    public function centreformation()
    {
        return $this->belongsToMany(Centreformation::class);
    }

    public function formation()
    {
        return $this->belongsTo(Formations::class);
    }
}
