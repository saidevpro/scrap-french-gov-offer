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
 * @property string $created_at
 * @property string $updated_at
 */
class Tag extends Model
{
    use HasFactory, Notifiable, Sluggable;

    /**
     * @var array
     */
    protected $fillable = ['name', 'slug', 'code'];
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
     * @return BelongsToMany
     */
    public function tender()
    {
        return $this->belongsToMany(Tender::class, 'tender_tag');
    }

}
