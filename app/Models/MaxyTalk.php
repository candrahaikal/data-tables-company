<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MaxyTalk
 * 
 * @property int $id
 * @property string $name
 * @property string|null $img
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property string|null $register_link
 * @property int $priority
 * @property int $users_id
 * @property int|null $maxy_talk_parent_id
 * @property string|null $content
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property User $user
 *
 * @package App\Models
 */
class MaxyTalk extends Model
{
	protected $table = 'maxy_talk';

	protected $casts = [
		'start_date' => 'datetime',
		'end_date' => 'datetime',
		'priority' => 'int',
		'users_id' => 'int',
		'maxy_talk_parent_id' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'img',
		'start_date',
		'end_date',
		'register_link',
		'priority',
		'users_id',
		'maxy_talk_parent_id',
		'content',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id');
	}
}
