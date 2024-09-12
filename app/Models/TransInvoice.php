<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TransInvoice
 * 
 * @property int $id
 * @property string|null $external_id
 * @property string|null $payment_method
 * @property string|null $payment_channel
 * @property string|null $merchant_name
 * @property int|null $amount
 * @property int|null $paid_amount
 * @property string|null $currency
 * @property string|null $payer_email
 * @property string|null $payment_destination
 * @property Carbon|null $paid_at
 * @property string|null $description
 * @property int $status
 * @property Carbon|null $created_at
 * @property int|null $created_id
 * @property Carbon|null $updated_at
 * @property int|null $updated_id
 *
 * @package App\Models
 */
class TransInvoice extends Model
{
	protected $table = 'trans_invoice';

	protected $casts = [
		'amount' => 'int',
		'paid_amount' => 'int',
		'paid_at' => 'datetime',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'external_id',
		'payment_method',
		'payment_channel',
		'merchant_name',
		'amount',
		'paid_amount',
		'currency',
		'payer_email',
		'payment_destination',
		'paid_at',
		'description',
		'status',
		'created_id',
		'updated_id'
	];
}
