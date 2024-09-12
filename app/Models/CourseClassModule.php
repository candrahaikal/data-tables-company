<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseClassModule
 * 
 * @property int $id
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property int $priority
 * @property int $level
 * @property int|null $percentage
 * @property int $course_module_id
 * @property int $course_class_id
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property CourseClass $course_class
 * @property CourseModule $course_module
 * @property Collection|CourseClassMemberGrading[] $course_class_member_gradings
 * @property Collection|CourseClassMemberLog[] $course_class_member_logs
 * @property Collection|CourseJournal[] $course_journals
 *
 * @package App\Models
 */
class CourseClassModule extends Model
{
	protected $table = 'course_class_module';

	protected $casts = [
		'start_date' => 'datetime',
		'end_date' => 'datetime',
		'priority' => 'int',
		'level' => 'int',
		'percentage' => 'int',
		'course_module_id' => 'int',
		'course_class_id' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'start_date',
		'end_date',
		'priority',
		'level',
		'percentage',
		'course_module_id',
		'course_class_id',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function course_class()
	{
		return $this->belongsTo(CourseClass::class);
	}

	public function course_module()
	{
		return $this->belongsTo(CourseModule::class);
	}

	public function course_class_member_gradings()
	{
		return $this->hasMany(CourseClassMemberGrading::class);
	}

	public function course_class_member_logs()
	{
		return $this->hasMany(CourseClassMemberLog::class);
	}

	public function course_journals()
	{
		return $this->hasMany(CourseJournal::class);
	}
}
