<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MPartner
 * 
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $url
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $contact_person
 * @property string|null $logo
 * @property string|null $description
 * @property int $status
 * @property int $status_highlight
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property Collection|CoursePartner[] $course_partners
 * @property CoursePartnerCopy $course_partner_copy
 * @property Collection|PartnerUniversityDetail[] $partner_university_details
 * @property Collection|Partnership[] $partnerships
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class MPartner extends Model
{
	protected $table = 'm_partner';

	protected $casts = [
		'status' => 'int',
		'status_highlight' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'type',
		'url',
		'address',
		'phone',
		'email',
		'contact_person',
		'logo',
		'description',
		'status',
		'status_highlight',
		'created_id',
		'updated_id'
	];

	public function course_partners()
	{
		return $this->hasMany(CoursePartner::class);
	}

	public function course_partner_copy()
	{
		return $this->hasOne(CoursePartnerCopy::class);
	}

	public function partner_university_details()
	{
		return $this->hasMany(PartnerUniversityDetail::class);
	}

	public function partnerships()
	{
		return $this->hasMany(Partnership::class);
	}

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
