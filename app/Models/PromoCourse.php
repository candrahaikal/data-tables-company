<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PromoCourse
 * 
 * @property int $course_id
 * @property int $m_promo_id
 * @property string|null $payment_link
 * 
 * @property Course $course
 * @property MPromo $m_promo
 *
 * @package App\Models
 */
class PromoCourse extends Model
{
	protected $table = 'promo_course';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'course_id' => 'int',
		'm_promo_id' => 'int'
	];

	protected $fillable = [
		'course_id',
		'm_promo_id',
		'payment_link'
	];

	public function course()
	{
		return $this->belongsTo(Course::class);
	}

	public function m_promo()
	{
		return $this->belongsTo(MPromo::class);
	}
}
