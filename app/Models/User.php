<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Cviebrock\EloquentSluggable\Sluggable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable, Sluggable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier() {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims() {
        return [];
    }
    /**
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['first_name', 'last_name', 'company_id']
            ]
        ];
    }
    /**
     * Return a relationship with the company
     *
     * @return
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    /**
     * Return a relationship with the options
     *
     * @return
     */
    public function options()
    {
        return $this->belongsToMany(AccountOption::class, 'user_account_options', 'user_id', 'account_option_id');
    }
    /**
     * @return
     */
    public function followed()
    {
        return $this->belongsToMany(Tender::class, 'favoris', 'user_id', 'tender_id');
    }
    /**
     * @return
     */
    public function folders()
    {
        return $this->hasMany(Folder::class);
    }
    /**
     * @return
     */
    public function accounttype()
    {
        return $this->belongsTo(AccountTypes::class, 'account_types_id');
    }
    /**
     * @return MorphMany
     */
    public function documents()
    {
        return $this->morphMany(Document::class, 'documentable');
    }
    /**
     * @return Boolean
     */
    public function isProvider()
    {
        $account_type = $this->accounttype;
        return $account_type ? $account_type->name === 'provider' : false;
    }
    /**
     * @return Boolean
     */
    public function isBuyer()
    {
        $account_type = $this->accounttype;
        return $account_type ? $account_type->name === 'buyer' : false;
    }
    /**
     * @return HasMany
     */
    public function contacts()
    {
        return $this->hasMany(User::class, 'parent_id', 'id');
    }
    /**
     * @return BelongsTo
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    /**
     * @return HasMany
     */
    public function researchs()
    {
        return $this->hasMany(ResearchProfile::class, 'user_id', 'id');
    }

}
