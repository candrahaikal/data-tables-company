<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MProvince
 * 
 * @property int $id
 * @property string $name
 * @property string|null $keterangan
 * @property Carbon $created
 * @property int $created_id
 * @property Carbon $updated
 * @property int $updated_id
 * 
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class MProvince extends Model
{
	protected $table = 'm_province';
	public $timestamps = false;

	protected $casts = [
		'created' => 'datetime',
		'created_id' => 'int',
		'updated' => 'datetime',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'keterangan',
		'created',
		'created_id',
		'updated',
		'updated_id'
	];

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
