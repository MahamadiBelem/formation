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
    public function centreformation(): BelongsTo
    {
        return $this->belongsTo(CentreFormation::class);

    }

    /**
     * Get the user that owns the AffecterApprenants
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function apprenant(): BelongsTo
    {
        return $this->belongsTo(Apprenants::class);
    }
    public function formation(): BelongsTo
    {
        return $this->belongsTo(Formation::class);
    }

}
