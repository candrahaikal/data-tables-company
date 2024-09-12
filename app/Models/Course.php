<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Course
 * 
 * @property int $id
 * @property string $name
 * @property int|null $fake_price
 * @property int|null $price
 * @property string $short_description
 * @property string $image
 * @property string|null $preview
 * @property string|null $target
 * @property string $payment_link
 * @property string $slug
 * @property int $m_course_type_id
 * @property int|null $course_package_id
 * @property int $m_difficulty_type_id
 * @property int $m_category_id
 * @property string|null $content
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property CoursePackage|null $course_package
 * @property MCourseType $m_course_type
 * @property MDifficultyType $m_difficulty_type
 * @property Collection|CourseCategory[] $course_categories
 * @property Collection|CourseClass[] $course_classes
 * @property Collection|CourseModule[] $course_modules
 * @property Collection|CoursePartner[] $course_partners
 * @property CoursePartnerCopy $course_partner_copy
 * @property CourseTutor $course_tutor
 * @property PromoCourse $promo_course
 * @property Collection|TransOrder[] $trans_orders
 * @property Collection|TransOrderConfirm[] $trans_order_confirms
 *
 * @package App\Models
 */
class Course extends Model
{
	protected $table = 'course';

	protected $casts = [
		'fake_price' => 'int',
		'price' => 'int',
		'm_course_type_id' => 'int',
		'course_package_id' => 'int',
		'm_difficulty_type_id' => 'int',
		'm_category_id' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'fake_price',
		'price',
		'short_description',
		'image',
		'preview',
		'target',
		'payment_link',
		'slug',
		'm_course_type_id',
		'course_package_id',
		'm_difficulty_type_id',
		'm_category_id',
		'content',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function course_package()
	{
		return $this->belongsTo(CoursePackage::class);
	}

	public function m_course_type()
	{
		return $this->belongsTo(MCourseType::class);
	}

	public function m_difficulty_type()
	{
		return $this->belongsTo(MDifficultyType::class);
	}

	public function course_categories()
	{
		return $this->hasMany(CourseCategory::class);
	}

	public function course_classes()
	{
		return $this->hasMany(CourseClass::class);
	}

	public function course_modules()
	{
		return $this->hasMany(CourseModule::class);
	}

	public function course_partners()
	{
		return $this->hasMany(CoursePartner::class);
	}

	public function course_partner_copy()
	{
		return $this->hasOne(CoursePartnerCopy::class);
	}

	public function course_tutor()
	{
		return $this->hasOne(CourseTutor::class);
	}

	public function promo_course()
	{
		return $this->hasOne(PromoCourse::class);
	}

	public function trans_orders()
	{
		return $this->hasMany(TransOrder::class);
	}

	public function trans_order_confirms()
	{
		return $this->hasMany(TransOrderConfirm::class);
	}
}
