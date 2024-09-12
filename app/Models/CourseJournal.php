<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseJournal
 * 
 * @property int $id
 * @property int $user_id
 * @property int $course_class_module_id
 * @property int|null $course_journal_parent_id
 * @property int $level
 * @property int $priority
 * @property string|null $description
 * @property int|null $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property CourseClassModule $course_class_module
 * @property User $user
 *
 * @package App\Models
 */
class CourseJournal extends Model
{
	protected $table = 'course_journal';

	protected $casts = [
		'user_id' => 'int',
		'course_class_module_id' => 'int',
		'course_journal_parent_id' => 'int',
		'level' => 'int',
		'priority' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'course_class_module_id',
		'course_journal_parent_id',
		'level',
		'priority',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function course_class_module()
	{
		return $this->belongsTo(CourseClassModule::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
