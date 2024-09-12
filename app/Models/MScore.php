<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MScore
 * 
 * @property int $id
 * @property string $name
 * @property int $range_start
 * @property int $range_end
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property Collection|Transkrip[] $transkrips
 *
 * @package App\Models
 */
class MScore extends Model
{
	protected $table = 'm_score';

	protected $casts = [
		'range_start' => 'int',
		'range_end' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'range_start',
		'range_end',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function transkrips()
	{
		return $this->hasMany(Transkrip::class);
	}
}
