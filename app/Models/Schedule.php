<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Schedule
 * 
 * @property int $id
 * @property int $course_class_id
 * @property int $m_academic_period_id
 * @property int $day
 * @property string|null $location
 * @property string|null $category
 * @property Carbon $date_start
 * @property Carbon $date_end
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property CourseClass $course_class
 * @property MAcademicPeriod $m_academic_period
 *
 * @package App\Models
 */
class Schedule extends Model
{
	protected $table = 'schedule';

	protected $casts = [
		'course_class_id' => 'int',
		'm_academic_period_id' => 'int',
		'day' => 'int',
		'date_start' => 'datetime',
		'date_end' => 'datetime',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'course_class_id',
		'm_academic_period_id',
		'day',
		'location',
		'category',
		'date_start',
		'date_end',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function course_class()
	{
		return $this->belongsTo(CourseClass::class);
	}

	public function m_academic_period()
	{
		return $this->belongsTo(MAcademicPeriod::class);
	}
}
