<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TransOrderConfirm
 * 
 * @property int $id
 * @property string $order_confirm_number
 * @property Carbon $date
 * @property string|null $sender_account_name
 * @property string|null $sender_account_number
 * @property int|null $sender_bank
 * @property float $amount
 * @property string|null $image
 * @property Carbon|null $verified_at
 * @property string|null $verified_comment
 * @property int|null $verified_id
 * @property int $trans_order_id
 * @property int $m_bank_account_id
 * @property int $course_id
 * @property int|null $course_class_id
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property Course $course
 * @property MBankAccount $m_bank_account
 * @property TransOrder $trans_order
 *
 * @package App\Models
 */
class TransOrderConfirm extends Model
{
	protected $table = 'trans_order_confirm';

	protected $casts = [
		'date' => 'datetime',
		'sender_bank' => 'int',
		'amount' => 'float',
		'verified_at' => 'datetime',
		'verified_id' => 'int',
		'trans_order_id' => 'int',
		'm_bank_account_id' => 'int',
		'course_id' => 'int',
		'course_class_id' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'order_confirm_number',
		'date',
		'sender_account_name',
		'sender_account_number',
		'sender_bank',
		'amount',
		'image',
		'verified_at',
		'verified_comment',
		'verified_id',
		'trans_order_id',
		'm_bank_account_id',
		'course_id',
		'course_class_id',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function course()
	{
		return $this->belongsTo(Course::class);
	}

	public function m_bank_account()
	{
		return $this->belongsTo(MBankAccount::class);
	}

	public function trans_order()
	{
		return $this->belongsTo(TransOrder::class);
	}
}
