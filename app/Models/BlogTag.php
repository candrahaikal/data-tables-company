<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BlogTag
 * 
 * @property int $m_blog_id
 * @property int $m_blog_tag_id
 *
 * @package App\Models
 */
class BlogTag extends Model
{
	protected $table = 'blog_tag';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'm_blog_id' => 'int',
		'm_blog_tag_id' => 'int'
	];

	protected $fillable = [
		'm_blog_id',
		'm_blog_tag_id'
	];
}
