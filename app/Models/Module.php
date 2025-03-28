<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $table='module';

    public function typeformation()
    {
        return $this->belongsTo(TypeFormation::class,'type_formation_id');
    }
}
