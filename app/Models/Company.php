<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property string $siret
 * @property string $address_line1
 * @property string $address_line2
 * @property string $zip_code
 * @property int $city_id
 * @property int $department_id
 * @property int $country_id
 * @property string $first_name
 * @property string $last_name
 * @property string $function
 * @property string $description_1
 * @property string $description_2
 * @property string $information
 * @property string $legal_form
 * @property string $turnover
 * @property string $creation_date
 * @property string $code_naf
 * @property int $number_employees
 * @property string $fb
 * @property string $tw
 * @property string $in
 * @property string $intervention_country_id
 * @property string $intervention_department_id
 * @property string $intervention_city_id
 * @property string $website
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Company extends Model
{
    use HasFactory, Notifiable, Sluggable;

    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'creation_date' => 'date:Y-m-d',
    ];
    /**
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['name']
            ]
        ];
    }
    /**
     * Return a relationship with users
     *
     * @return
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }
    /**
     *
     * @return
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    /**
     *
     * @return
     */
    public function turnover()
    {
        return $this->belongsTo(TurnoverSlice::class, 'turnover_slice', 'id');
    }
    /**
     * Return a relationship with users
     *
     * @return
     */
    public function tender()
    {
        return $this->hasOne(Tender::class);
    }
    /**
     * Return a relationship with category company
     *
     * @return
     */
    public function category()
    {
        return $this->belongsTo(CompanyCategory::class, 'category_id', 'id');
    }
    /**
     * Return a relationship with contacts
     *
     * @return
     */
    public function contacts()
    {
        return $this->hasMany(CompanyContact::class);
    }

    /**
     * Return a relationship with contacts
     *
     * @return
     */
    public function logoDocument()
    {
        return $this->belongsTo(Document::class, 'logo', 'id');
    }

}
