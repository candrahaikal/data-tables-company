<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseClassMemberLog
 * 
 * @property int $id
 * @property int $user_id
 * @property int|null $course_class_module_id
 * @property string $log_type
 * @property int|null $status_log
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property CourseClassModule|null $course_class_module
 * @property User $user
 *
 * @package App\Models
 */
class CourseClassMemberLog extends Model
{
	protected $table = 'course_class_member_log';

	protected $casts = [
		'user_id' => 'int',
		'course_class_module_id' => 'int',
		'status_log' => 'int'
	];

	protected $fillable = [
		'user_id',
		'course_class_module_id',
		'log_type',
		'status_log'
	];

	public function course_class_module()
	{
		return $this->belongsTo(CourseClassModule::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
