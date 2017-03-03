<?php

namespace  App\Models\Common\Traits;

use App\Models\Common\Hospital;

/**
 * Class BelongsToHospitalTrait
 * @package  App\Models\Common\Traits
 * @mixin Hospital
 */
trait BelongsToHospitalTrait
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}