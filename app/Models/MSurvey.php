<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MSurvey
 * 
 * @property int $id
 * @property string $name
 * @property Carbon $expired_date
 * @property string $survey
 * @property int $type
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property Collection|SurveyResult[] $survey_results
 *
 * @package App\Models
 */
class MSurvey extends Model
{
	protected $table = 'm_survey';

	protected $casts = [
		'expired_date' => 'datetime',
		'type' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'expired_date',
		'survey',
		'type',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function survey_results()
	{
		return $this->hasMany(SurveyResult::class, 'survey_id');
	}
}
