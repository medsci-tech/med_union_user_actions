<?php

namespace App\Models\Application;

use App\Models\Common\Traits\BelongsToManyHospitalsTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Application\Application
 *
 * @property int $id
 * @property string $name_en 项目名
 * @property string $name_ch 项目名
 * @property string $start_time 项目开始时间
 * @property string $end_time 项目结束时间
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\Application whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\Application whereEndTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\Application whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\Application whereNameCh($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\Application whereNameEn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\Application whereStartTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application\Application whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Application extends Model
{
    use BelongsToManyHospitalsTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_en', 'name_ch', 'start_time', 'end_time'
    ];
}
