<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EventRequirement
 * 
 * @property int $id
 * @property int $event_id
 * @property string $name
 * @property string|null $description
 * @property int $status
 * @property int $is_upload
 * @property int $is_required
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property Event $event
 * @property Collection|EventParticipantRequirement[] $event_participant_requirements
 *
 * @package App\Models
 */
class EventRequirement extends Model
{
	protected $table = 'event_requirement';

	protected $casts = [
		'event_id' => 'int',
		'status' => 'int',
		'is_upload' => 'int',
		'is_required' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'event_id',
		'name',
		'description',
		'status',
		'is_upload',
		'is_required',
		'created_id',
		'updated_id'
	];

	public function event()
	{
		return $this->belongsTo(Event::class);
	}

	public function event_participant_requirements()
	{
		return $this->hasMany(EventParticipantRequirement::class);
	}
}
