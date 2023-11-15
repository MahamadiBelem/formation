<?php

namespace App\Models;

use App\Models\Provinces;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    use HasFactory;

    protected $table='regions';


    /**
     * une region a plusieurs a plusieurs provinces
     */
    public function provinces()
    {
        return $this->hasMany(Provinces::class);
    }
}
