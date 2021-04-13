<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateurs extends Model
{
    use HasFactory;

    protected $table='formateurs';

    public function affecterformateur()
    {
        return $this->hasMany(AffecterFormateur::class);
    }
}
