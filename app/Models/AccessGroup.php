<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AccessGroup
 * 
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property AccessGroupDetail $access_group_detail
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class AccessGroup extends Model
{
	protected $table = 'access_group';

	protected $casts = [
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function access_group_detail()
	{
		return $this->hasOne(AccessGroupDetail::class);
	}

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
