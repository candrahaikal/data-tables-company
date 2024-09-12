<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AccessMaster
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
 *
 * @package App\Models
 */
class AccessMaster extends Model
{
	protected $table = 'access_master';

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
}
