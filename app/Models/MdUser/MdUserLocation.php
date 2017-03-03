<?php

namespace App\Models\MdUser;

use App\Models\MdUser\Traits\BelongsToUserTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\MdUser\MdUserLocation
 *
 * @property int $id
 * @property int $user_id 用户id
 * @property float $latitude 经度
 * @property float $longitude 纬度
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUserLocation whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUserLocation whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUserLocation whereLatitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUserLocation whereLongitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUserLocation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\MdUserLocation whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\Models\MdUser\MdUser $mdUser
 */
class MdUserLocation extends Model
{
    use BelongsToUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'latitude', 'longitude'
    ];
}
