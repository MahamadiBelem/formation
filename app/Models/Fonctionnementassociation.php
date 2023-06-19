<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fonctionnementassociation extends Model
{
    use HasFactory;

    protected $table = 'fonctionnementassociations';

    public function association()
    {
        return $this->belongsTo(Association::class);
    }
}
