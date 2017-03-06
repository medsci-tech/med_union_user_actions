<?php

namespace  App\Models\Common\Traits;

use App\Models\Common\Hospital;

/**
 * @package  App\Models\Common\Traits
 * @mixin Hospital
 */
trait BelongsToManyHospitalsTrait
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function hospitals()
    {
        return $this->belongsToMany(Hospital::class);
    }
}