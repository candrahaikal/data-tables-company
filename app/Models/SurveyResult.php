<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SurveyResult
 * 
 * @property int $id
 * @property int $survey_id
 * @property int $user_id
 * @property string $content
 * @property int|null $score
 * @property string|null $description
 * @property int|null $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property User $user
 * @property MSurvey $m_survey
 *
 * @package App\Models
 */
class SurveyResult extends Model
{
	protected $table = 'survey_result';

	protected $casts = [
		'survey_id' => 'int',
		'user_id' => 'int',
		'score' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'survey_id',
		'user_id',
		'content',
		'score',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function m_survey()
	{
		return $this->belongsTo(MSurvey::class, 'survey_id');
	}
}
