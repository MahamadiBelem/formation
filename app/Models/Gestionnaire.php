<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestionnaire extends Model
{
    use HasFactory;

    protected $table='gestionnaires';

    public function centreformation()
    {
        return $this->hasMany(CentreFormation::Class);
    }
}
