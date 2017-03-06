<?php

namespace  App\Models\Application\Traits;
use App\Models\Application\Application;

/**
 * @package  App\Models\Application\Traits
 * @mixin Application
 */
trait BelongsToManyApplicationsTrait
{

    public function applications()
    {
        return $this->belongsToMany(Application::class);
    }
}