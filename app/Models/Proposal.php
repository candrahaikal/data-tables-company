<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Proposal
 * 
 * @property int $id
 * @property int $m_proposal_status_id
 * @property int $m_proposal_type_id
 * @property int $student_id
 * @property string $name
 * @property int|null $proposal_grade
 * @property string|null $proposal_url
 * @property string $proposal
 * @property int|null $skripsi_grade
 * @property string|null $skripsi
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property User $user
 * @property MProposalType $m_proposal_type
 * @property MProposalStatus $m_proposal_status
 * @property Collection|ProposalBimbingan[] $proposal_bimbingans
 *
 * @package App\Models
 */
class Proposal extends Model
{
	protected $table = 'proposal';

	protected $casts = [
		'm_proposal_status_id' => 'int',
		'm_proposal_type_id' => 'int',
		'student_id' => 'int',
		'proposal_grade' => 'int',
		'skripsi_grade' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'm_proposal_status_id',
		'm_proposal_type_id',
		'student_id',
		'name',
		'proposal_grade',
		'proposal_url',
		'proposal',
		'skripsi_grade',
		'skripsi',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'student_id');
	}

	public function m_proposal_type()
	{
		return $this->belongsTo(MProposalType::class);
	}

	public function m_proposal_status()
	{
		return $this->belongsTo(MProposalStatus::class);
	}

	public function proposal_bimbingans()
	{
		return $this->hasMany(ProposalBimbingan::class);
	}
}
