<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseModuleDiscussion
 * 
 * @property int $id
 * @property string $name
 * @property int $level
 * @property int $user_id
 * @property int $course_module_id
 * @property string|null $content
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property CourseModule $course_module
 *
 * @package App\Models
 */
class CourseModuleDiscussion extends Model
{
	protected $table = 'course_module_discussion';

	protected $casts = [
		'level' => 'int',
		'user_id' => 'int',
		'course_module_id' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'level',
		'user_id',
		'course_module_id',
		'content',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function course_module()
	{
		return $this->belongsTo(CourseModule::class);
	}
}
