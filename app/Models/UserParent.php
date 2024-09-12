<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserParent
 * 
 * @property int $id
 * @property string $name
 * @property string|null $phone
 * @property string|null $job
 * @property string|null $address
 * @property int $user_id
 * @property string|null $description
 * @property string $type
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class UserParent extends Model
{
	protected $table = 'user_parent';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'name',
		'phone',
		'job',
		'address',
		'user_id',
		'description',
		'type'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
