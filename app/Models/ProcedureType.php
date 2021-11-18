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
 * @property int $origine_procedure_type_id
 * @property string $created_at
 * @property string $updated_at
 */
class ProcedureType extends Model
{
    use HasFactory, Notifiable, Sluggable;

    /**
     * @var array
     */
    protected $fillable = ['name', 'slug', 'origine_procedure_type_id'];
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
