<?php

namespace App\Models\MdUser;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\MdUser\MdUser
 *
 * @property int $id
 * @property int $role_id 角色id
 * @property string $name 用户名字
 * @property string $phone 用户电话
 * @property string $email 用户邮箱
 * @property string $password 用户密码
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUser whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUser whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUser whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUser wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUser wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUser whereRoleId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUser whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MdUser extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id', 'name', 'phone', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];
}
