<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MPromo
 * 
 * @property int $id
 * @property string $name
 * @property string $code
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property string $discount_type
 * @property string $discount
 * @property int|null $max_discount
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property PromoCourse $promo_course
 * @property Collection|TransOrder[] $trans_orders
 *
 * @package App\Models
 */
class MPromo extends Model
{
	protected $table = 'm_promo';

	protected $casts = [
		'start_date' => 'datetime',
		'end_date' => 'datetime',
		'max_discount' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'code',
		'start_date',
		'end_date',
		'discount_type',
		'discount',
		'max_discount',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function promo_course()
	{
		return $this->hasOne(PromoCourse::class);
	}

	public function trans_orders()
	{
		return $this->hasMany(TransOrder::class);
	}
}
