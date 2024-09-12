<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MLanguage
 * 
 * @property int $id
 * @property string $code
 * @property string $name
 * 
 * @property Collection|UserLanguage[] $user_languages
 *
 * @package App\Models
 */
class MLanguage extends Model
{
	protected $table = 'm_language';
	public $timestamps = false;

	protected $fillable = [
		'code',
		'name'
	];

	public function user_languages()
	{
		return $this->hasMany(UserLanguage::class);
	}
}
