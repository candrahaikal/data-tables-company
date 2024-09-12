<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MBankSoal
 * 
 * @property int $id
 * @property string|null $nama
 * @property string|null $pilihan
 * @property string|null $kunci_jawaban
 * @property string|null $img_soal
 * @property string|null $type
 * @property string|null $paket
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int|null $created_id
 * @property Carbon $updated_at
 * @property int|null $updated_id
 *
 * @package App\Models
 */
class MBankSoal extends Model
{
	protected $table = 'm_bank_soal';

	protected $casts = [
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $fillable = [
		'nama',
		'pilihan',
		'kunci_jawaban',
		'img_soal',
		'type',
		'paket',
		'description',
		'status',
		'created_id',
		'updated_id'
	];
}
