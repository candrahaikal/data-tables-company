<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Transkrip
 * 
 * @property int $id
 * @property int $user_id
 * @property int $course_class_id
 * @property int|null $m_score_id
 * @property string|null $description
 * @property int|null $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property CourseClass $course_class
 * @property MScore|null $m_score
 * @property User $user
 *
 * @package App\Models
 */
class Transkrip extends Model
{
	protected $table = 'transkrip';

	protected $casts = [
		'user_id' => 'int',
		'course_class_id' => 'int',
		'm_score_id' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'course_class_id',
		'm_score_id',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function course_class()
	{
		return $this->belongsTo(CourseClass::class);
	}

	public function m_score()
	{
		return $this->belongsTo(MScore::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
