<?php

namespace App\Models;
use App\Model\Activiteorgane;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;
    protected $table = 'filieres';

    public function activiteorgane()
    {
        return $this->hasMany(Activiteorgane::class);
    }
}
