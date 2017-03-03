<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Application\ApplicationUser
 *
 * @property int $id
 * @property int $user_id 用户id
 * @property int $application_id 项目id
 * @property int $application_role_id 项目角色id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\ApplicationUser whereApplicationId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\ApplicationUser whereApplicationRoleId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\ApplicationUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\ApplicationUser whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\ApplicationUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\ApplicationUser whereUserId($value)
 * @mixin \Eloquent
 */
class ApplicationUser extends Model
{
    //
}
