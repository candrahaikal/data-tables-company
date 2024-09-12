<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProposalBimbingan
 * 
 * @property int $id
 * @property int $proposal_id
 * @property int $user_id
 * @property int $m_proposal_status_id
 * @property int $level
 * @property int $priority
 * @property string|null $description
 * @property int|null $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property User $user
 * @property Proposal $proposal
 * @property MProposalStatus $m_proposal_status
 *
 * @package App\Models
 */
class ProposalBimbingan extends Model
{
	protected $table = 'proposal_bimbingan';

	protected $casts = [
		'proposal_id' => 'int',
		'user_id' => 'int',
		'm_proposal_status_id' => 'int',
		'level' => 'int',
		'priority' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'proposal_id',
		'user_id',
		'm_proposal_status_id',
		'level',
		'priority',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function proposal()
	{
		return $this->belongsTo(Proposal::class);
	}

	public function m_proposal_status()
	{
		return $this->belongsTo(MProposalStatus::class);
	}
}
