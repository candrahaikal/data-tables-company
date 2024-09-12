<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoursePackageBenefit
 * 
 * @property int $id
 * @property string $name
 * @property int $course_package_id
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property CoursePackage $course_package
 *
 * @package App\Models
 */
class CoursePackageBenefit extends Model
{
	protected $table = 'course_package_benefit';

	protected $casts = [
		'course_package_id' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'course_package_id',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function course_package()
	{
		return $this->belongsTo(CoursePackage::class);
	}
}
