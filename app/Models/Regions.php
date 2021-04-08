<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    use HasFactory;
    protected $table='regions';

    public function provinces() 
    {
        
        return $this->hasMany(Provinces::class);
    }
}
