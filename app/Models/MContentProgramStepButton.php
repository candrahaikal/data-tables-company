<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MContentProgramStepButton
 * 
 * @property int $id
 * @property string $name
 * @property string|null $icon
 * @property string $style
 * @property string|null $url
 * @property int $program_step_id
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 *
 * @package App\Models
 */
class MContentProgramStepButton extends Model
{
	protected $table = 'm_content_program_step_button';

	protected $casts = [
		'program_step_id' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'icon',
		'style',
		'url',
		'program_step_id',
		'description',
		'status',
		'created_id',
		'updated_id'
	];
}
