<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeFormation extends Model
{
    use HasFactory;
    protected $table='type_formations';

    /**
     * equivalent a cycle formation et appartient a un module
     */

   /*  public function module()
    {
        return $this->belongsTo(Module::class,'module_id');

    } */
}
