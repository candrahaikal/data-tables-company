<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseClass
 * 
 * @property int $id
 * @property int $batch
 * @property string|null $slug
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property int|null $percentage
 * @property int $quota
 * @property int $course_id
 * @property string|null $announcement
 * @property string|null $content
 * @property int|null $status_ongoing
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property Course $course
 * @property Collection|CourseClassMember[] $course_class_members
 * @property Collection|CourseClassModule[] $course_class_modules
 * @property Collection|RedeemCode[] $redeem_codes
 * @property Collection|Schedule[] $schedules
 * @property Collection|TransOrder[] $trans_orders
 * @property Collection|Transkrip[] $transkrips
 * @property Collection|UserTestimonial[] $user_testimonials
 *
 * @package App\Models
 */
class CourseClass extends Model
{
	protected $table = 'course_class';

	protected $casts = [
		'batch' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime',
		'percentage' => 'int',
		'quota' => 'int',
		'course_id' => 'int',
		'status_ongoing' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'batch',
		'slug',
		'start_date',
		'end_date',
		'percentage',
		'quota',
		'course_id',
		'announcement',
		'content',
		'status_ongoing',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function course()
	{
		return $this->belongsTo(Course::class);
	}

	public function course_class_members()
	{
		return $this->hasMany(CourseClassMember::class);
	}

	public function course_class_modules()
	{
		return $this->hasMany(CourseClassModule::class);
	}

	public function redeem_codes()
	{
		return $this->belongsToMany(RedeemCode::class)
					->withPivot('id');
	}

	public function schedules()
	{
		return $this->hasMany(Schedule::class);
	}

	public function trans_orders()
	{
		return $this->hasMany(TransOrder::class);
	}

	public function transkrips()
	{
		return $this->hasMany(Transkrip::class);
	}

	public function user_testimonials()
	{
		return $this->hasMany(UserTestimonial::class);
	}
}
