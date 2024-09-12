<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 * 
 * @property int $id
 * @property int $m_event_type_id
 * @property string $name
 * @property Carbon $date_start
 * @property Carbon $date_end
 * @property string|null $image
 * @property string|null $url
 * @property int $is_need_verification
 * @property int $is_public
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property MEventType $m_event_type
 * @property Collection|EventParticipant[] $event_participants
 * @property Collection|EventRequirement[] $event_requirements
 *
 * @package App\Models
 */
class Event extends Model
{
	protected $table = 'event';

	protected $casts = [
		'm_event_type_id' => 'int',
		'date_start' => 'datetime',
		'date_end' => 'datetime',
		'is_need_verification' => 'int',
		'is_public' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'm_event_type_id',
		'name',
		'date_start',
		'date_end',
		'image',
		'url',
		'is_need_verification',
		'is_public',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function m_event_type()
	{
		return $this->belongsTo(MEventType::class);
	}

	public function event_participants()
	{
		return $this->hasMany(EventParticipant::class);
	}

	public function event_requirements()
	{
		return $this->hasMany(EventRequirement::class);
	}
}
