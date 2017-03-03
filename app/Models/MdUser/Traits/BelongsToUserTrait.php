<?php

namespace  App\Models\MdUser\Traits;


use App\Models\MdUser\MdUser;

/**
 * Class BelongsToUserTrait
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
        return $this->belongsTo(MdUser::class);
    }
}