<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserEducation
 * 
 * @property int $id
 * @property string $name
 * @property string|null $degree
 * @property string|null $fields_of_study
 * @property string|null $score
 * @property Carbon|null $start_date
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
class UserEducation extends Model
{
	protected $table = 'user_education';

	protected $casts = [
		'start_date' => 'datetime',
		'end_date' => 'datetime',
		'user_id' => 'int'
	];

	protected $fillable = [
		'name',
		'degree',
		'fields_of_study',
		'score',
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
