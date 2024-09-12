<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Partnership
 * 
 * @property int $id
 * @property int $m_partner_id
 * @property int $m_partnership_type_id
 * @property string|null $file
 * @property Carbon|null $date_start
 * @property Carbon|null $date_end
 * @property string|null $description
 * @property int $status
 * @property Carbon|null $created_at
 * @property int $created_id
 * @property Carbon|null $updated_at
 * @property int $updated_id
 * 
 * @property MPartnershipType $m_partnership_type
 * @property MPartner $m_partner
 *
 * @package App\Models
 */
class Partnership extends Model
{
	protected $table = 'partnership';

	protected $casts = [
		'm_partner_id' => 'int',
		'm_partnership_type_id' => 'int',
		'date_start' => 'datetime',
		'date_end' => 'datetime',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'm_partner_id',
		'm_partnership_type_id',
		'file',
		'date_start',
		'date_end',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function m_partnership_type()
	{
		return $this->belongsTo(MPartnershipType::class);
	}

	public function m_partner()
	{
		return $this->belongsTo(MPartner::class);
	}
}
