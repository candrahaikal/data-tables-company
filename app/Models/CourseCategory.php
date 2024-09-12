<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseCategory
 * 
 * @property int $id
 * @property int $category_id
 * @property int $course_id
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property Course $course
 * @property MCategoryCourse $m_category_course
 *
 * @package App\Models
 */
class CourseCategory extends Model
{
	protected $table = 'course_category';

	protected $casts = [
		'category_id' => 'int',
		'course_id' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'category_id',
		'course_id',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function course()
	{
		return $this->belongsTo(Course::class);
	}

	public function m_category_course()
	{
		return $this->belongsTo(MCategoryCourse::class, 'category_id');
	}
}
