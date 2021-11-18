<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * @property integer $id
 * @property string $name
 * @property string $code
 * @property string $slug
 * @property string $created_at
 * @property string $updated_at
 */
class Cpv extends Model
{
    use HasFactory, Notifiable, Sluggable;
    /**
     * @var string
     */
    protected $table = "cpv";
    /**
     * @var array
     */
    protected $fillable = ['name', 'code', 'slug'];
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

}
