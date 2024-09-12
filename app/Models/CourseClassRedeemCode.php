<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseClassRedeemCode
 * 
 * @property int $id
 * @property int $redeem_code_id
 * @property int $course_class_id
 * 
 * @property RedeemCode $redeem_code
 * @property CourseClass $course_class
 *
 * @package App\Models
 */
class CourseClassRedeemCode extends Model
{
	protected $table = 'course_class_redeem_code';
	public $timestamps = false;

	protected $casts = [
		'redeem_code_id' => 'int',
		'course_class_id' => 'int'
	];

	protected $fillable = [
		'redeem_code_id',
		'course_class_id'
	];

	public function redeem_code()
	{
		return $this->belongsTo(RedeemCode::class);
	}

	public function course_class()
	{
		return $this->belongsTo(CourseClass::class);
	}
}
