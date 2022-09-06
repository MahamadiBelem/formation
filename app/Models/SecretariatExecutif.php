<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecretariatExecutif extends Model
{
    use HasFactory;
    public function cooperative()
    {
        return $this->belongsTo(Cooperative::class, 'cooperative_id');
    }
}
