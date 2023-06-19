<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maillon extends Model
{
    use HasFactory;
    protected $table = 'maillons';

    public function activiteorgane()
    {
        return $this->hasMany(Activitorgane::class);
    }
}
