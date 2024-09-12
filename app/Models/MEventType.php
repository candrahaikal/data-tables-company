<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MEventType
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
 * @property Collection|Event[] $events
 *
 * @package App\Models
 */
class MEventType extends Model
{
	protected $table = 'm_event_type';

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

	public function events()
	{
		return $this->hasMany(Event::class);
	}
}
