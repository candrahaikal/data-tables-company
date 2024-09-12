<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MContentFaq
 * 
 * @property int $id
 * @property string $name
 * @property string $type
 * @property int|null $content_faq_id
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 *
 * @package App\Models
 */
class MContentFaq extends Model
{
	protected $table = 'm_content_faq';

	protected $casts = [
		'content_faq_id' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'type',
		'content_faq_id',
		'description',
		'status',
		'created_id',
		'updated_id'
	];
}
