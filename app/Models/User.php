<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string|null $nickname
 * @property string|null $referal
 * @property Carbon|null $date_of_birth
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $university
 * @property string|null $major
 * @property int|null $semester
 * @property string|null $city
 * @property string|null $country
 * @property int|null $postal_code
 * @property string|null $personal_summary
 * @property int|null $m_province_id
 * @property string|null $linked_in
 * @property string|null $request
 * @property string $email
 * @property string $password
 * @property string|null $profile_picture
 * @property string|null $type
 * @property int|null $m_partner_id
 * @property int $access_group_id
 * @property int $exp
 * @property int $level
 * @property int $email_verified
 * @property int|null $partner_university_detail_id
 * @property Carbon|null $email_verified_at
 * @property string|null $remember_token
 * @property string|null $no_ktp
 * @property string|null $transcripts
 * @property float|null $ipk
 * @property string|null $religion
 * @property string|null $citizenship_status
 * @property string|null $hobby
 * @property string|null $detail_description_text
 * @property string|null $detail_description_video
 * @property string|null $resume
 * @property string|null $supervisor_name
 * @property string|null $supervisor_email
 * @property Carbon|null $last_loggedin
 * @property int|null $strict
 * @property Carbon|null $last_reset_password
 * @property string|null $description
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_id
 * @property Carbon $updated_at
 * @property int $updated_id
 * 
 * @property MProvince|null $m_province
 * @property AccessGroup $access_group
 * @property MPartner|null $m_partner
 * @property Collection|CourseClassMember[] $course_class_members
 * @property Collection|CourseClassMemberGrading[] $course_class_member_gradings
 * @property Collection|CourseClassMemberLog[] $course_class_member_logs
 * @property Collection|CourseJournal[] $course_journals
 * @property CourseTutor $course_tutor
 * @property Collection|EventParticipant[] $event_participants
 * @property Collection|EventParticipantRequirement[] $event_participant_requirements
 * @property Collection|MSkill[] $m_skills
 * @property Collection|MaxyTalk[] $maxy_talks
 * @property Collection|Proposal[] $proposals
 * @property Collection|ProposalBimbingan[] $proposal_bimbingans
 * @property Collection|RedeemCode[] $redeem_codes
 * @property Collection|SurveyResult[] $survey_results
 * @property Collection|TransOrder[] $trans_orders
 * @property Collection|Transkrip[] $transkrips
 * @property Collection|UserCertification[] $user_certifications
 * @property Collection|UserEducation[] $user_educations
 * @property Collection|UserExperience[] $user_experiences
 * @property Collection|UserLanguage[] $user_languages
 * @property Collection|UserOrganization[] $user_organizations
 * @property Collection|UserParent[] $user_parents
 * @property Collection|UserPortfolio[] $user_portfolios
 * @property Collection|UserResume[] $user_resumes
 * @property Collection|UserSkill[] $user_skills
 * @property Collection|UserTestimonial[] $user_testimonials
 * @property Collection|UserTranscript[] $user_transcripts
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';

	protected $casts = [
		'date_of_birth' => 'datetime',
		'semester' => 'int',
		'postal_code' => 'int',
		'm_province_id' => 'int',
		'm_partner_id' => 'int',
		'access_group_id' => 'int',
		'exp' => 'int',
		'level' => 'int',
		'email_verified' => 'int',
		'partner_university_detail_id' => 'int',
		'email_verified_at' => 'datetime',
		'ipk' => 'float',
		'last_loggedin' => 'datetime',
		'strict' => 'int',
		'last_reset_password' => 'datetime',
		'status' => 'int',
		'created_id' => 'int',
		'updated_id' => 'int'
	];

	protected $hidden = [
		'password',
		'remember_token',
		'last_reset_password'
	];

	protected $fillable = [
		'name',
		'nickname',
		'referal',
		'date_of_birth',
		'phone',
		'address',
		'university',
		'major',
		'semester',
		'city',
		'country',
		'postal_code',
		'personal_summary',
		'm_province_id',
		'linked_in',
		'request',
		'email',
		'password',
		'profile_picture',
		'type',
		'm_partner_id',
		'access_group_id',
		'exp',
		'level',
		'email_verified',
		'partner_university_detail_id',
		'email_verified_at',
		'remember_token',
		'no_ktp',
		'transcripts',
		'ipk',
		'religion',
		'citizenship_status',
		'hobby',
		'detail_description_text',
		'detail_description_video',
		'resume',
		'supervisor_name',
		'supervisor_email',
		'last_loggedin',
		'strict',
		'last_reset_password',
		'description',
		'status',
		'created_id',
		'updated_id'
	];

	public function m_province()
	{
		return $this->belongsTo(MProvince::class);
	}

	public function access_group()
	{
		return $this->belongsTo(AccessGroup::class);
	}

	public function m_partner()
	{
		return $this->belongsTo(MPartner::class);
	}

	public function course_class_members()
	{
		return $this->hasMany(CourseClassMember::class);
	}

	public function course_class_member_gradings()
	{
		return $this->hasMany(CourseClassMemberGrading::class, 'tutor_id');
	}

	public function course_class_member_logs()
	{
		return $this->hasMany(CourseClassMemberLog::class);
	}

	public function course_journals()
	{
		return $this->hasMany(CourseJournal::class);
	}

	public function course_tutor()
	{
		return $this->hasOne(CourseTutor::class, 'users_id');
	}

	public function event_participants()
	{
		return $this->hasMany(EventParticipant::class);
	}

	public function event_participant_requirements()
	{
		return $this->hasMany(EventParticipantRequirement::class);
	}

	public function m_skills()
	{
		return $this->hasMany(MSkill::class, 'updated_id');
	}

	public function maxy_talks()
	{
		return $this->hasMany(MaxyTalk::class, 'users_id');
	}

	public function proposals()
	{
		return $this->hasMany(Proposal::class, 'student_id');
	}

	public function proposal_bimbingans()
	{
		return $this->hasMany(ProposalBimbingan::class);
	}

	public function redeem_codes()
	{
		return $this->belongsToMany(RedeemCode::class, 'user_redeem_code')
					->withPivot('id', 'is_used')
					->withTimestamps();
	}

	public function survey_results()
	{
		return $this->hasMany(SurveyResult::class);
	}

	public function trans_orders()
	{
		return $this->hasMany(TransOrder::class);
	}

	public function transkrips()
	{
		return $this->hasMany(Transkrip::class);
	}

	public function user_certifications()
	{
		return $this->hasMany(UserCertification::class);
	}

	public function user_educations()
	{
		return $this->hasMany(UserEducation::class);
	}

	public function user_experiences()
	{
		return $this->hasMany(UserExperience::class);
	}

	public function user_languages()
	{
		return $this->hasMany(UserLanguage::class);
	}

	public function user_organizations()
	{
		return $this->hasMany(UserOrganization::class);
	}

	public function user_parents()
	{
		return $this->hasMany(UserParent::class);
	}

	public function user_portfolios()
	{
		return $this->hasMany(UserPortfolio::class);
	}

	public function user_resumes()
	{
		return $this->hasMany(UserResume::class);
	}

	public function user_skills()
	{
		return $this->hasMany(UserSkill::class);
	}

	public function user_testimonials()
	{
		return $this->hasMany(UserTestimonial::class);
	}

	public function user_transcripts()
	{
		return $this->hasMany(UserTranscript::class);
	}
}
