<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TransOrder
 * 
 * @property int $id
 * @property string $order_number
 * @property Carbon $date
 * @property float $total
 * @property float|null $discount
 * @property float $total_after_discount
 * @property int $payment_status
 * @property int|null $course_id
 * @property int|null $course_class_id
 * @property int $user_id
 * @property int|null $course_package_id
 * @property int|null $m_promo_id
 * @property Carbon|null $forced_at
 * @property string|null $forced_comment
 * @property int|null $user_forced_id
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property CourseClass|null $course_class
 * @property CoursePackage|null $course_package
 * @property Course|null $course
 * @property MPromo|null $m_promo
 * @property User $user
 * @property Collection|TransOrderConfirm[] $trans_order_confirms
 *
 * @package App\Models
 */
class TransOrder extends Model
{
	protected $table = 'trans_order';

	protected $casts = [
		'date' => 'datetime',
		'total' => 'float',
		'discount' => 'float',
		'total_after_discount' => 'float',
		'payment_status' => 'int',
		'course_id' => 'int',
		'course_class_id' => 'int',
		'user_id' => 'int',
		'course_package_id' => 'int',
		'm_promo_id' => 'int',
		'forced_at' => 'datetime',
		'user_forced_id' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'order_number',
		'date',
		'total',
		'discount',
		'total_after_discount',
		'payment_status',
		'course_id',
		'course_class_id',
		'user_id',
		'course_package_id',
		'm_promo_id',
		'forced_at',
		'forced_comment',
		'user_forced_id',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function course_class()
	{
		return $this->belongsTo(CourseClass::class);
	}

	public function course_package()
	{
		return $this->belongsTo(CoursePackage::class);
	}

	public function course()
	{
		return $this->belongsTo(Course::class);
	}

	public function m_promo()
	{
		return $this->belongsTo(MPromo::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function trans_order_confirms()
	{
		return $this->hasMany(TransOrderConfirm::class);
	}
}
