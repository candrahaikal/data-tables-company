<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MPartnershipType
 * 
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $status
 * @property Carbon|null $created_at
 * @property int $created_id
 * @property Carbon|null $updated_at
 * @property int $updated_id
 * 
 * @property Collection|Partnership[] $partnerships
 *
 * @package App\Models
 */
class MPartnershipType extends Model
{
	protected $table = 'm_partnership_type';

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

	public function partnerships()
	{
		return $this->hasMany(Partnership::class);
	}
}
