<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MProposalStatus
 * 
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property Collection|Proposal[] $proposals
 * @property Collection|ProposalBimbingan[] $proposal_bimbingans
 *
 * @package App\Models
 */
class MProposalStatus extends Model
{
	protected $table = 'm_proposal_status';

	protected $casts = [
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function proposals()
	{
		return $this->hasMany(Proposal::class);
	}

	public function proposal_bimbingans()
	{
		return $this->hasMany(ProposalBimbingan::class);
	}
}
