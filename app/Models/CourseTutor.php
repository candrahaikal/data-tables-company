<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseTutor
 * 
 * @property int $course_id
 * @property int $users_id
 * 
 * @property Course $course
 * @property User $user
 *
 * @package App\Models
 */
class CourseTutor extends Model
{
	protected $table = 'course_tutor';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'course_id' => 'int',
		'users_id' => 'int'
	];

	protected $fillable = [
		'course_id',
		'users_id'
	];

	public function course()
	{
		return $this->belongsTo(Course::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id');
	}
}
