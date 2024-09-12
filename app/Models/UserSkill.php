<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserSkill
 * 
 * @property int $id
 * @property int $m_skill_id
 * @property int $user_id
 * @property string|null $description
 * @property bool|null $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User $user
 * @property MSkill $m_skill
 *
 * @package App\Models
 */
class UserSkill extends Model
{
	protected $table = 'user_skill';

	protected $casts = [
		'm_skill_id' => 'int',
		'user_id' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'm_skill_id',
		'user_id',
		'description',
		'status'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function m_skill()
	{
		return $this->belongsTo(MSkill::class);
	}
}
