<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganeGestion extends Model
{
    use HasFactory;

    protected $table='organe_gestions';

    public function cooperative()
    {
        return $this->belongsTo(Cooperative::class, 'cooperative_id');
    }
}
