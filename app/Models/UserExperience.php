<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserExperience
 * 
 * @property int $id
 * @property string $name
 * @property string $job_type
 * @property string $company
 * @property string $industry
 * @property string $location
 * @property Carbon $start_date
 * @property Carbon|null $end_date
 * @property int $user_id
 * @property string|null $description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class UserExperience extends Model
{
	protected $table = 'user_experience';

	protected $casts = [
		'start_date' => 'datetime',
		'end_date' => 'datetime',
		'user_id' => 'int'
	];

	protected $fillable = [
		'name',
		'job_type',
		'company',
		'industry',
		'location',
		'start_date',
		'end_date',
		'user_id',
		'description'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
