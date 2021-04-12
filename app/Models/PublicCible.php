<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicCible extends Model
{
    use HasFactory;

    protected $table='public_cibles';

    public function centreformation()
    {
        return $this->belongsToMany(CentreFormation::class);
    }
}
