<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MContentProgramStep
 * 
 * @property int $id
 * @property string $name
 * @property string $style
 * @property string|null $content
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 *
 * @package App\Models
 */
class MContentProgramStep extends Model
{
	protected $table = 'm_content_program_step';

	protected $casts = [
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'style',
		'content',
		'description',
		'status',
		'created_id',
		'updated_id'
	];
}
