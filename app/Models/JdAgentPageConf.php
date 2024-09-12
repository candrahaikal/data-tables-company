<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class JdAgentPageConf
 * 
 * @property int $id
 * @property string $page_name
 * @property string $slug
 * @property int $user_id
 * @property string $content_setting
 * @property string $testimonial_setting
 * @property string $color_setting
 * @property string $contact_setting
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 *
 * @package App\Models
 */
class JdAgentPageConf extends Model
{
	protected $table = 'jd_agent_page_conf';

	protected $casts = [
		'user_id' => 'int',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'page_name',
		'slug',
		'user_id',
		'content_setting',
		'testimonial_setting',
		'color_setting',
		'contact_setting',
		'description',
		'status',
		'created_id',
		'updated_id'
	];
}
