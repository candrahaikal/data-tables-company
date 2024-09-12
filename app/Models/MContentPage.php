<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MContentPage
 * 
 * @property int $id
 * @property string $name
 * @property string|null $heading
 * @property string|null $title
 * @property string|null $slug
 * @property string $type
 * @property string|null $meta_keyword
 * @property string|null $meta_description
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
class MContentPage extends Model
{
	protected $table = 'm_content_page';

	protected $casts = [
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'heading',
		'title',
		'slug',
		'type',
		'meta_keyword',
		'meta_description',
		'content',
		'description',
		'status',
		'created_id',
		'updated_id'
	];
}
