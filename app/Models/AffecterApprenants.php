<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffecterApprenants extends Model
{
    use HasFactory;

    protected $table='affecter_apprenants';

    /**
     * Get the user that owns the AffecterApprenants
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function centreformation()
    {
        return $this->belongsTo(CentreFormation::class,'centre_formation_id');

    }

    /**
     * Get the user that owns the AffecterApprenants
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function apprenant()
    {
        return $this->belongsTo(Apprenants::class);
    }
    public function formation()
    {
        return $this->belongsTo(Formations::class);
    }

}
