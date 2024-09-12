<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoursePackage
 * 
 * @property int $id
 * @property string $name
 * @property int|null $fake_price
 * @property float $price
 * @property string|null $payment_link
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property Collection|Course[] $courses
 * @property Collection|CoursePackageBenefit[] $course_package_benefits
 * @property Collection|TransOrder[] $trans_orders
 *
 * @package App\Models
 */
class CoursePackage extends Model
{
	protected $table = 'course_package';

	protected $casts = [
		'fake_price' => 'int',
		'price' => 'float',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'fake_price',
		'price',
		'payment_link',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function courses()
	{
		return $this->hasMany(Course::class);
	}

	public function course_package_benefits()
	{
		return $this->hasMany(CoursePackageBenefit::class);
	}

	public function trans_orders()
	{
		return $this->hasMany(TransOrder::class);
	}
}
