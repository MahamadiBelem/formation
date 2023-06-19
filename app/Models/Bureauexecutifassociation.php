<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bureauexecutifassociation extends Model
{
    use HasFactory;

    protected $table = 'bureauexecutifassociations';

    public function association()
    {
        return $this->belongsTo(Association::class);
    }
}
