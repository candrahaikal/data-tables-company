<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CertificateTemplate
 * 
 * @property int $id
 * @property string $filename
 * @property int $batch
 * @property string|null $description
 * @property string|null $template_content
 * @property string|null $marker_state
 * @property int $m_course_type_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property MCourseType $m_course_type
 *
 * @package App\Models
 */
class CertificateTemplate extends Model
{
	protected $table = 'certificate_template';

	protected $casts = [
		'batch' => 'int',
		'm_course_type_id' => 'int'
	];

	protected $fillable = [
		'filename',
		'batch',
		'description',
		'template_content',
		'marker_state',
		'm_course_type_id'
	];

	public function m_course_type()
	{
		return $this->belongsTo(MCourseType::class);
	}
}
