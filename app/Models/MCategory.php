<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MCategory
 * 
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int|null $created_id
 * @property Carbon $updated_at
 * @property int|null $updated_id
 *
 * @package App\Models
 */
class MCategory extends Model
{
	protected $table = 'm_category';

	protected $casts = [
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'slug',
		'description',
		'status',
		'created_id',
		'updated_id'
	];
}
