<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commissariataucompteassociation extends Model
{
    use HasFactory;
    protected $table = 'commissariataucompteassociations';

    public function association()
    {
        return $this->belongsTo(Association::class);
    }
}
