<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AccessGroupDetail
 * 
 * @property int $access_group_id
 * @property int $access_master_id
 * 
 * @property AccessGroup $access_group
 * @property AccessMaster $access_master
 *
 * @package App\Models
 */
class AccessGroupDetail extends Model
{
	protected $table = 'access_group_detail';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'access_group_id' => 'int',
		'access_master_id' => 'int'
	];

	protected $fillable = [
		'access_group_id',
		'access_master_id'
	];

	public function access_group()
	{
		return $this->belongsTo(AccessGroup::class);
	}

	public function access_master()
	{
		return $this->belongsTo(AccessMaster::class);
	}
}
