<?php

namespace  App\Models\MdUser\Traits;

use App\Models\MdUser\MdUser;

/**
 * @package  App\Models\MdUser\Traits
 * @mixin MdUser
 */
trait BelongsToUserTrait
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mdUser()
    {
        return $this->belongsToMany(MdUser::class);
    }
}