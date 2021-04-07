<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communes extends Model
{
    use HasFactory;

    
    public function Province()
    {
        return $this->belongsTo(Province::Class);
    }
    public function Villages()
    {
        return $this->hasMany(Villages::Class);
    }
    
  
}
