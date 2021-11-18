<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;
    /**
     * @const
     */
    const FAVORIS = 'favoris';
    const DOCUMENTS = 'documents';
    const TYPES = [
        'fv' => self::FAVORIS,
        'doc' => self::DOCUMENTS
    ];
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'user_id'
    ];
    /**
     * @return
     */
    public function favoris()
    {
        return $this->hasMany(Favoris::class, 'folder_id', 'id');
    }
}
