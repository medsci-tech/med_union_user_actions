<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Application\ApplicationRole
 *
 * @property int $id
 * @property int $application_id 项目id
 * @property string $role_en 用户角色
 * @property string $role_ch 用户角色
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\ApplicationRole whereApplicationId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\ApplicationRole whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\ApplicationRole whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\ApplicationRole whereRoleCh($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\ApplicationRole whereRoleEn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\ApplicationRole whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ApplicationRole extends Model
{
    //
}
