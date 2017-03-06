<?php

namespace  App\Models\MdUser\Traits;

use App\Models\MdUser\MdUser;

/**
 * @package  App\Models\MdUser\Traits
 * @mixin MdUser
 */
trait BelongsToManyUsersTrait
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function mdUser()
    {
        return $this->belongsToMany(MdUser::class);
    }
}