<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseClassMemberGrading
 * 
 * @property int $id
 * @property string|null $submitted_file
 * @property string|null $js
 * @property string|null $html
 * @property string|null $python
 * @property string|null $python_input
 * @property string|null $php
 * @property string|null $comment
 * @property int $user_id
 * @property int $course_class_module_id
 * @property string|null $description
 * @property string|null $package_type
 * @property string|null $paket_soal
 * @property int|null $grade
 * @property int|null $max_grade
 * @property Carbon|null $graded_at
 * @property int|null $tutor_id
 * @property string|null $tutor_comment
 * @property Carbon|null $submitted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User|null $user
 * @property CourseClassModule $course_class_module
 *
 * @package App\Models
 */
class CourseClassMemberGrading extends Model
{
	protected $table = 'course_class_member_grading';

	protected $casts = [
		'user_id' => 'int',
		'course_class_module_id' => 'int',
		'grade' => 'int',
		'max_grade' => 'int',
		'graded_at' => 'datetime',
		'tutor_id' => 'int',
		'submitted_at' => 'datetime'
	];

	protected $fillable = [
		'submitted_file',
		'js',
		'html',
		'python',
		'python_input',
		'php',
		'comment',
		'user_id',
		'course_class_module_id',
		'description',
		'package_type',
		'paket_soal',
		'grade',
		'max_grade',
		'graded_at',
		'tutor_id',
		'tutor_comment',
		'submitted_at'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'tutor_id');
	}

	public function course_class_module()
	{
		return $this->belongsTo(CourseClassModule::class);
	}
}
