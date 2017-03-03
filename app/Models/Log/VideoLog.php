<?php

namespace App\Models\Log;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Log\VideoLog
 *
 * @property int $id
 * @property int $user_id 用户id
 * @property int $application_id 项目id
 * @property string $video_name 视频名字
 * @property string $video_labels 视频标签, 可能含多个
 * @property string $video_abstract 视频摘要
 * @property string $time_start 视频播放开始时间
 * @property float $time_span 视频播放长度, 分钟单位
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\VideoLog whereApplicationId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\VideoLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\VideoLog whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\VideoLog whereTimeSpan($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\VideoLog whereTimeStart($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\VideoLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\VideoLog whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\VideoLog whereVideoAbstract($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\VideoLog whereVideoLabels($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Log\VideoLog whereVideoName($value)
 * @mixin \Eloquent
 */
class VideoLog extends Model
{
    //
}
