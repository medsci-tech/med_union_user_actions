<?php

namespace App\Models\MdUser;

use App\Models\Common\Traits\BelongsToHospitalTrait;
use App\Models\MdUser\Traits\BelongsToUserTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\MdUser\Doctor
 *
 * @property int $id
 * @property int $user_id 用户id
 * @property int $hospital_id 医院id
 * @property string $title 医生职称
 * @property string $office 医生科室
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\Doctor whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\Doctor whereHospitalId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\Doctor whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\Doctor whereOffice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\Doctor whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\Doctor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\MdUser\Doctor whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\Models\MdUser\MdUser $mdUser
 */
class Doctor extends Model
{
    use BelongsToUserTrait;
    use BelongsToHospitalTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'hospital_id', 'title', 'office'
    ];
}
