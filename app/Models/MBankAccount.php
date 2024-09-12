<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MBankAccount
 * 
 * @property int $id
 * @property string $account_name
 * @property string $account_number
 * @property int $m_bank_id
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property MBank $m_bank
 * @property Collection|TransOrderConfirm[] $trans_order_confirms
 *
 * @package App\Models
 */
class MBankAccount extends Model
{
	protected $table = 'm_bank_account';

	protected $casts = [
		'm_bank_id' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'account_name',
		'account_number',
		'm_bank_id',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function m_bank()
	{
		return $this->belongsTo(MBank::class);
	}

	public function trans_order_confirms()
	{
		return $this->hasMany(TransOrderConfirm::class);
	}
}
