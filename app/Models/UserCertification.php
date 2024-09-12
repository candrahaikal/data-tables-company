<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserCertification
 * 
 * @property int $id
 * @property string $name
 * @property string $company
 * @property string|null $id_credential
 * @property string|null $url_credential
 * @property Carbon|null $start_date
 * @property Carbon|null $end_date
 * @property int $user_id
 * @property string|null $description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class UserCertification extends Model
{
	protected $table = 'user_certification';

	protected $casts = [
		'start_date' => 'datetime',
		'end_date' => 'datetime',
		'user_id' => 'int'
	];

	protected $fillable = [
		'name',
		'company',
		'id_credential',
		'url_credential',
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
