<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributions extends Model
{
    use HasFactory;

    protected $table='contributions';

    public function centreformation()
    {
        return $this->belongsToMany(Centreformation::class);
    }
}
