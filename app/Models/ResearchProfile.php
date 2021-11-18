<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * @property integer $id
 * @property string $name
 * @property string $activities
 * @property string $states
 * @property string $places
 * @property int $user_id
 * @property string $slug
 * @property string $created_at
 * @property string $updated_at
 */
class ResearchProfile extends Model
{
    use HasFactory, Notifiable, Sluggable;

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'link',
        'result_count',
        'lastview_date',
        'remember_days',
        'user_id',
        'slug'
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
     * @return HasMany
     */
    public function data()
    {
        return $this->hasMany(ResearchProfileData::class, 'research_profile_id', 'id');
    }

}
