<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PartnerUniversityDetail
 * 
 * @property int $id
 * @property string $name
 * @property int|null $ref
 * @property string $type
 * @property int $m_partner_id
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property MPartner $m_partner
 *
 * @package App\Models
 */
class PartnerUniversityDetail extends Model
{
	protected $table = 'partner_university_detail';

	protected $casts = [
		'ref' => 'int',
		'm_partner_id' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'ref',
		'type',
		'm_partner_id',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function m_partner()
	{
		return $this->belongsTo(MPartner::class);
	}
}
