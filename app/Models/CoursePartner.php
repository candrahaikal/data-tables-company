<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoursePartner
 * 
 * @property int $course_id
 * @property int $m_partner_id
 * 
 * @property MPartner $m_partner
 * @property Course $course
 *
 * @package App\Models
 */
class CoursePartner extends Model
{
	protected $table = 'course_partner';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'course_id' => 'int',
		'm_partner_id' => 'int'
	];

	public function m_partner()
	{
		return $this->belongsTo(MPartner::class);
	}

	public function course()
	{
		return $this->belongsTo(Course::class);
	}
}
