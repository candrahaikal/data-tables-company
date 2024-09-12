<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EventParticipant
 * 
 * @property int $id
 * @property int $user_id
 * @property int $event_id
 * @property string|null $image
 * @property int|null $recommend
 * @property string|null $description
 * @property int $status
 * @property Carbon|null $created_at
 * @property int $created_id
 * @property Carbon|null $updated_at
 * @property int $updated_id
 * 
 * @property Event $event
 * @property User $user
 *
 * @package App\Models
 */
class EventParticipant extends Model
{
	protected $table = 'event_participant';

	protected $casts = [
		'user_id' => 'int',
		'event_id' => 'int',
		'recommend' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'event_id',
		'image',
		'recommend',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function event()
	{
		return $this->belongsTo(Event::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
