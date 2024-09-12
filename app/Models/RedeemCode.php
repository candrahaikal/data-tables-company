<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RedeemCode
 * 
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int $quota
 * @property string|null $description
 * @property string $type
 * @property int $status
 * @property Carbon $created_at
 * @property int|null $created_id
 * @property Carbon $updated_at
 * @property int|null $updated_id
 * 
 * @property User|null $user
 * @property Collection|CourseClass[] $course_classes
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class RedeemCode extends Model
{
	protected $table = 'redeem_code';

	protected $casts = [
		'quota' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'code',
		'quota',
		'description',
		'type',
		'status',
		'created_id',
		'updated_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'updated_id');
	}

	public function course_classes()
	{
		return $this->belongsToMany(CourseClass::class)
					->withPivot('id');
	}

	public function users()
	{
		return $this->belongsToMany(User::class, 'user_redeem_code')
					->withPivot('id', 'is_used')
					->withTimestamps();
	}
}
