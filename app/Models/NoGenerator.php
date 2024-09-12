<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NoGenerator
 * 
 * @property int $id
 * @property int $month
 * @property int $year
 * @property int $value
 * @property string $type
 *
 * @package App\Models
 */
class NoGenerator extends Model
{
	protected $table = 'no_generator';
	public $timestamps = false;

	protected $casts = [
		'month' => 'int',
		'year' => 'int',
		'value' => 'int'
	];

	protected $fillable = [
		'month',
		'year',
		'value',
		'type'
	];
}
