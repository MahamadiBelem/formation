<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    use HasFactory;

    public function Region()
    {
        $this->belongsTo(Region::Class);
    }

    public function Communes()
    {
        return $this->hasMany(Communes::Class);
    }
}
