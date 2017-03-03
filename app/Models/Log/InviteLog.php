<?php

namespace App\Models\Log;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Log\InviteLog
 *
 * @property int $id
 * @property int $supper_user_id 父用户id
 * @property int $sub_user_id 子用户id
 * @property int $application_id 项目id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\InviteLog whereApplicationId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\InviteLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\InviteLog whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\InviteLog whereSubUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\InviteLog whereSupperUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\InviteLog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class InviteLog extends Model
{
    //
}
