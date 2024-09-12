<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserOrganization
 * 
 * @property int $id
 * @property string $name
 * @property string $position
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property int $user_id
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class UserOrganization extends Model
{
	protected $table = 'user_organization';

	protected $casts = [
		'start_date' => 'datetime',
		'end_date' => 'datetime',
		'user_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'position',
		'start_date',
		'end_date',
		'user_id',
		'description',
		'status'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
