<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MContentCarouselButton
 * 
 * @property int $id
 * @property string $name
 * @property string|null $icon
 * @property string $style
 * @property string|null $url
 * @property int $content_carousel_id
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property MContentCarousel $m_content_carousel
 *
 * @package App\Models
 */
class MContentCarouselButton extends Model
{
	protected $table = 'm_content_carousel_button';

	protected $casts = [
		'content_carousel_id' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'icon',
		'style',
		'url',
		'content_carousel_id',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function m_content_carousel()
	{
		return $this->belongsTo(MContentCarousel::class, 'content_carousel_id');
	}
}
