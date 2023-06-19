<?php

namespace App\Models;
use App\Model\Activiteorgane;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;
    protected $table = 'activites';

    public function activiteorgane()
    {
        return $this->belongsToMany(Activiteorgane::class);
    }
}
