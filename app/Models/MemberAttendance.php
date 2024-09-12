<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MemberAttendance
 * 
 * @property int $id
 * @property int $course_class_attendance_id
 * @property int $user_id
 * @property string $feedback
 * @property Carbon|null $attended_at
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 *
 * @package App\Models
 */
class MemberAttendance extends Model
{
	protected $table = 'member_attendance';

	protected $casts = [
		'course_class_attendance_id' => 'int',
		'user_id' => 'int',
		'attended_at' => 'datetime',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'course_class_attendance_id',
		'user_id',
		'feedback',
		'attended_at',
		'description',
		'status',
		'created_id',
		'updated_id'
	];
}
