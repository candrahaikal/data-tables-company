<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserRedeemCode
 * 
 * @property int $id
 * @property int $user_id
 * @property int $redeem_code_id
 * @property bool $is_used
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property RedeemCode $redeem_code
 * @property User $user
 *
 * @package App\Models
 */
class UserRedeemCode extends Model
{
	protected $table = 'user_redeem_code';

	protected $casts = [
		'user_id' => 'int',
		'redeem_code_id' => 'int',
		'is_used' => 'bool'
	];

	protected $fillable = [
		'user_id',
		'redeem_code_id',
		'is_used'
	];

	public function redeem_code()
	{
		return $this->belongsTo(RedeemCode::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
