<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MCarousel
 * 
 * @property int $id
 * @property string $name
 * @property string $short_desc
 * @property Carbon $date
 * @property string $image
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 *
 * @package App\Models
 */
class MCarousel extends Model
{
	protected $table = 'm_carousel';

	protected $casts = [
		'date' => 'datetime',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'short_desc',
		'date',
		'image',
		'description',
		'status',
		'created_id',
		'updated_id'
	];
}
