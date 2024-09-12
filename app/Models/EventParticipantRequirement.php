<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EventParticipantRequirement
 * 
 * @property int $id
 * @property int $user_id
 * @property int $event_requirement_id
 * @property string $value
 * @property string|null $description
 * @property int $status
 * @property Carbon|null $created_at
 * @property int $created_id
 * @property Carbon|null $updated_at
 * @property int $updated_id
 * 
 * @property EventRequirement $event_requirement
 * @property User $user
 *
 * @package App\Models
 */
class EventParticipantRequirement extends Model
{
	protected $table = 'event_participant_requirement';

	protected $casts = [
		'user_id' => 'int',
		'event_requirement_id' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'event_requirement_id',
		'value',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function event_requirement()
	{
		return $this->belongsTo(EventRequirement::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
