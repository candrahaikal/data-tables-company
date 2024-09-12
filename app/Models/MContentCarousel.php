<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MContentCarousel
 * 
 * @property int $id
 * @property string $name
 * @property string $content
 * @property string|null $image
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property Collection|MContentCarouselButton[] $m_content_carousel_buttons
 *
 * @package App\Models
 */
class MContentCarousel extends Model
{
	protected $table = 'm_content_carousel';

	protected $casts = [
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'name',
		'content',
		'image',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function m_content_carousel_buttons()
	{
		return $this->hasMany(MContentCarouselButton::class, 'content_carousel_id');
	}
}
