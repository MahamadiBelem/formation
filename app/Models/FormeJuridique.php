<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormeJuridique extends Model
{
    use HasFactory;
    protected $table = 'forme_juridiques';

    public function cooperative()
    {

        return $this->hasMany(Cooperative::class);
    }
}
