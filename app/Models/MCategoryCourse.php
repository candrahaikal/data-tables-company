<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MCategoryCourse
 * 
 * @property int $id
 * @property string $name
 * @property string|null $slug
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property Collection|CourseCategory[] $course_categories
 *
 * @package App\Models
 */
class MCategoryCourse extends Model
{
	protected $table = 'm_category_course';

	protected $casts = [
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'slug',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function course_categories()
	{
		return $this->hasMany(CourseCategory::class, 'category_id');
	}
}
