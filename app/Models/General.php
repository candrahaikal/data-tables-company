<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class General
 * 
 * @property int $id
 * @property string $nama
 * @property string $nilai
 * @property string|null $link
 *
 * @package App\Models
 */
class General extends Model
{
	protected $table = 'general';
	public $timestamps = false;

	protected $fillable = [
		'nama',
		'nilai',
		'link'
	];
}
