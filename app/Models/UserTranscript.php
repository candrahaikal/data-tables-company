<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserTranscript
 * 
 * @property int $id
 * @property string $name
 * @property string $score
 * @property int $user_id
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
class UserTranscript extends Model
{
	protected $table = 'user_transcript';

	protected $casts = [
		'user_id' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'score',
		'user_id',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
