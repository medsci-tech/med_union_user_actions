<?php

namespace App\Models\MdUser;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\MdUser\MdRole
 *
 * @property int $id
 * @property string $role_en 用户角色
 * @property string $role_ch 用户角色
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdRole whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdRole whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdRole whereRoleCh($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdRole whereRoleEn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdRole whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MdRole extends Model
{
    //
}
