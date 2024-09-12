<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserResume
 * 
 * @property int $id
 * @property string $url_resume
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class UserResume extends Model
{
	protected $table = 'user_resume';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'url_resume',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
