<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Application\ApplicationRelationship
 *
 * @property int $id
 * @property int $user_id 用户id
 * @property int $upper_id 上游id
 * @property int $application_id 项目id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\ApplicationRelationship whereApplicationId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\ApplicationRelationship whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\ApplicationRelationship whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\ApplicationRelationship whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\ApplicationRelationship whereUpperId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\ApplicationRelationship whereUserId($value)
 * @mixin \Eloquent
 */
class ApplicationRelationship extends Model
{
    //
}
