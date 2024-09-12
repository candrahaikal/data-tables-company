<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MBlog
 * 
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $content
 * @property string $cover_img
 * @property int $view_count
 * @property int $status_highlight
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 *
 * @package App\Models
 */
class MBlog extends Model
{
	protected $table = 'm_blog';

	protected $casts = [
		'view_count' => 'int',
		'status_highlight' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'title',
		'slug',
		'content',
		'cover_img',
		'view_count',
		'status_highlight',
		'description',
		'status',
		'created_id',
		'updated_id'
	];
}
