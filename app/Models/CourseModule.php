<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseModule
 * 
 * @property int $id
 * @property string $name
 * @property string|null $slug
 * @property string|null $html
 * @property string|null $js
 * @property int $priority
 * @property int $level
 * @property int $course_id
 * @property int|null $course_module_parent_id
 * @property int|null $day
 * @property string|null $type
 * @property string|null $material
 * @property int|null $duration
 * @property string|null $content
 * @property string|null $thumbnail
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property Course $course
 * @property Collection|CourseClassModule[] $course_class_modules
 * @property Collection|CourseModuleDiscussion[] $course_module_discussions
 *
 * @package App\Models
 */
class CourseModule extends Model
{
	protected $table = 'course_module';

	protected $casts = [
		'priority' => 'int',
		'level' => 'int',
		'course_id' => 'int',
		'course_module_parent_id' => 'int',
		'day' => 'int',
		'duration' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'slug',
		'html',
		'js',
		'priority',
		'level',
		'course_id',
		'course_module_parent_id',
		'day',
		'type',
		'material',
		'duration',
		'content',
		'thumbnail',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function course()
	{
		return $this->belongsTo(Course::class);
	}

	public function course_class_modules()
	{
		return $this->hasMany(CourseClassModule::class);
	}

	public function course_module_discussions()
	{
		return $this->hasMany(CourseModuleDiscussion::class);
	}
}
