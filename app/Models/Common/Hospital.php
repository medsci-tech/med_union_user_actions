<?php

namespace App\Models\Common;

use App\Models\Application\Traits\BelongsToManyApplicationsTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Common\Hospital
 *
 * @property int $id
 * @property string $name 医院名字
 * @property string $type 医院类型
 * @property string $province 省
 * @property string $city 市
 * @property string $area 区
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Common\Hospital whereArea($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Common\Hospital whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Common\Hospital whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Common\Hospital whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Common\Hospital whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Common\Hospital whereProvince($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Common\Hospital whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Common\Hospital whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Application\Application[] $applications
 */
class Hospital extends Model
{
    use BelongsToManyApplicationsTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'type', 'province', 'city', 'area'
    ];
}
