<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MAcademicPeriod
 * 
 * @property int $id
 * @property string $name
 * @property Carbon $date_start
 * @property Carbon $date_end
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property Collection|Schedule[] $schedules
 *
 * @package App\Models
 */
class MAcademicPeriod extends Model
{
	protected $table = 'm_academic_period';

	protected $casts = [
		'date_start' => 'datetime',
		'date_end' => 'datetime',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'date_start',
		'date_end',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function schedules()
	{
		return $this->hasMany(Schedule::class);
	}
}
