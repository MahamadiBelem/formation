<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretariatexecutifassociation extends Model
{
    use HasFactory;

    protected $table = 'secretariatexecutifassociations';

    public function association()
    {
        return $this->belongsTo(Association::class);
    }
}
