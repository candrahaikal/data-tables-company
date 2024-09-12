<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MBank
 * 
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property Collection|MBankAccount[] $m_bank_accounts
 *
 * @package App\Models
 */
class MBank extends Model
{
	protected $table = 'm_bank';

	protected $casts = [
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'code',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function m_bank_accounts()
	{
		return $this->hasMany(MBankAccount::class);
	}
}
