<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tender; 

/**
 * @property integer $id
 * @property string $type
 * @property string $slug
 * @property string $denomination
 * @property string $corresponding
 * @property string $address
 * @property string $tel
 * @property string $fax
 * @property string $mel
 * @property string $url
 * @property string $created_at
 * @property string $updated_at
 */
class AdditionalAddress extends Model
{
    use HasFactory, Sluggable;
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = [
        'type',
        'slug',
        'denomination',
        'corresponding',
        'address',
        'tel',
        'fax',
        'mel',
        'url'
    ];
    /**
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['denomination']
            ]
        ];
    }
    /**
     * @return
     */
    public function tender()
    {
        return $this->belongsToMany(Tender::class, 'tender_additional_addresses', 'additional_address_id', 'tender_id');
    }
}
