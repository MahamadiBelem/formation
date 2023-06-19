<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Association extends Model
{
    use HasFactory;
    protected $table = 'associations';

    public function activiteorgane()
    {
        return $this->belongsTo(Activiteorgane::class);
    }

    public function secretExecAsso()
    {
        return $this->hasMany(Secretariatexecutifassociation::class);
    }

    public function bureauExecAsso()
    {
        return $this->hasMany(Bureauexecutifassociation::class);
    }

    public function commissariataucompteassociation()
    {
        return $this->hasMany(Commissariataucompteassociation::class);
    }

    public function fonctAsso()
    {
        return $this->hasMany(Fonctionnementassociation::class);
    }

    public function commune()
    {
        return $this->belongsTo(Communes::class);
    }

    public function type_organisation()
    {
        return $this->belongsTo(TypeOrganisation::class);
    }
}
