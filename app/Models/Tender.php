<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * @property integer $id
 * @property string $ref
 * @property string $title
 * @property string $excerpt
 * @property string $content
 * @property int $city_id
 * @property int $department_id
 * @property int $country_id
 * @property int $activity_id
 * @property int $procedure_type_id
 * @property int $budget_type_id
 * @property int $state_id
 * @property string $release_date
 * @property string $closing_date
 * @property string $zip_code
 * @property string $link
 * @property int $code
 * @property string $label
 * @property string $resume
 * @property string $denomination
 * @property string $address_line1
 * @property string $tel
 * @property string $mel
 * @property string $url
 * @property string $url_profil
 * @property string $url_information
 * @property string $url_participation
 * @property string $place_exec
 * @property string $code_nuts
 * @property string $duration_year
 * @property string $duration_month
 * @property string $crm_funding
 * @property string $crm_legal_form
 * @property string $crm_langue
 * @property string $cp_legal_situation
 * @property string $cp_eco
 * @property string $cp_tech
 * @property string $ca_ref
 * @property string $rc_complement_info
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Tender extends Model
{
    use HasFactory, Notifiable, Sluggable;
    /**
     * @var array
     */
    protected $guarded = ['id'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'searchable_content'
    ];

    /**
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['ref']
            ]
        ];
    }
    /**
     * @return
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    /**
     * @return
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    /**
     * @return
     */
    public function procedure()
    {
        return $this->belongsTo(ProcedureType::class, 'procedure_type_id', 'id');
    }
    /**
     * @return
     */
    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
    /**
     * @return
     */
    public function budget()
    {
        return $this->belongsTo(BudgetType::class, 'budget_type_id', 'id');
    }
    /**
     * @return
     */
    public function cpv()
    {
        return $this->belongsToMany(Cpv::class, 'tender_cpv', 'tender_id', 'cpv_id');
    }
    /**
     * @return
     */
    public function favoris()
    {
        return $this->hasMany(Favoris::class);
    }
    /**
     * @return
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tender_tag');
    }
    /**
     * @return
     */
    public function document()
    {
        return $this->morphOne(Document::class, 'documentable');
    }
    /**
     * @return
     */
    public function infos()
    {
        return $this->hasMany(TenderInfo::class);
    }
    /**
     * @return
     */
    public function complementary_address()
    {
        return $this->belongsToMany(AdditionalAddress::class, 'tender_additional_addresses', 'additional_address_id', 'tender_id');
    }
}
