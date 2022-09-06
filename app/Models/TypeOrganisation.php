<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOrganisation extends Model
{
    use HasFactory;

    protected $table = 'type_organisations';

    public function cooperative()
    {

        return $this->hasMany(Cooperative::class);
    }
}
