<?php

namespace App\Models\Log;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Log\BasicLog
 *
 * @property int $id
 * @property int $user_id 用户id
 * @property int $application_id 项目id
 * @property string $action_label 行为 : 注册, 登陆
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\BasicLog whereActionLabel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\BasicLog whereApplicationId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\BasicLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\BasicLog whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\BasicLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\BasicLog whereUserId($value)
 * @mixin \Eloquent
 */
class BasicLog extends Model
{
    //
}
