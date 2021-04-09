<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communes extends Model
{
    use HasFactory;

    protected $table='communes';
    
    public function province()
    {
        return $this->belongsTo(Provinces::Class);
    }
    public function villages()
    {
        return $this->hasMany(Villages::Class);
    }
    
  
}
