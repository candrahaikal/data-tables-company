<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MSkill
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property int|null $created_id
 * @property Carbon|null $updated_at
 * @property int|null $updated_id
 * 
 * @property User|null $user
 * @property Collection|UserSkill[] $user_skills
 *
 * @package App\Models
 */
class MSkill extends Model
{
	protected $table = 'm_skill';

	protected $casts = [
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'created_id',
		'updated_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'updated_id');
	}

	public function user_skills()
	{
		return $this->hasMany(UserSkill::class);
	}
}
