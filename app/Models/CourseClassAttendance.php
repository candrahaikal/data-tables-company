<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseClassAttendance
 * 
 * @property int $id
 * @property string $name
 * @property int $course_class_module_id
 * @property string $question
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 *
 * @package App\Models
 */
class CourseClassAttendance extends Model
{
	protected $table = 'course_class_attendance';

	protected $casts = [
		'course_class_module_id' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'course_class_module_id',
		'question',
		'description',
		'status',
		'created_id',
		'updated_id'
	];
}
