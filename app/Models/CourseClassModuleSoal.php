<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseClassModuleSoal
 * 
 * @property int $id
 * @property int $m_bank_soal_id
 * @property int $course_class_module_id
 *
 * @package App\Models
 */
class CourseClassModuleSoal extends Model
{
	protected $table = 'course_class_module_soal';
	public $timestamps = false;

	protected $casts = [
		'm_bank_soal_id' => 'int',
		'course_class_module_id' => 'int'
	];

	protected $fillable = [
		'm_bank_soal_id',
		'course_class_module_id'
	];
}
