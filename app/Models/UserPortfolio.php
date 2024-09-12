<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserPortfolio
 * 
 * @property int $id
 * @property string $name
 * @property string|null $url_portfolio
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property int $user_id
 * @property string|null $description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class UserPortfolio extends Model
{
	protected $table = 'user_portfolio';

	protected $casts = [
		'start_date' => 'datetime',
		'end_date' => 'datetime',
		'user_id' => 'int'
	];

	protected $fillable = [
		'name',
		'url_portfolio',
		'start_date',
		'end_date',
		'user_id',
		'description'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
