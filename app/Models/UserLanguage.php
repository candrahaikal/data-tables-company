<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserLanguage
 * 
 * @property int $id
 * @property int $m_language_id
 * @property string|null $proficiency
 * @property int $user_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property MLanguage $m_language
 * @property User $user
 *
 * @package App\Models
 */
class UserLanguage extends Model
{
	protected $table = 'user_language';

	protected $casts = [
		'm_language_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'm_language_id',
		'proficiency',
		'user_id'
	];

	public function m_language()
	{
		return $this->belongsTo(MLanguage::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
