<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FonctionementOrganeCooperative extends Model
{
    use HasFactory;

    protected $table='fonctionement_organe_cooperatives';

    public function cooperative()
    {
        return $this->belongsTo(Cooperative::class, 'cooperative_id');
    }
}
