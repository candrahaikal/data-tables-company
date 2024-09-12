<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserTestimonial
 * 
 * @property int $id
 * @property int $stars
 * @property string|null $role
 * @property int $status_highlight
 * @property int $user_id
 * @property int $course_class_id
 * @property string $content
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
class UserTestimonial extends Model
{
	protected $table = 'user_testimonial';

	protected $casts = [
		'stars' => 'int',
		'status_highlight' => 'int',
		'user_id' => 'int',
		'course_class_id' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'stars',
		'role',
		'status_highlight',
		'user_id',
		'course_class_id',
		'content',
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
