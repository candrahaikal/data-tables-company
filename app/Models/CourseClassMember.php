<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseClassMember
 * 
 * @property int $id
 * @property int|null $daily_score
 * @property int|null $absence_score
 * @property int|null $hackathon_1_score
 * @property int|null $hackathon_2_score
 * @property int|null $internship_score
 * @property int|null $final_score
 * @property int $user_id
 * @property int $course_class_id
 * @property int|null $mentor_id
 * @property Carbon|null $expired_date
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property CourseClass $course_class
 * @property User $user
 *
 * @package App\Models
 */
class CourseClassMember extends Model
{
	protected $table = 'course_class_member';

	protected $casts = [
		'daily_score' => 'int',
		'absence_score' => 'int',
		'hackathon_1_score' => 'int',
		'hackathon_2_score' => 'int',
		'internship_score' => 'int',
		'final_score' => 'int',
		'user_id' => 'int',
		'course_class_id' => 'int',
		'mentor_id' => 'int',
		'expired_date' => 'datetime',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'daily_score',
		'absence_score',
		'hackathon_1_score',
		'hackathon_2_score',
		'internship_score',
		'final_score',
		'user_id',
		'course_class_id',
		'mentor_id',
		'expired_date',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function course_class()
	{
		return $this->belongsTo(CourseClass::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
