<?php

namespace App\Models\MdUser;

use App\Models\MdUser\Traits\BelongsToUserTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\MdUser\MdUserAddress
 *
 * @property int $id
 * @property int $user_id 用户id
 * @property string $province 省
 * @property string $city 市
 * @property string $area 区
 * @property bool $if_prime 是否为默认地址
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUserAddress whereArea($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUserAddress whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUserAddress whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUserAddress whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUserAddress whereIfPrime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUserAddress whereProvince($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUserAddress whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUserAddress whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\Models\MdUser\MdUser $mdUser
 */
class MdUserAddress extends Model
{
    use BelongsToUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'province', 'city', 'area', 'if_prime'
    ];
}
