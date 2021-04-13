<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomainesInstallation extends Model
{
    use HasFactory;

    protected $table='domaines_installations';

    public function kits()
    {
        return $this->belongsToMany(Kits::class);
    }
}
