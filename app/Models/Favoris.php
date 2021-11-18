<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * @property integer $id
 * @property string $name
 * @property int $tender_id
 * @property int $user_id
 * @property string $slug
 * @property string $created_at
 * @property string $updated_at
 */
class Favoris extends Model
{
    use HasFactory, Notifiable;

    /**
     * @var array
     */
    protected $fillable = [
        'tender_id',
        'user_id',
        'folder_id'
    ];
    /**
     * @return
     */
    public function tender()
    {
        return $this->belongsTo(Tender::class);
    }
}
