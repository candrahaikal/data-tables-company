<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MCourseType
 * 
 * @property int $id
 * @property string $name
 * @property string|null $slug
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property Collection|CertificateTemplate[] $certificate_templates
 * @property Collection|Course[] $courses
 *
 * @package App\Models
 */
class MCourseType extends Model
{
	protected $table = 'm_course_type';

	protected $casts = [
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'slug',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function certificate_templates()
	{
		return $this->hasMany(CertificateTemplate::class);
	}

	public function courses()
	{
		return $this->hasMany(Course::class);
	}
}
