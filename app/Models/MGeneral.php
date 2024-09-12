<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MGeneral
 * 
 * @property int $id
 * @property string $name
 * @property string|null $value
 * @property string|null $description
 * @property int $status
 * @property Carbon|null $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 *
 * @package App\Models
 */
class MGeneral extends Model
{
	protected $table = 'm_general';

	protected $casts = [
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'value',
		'description',
		'status',
		'created_id',
		'updated_id'
	];
}
