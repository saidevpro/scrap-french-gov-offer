<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory, Sluggable;
    /**
     * @var string
     */
    protected $connection = 'neomarches_documents';
    /**
     * @var  array
     */
    protected $fillable = [
        'title',
        'slug',
        'type',
        'document_type_id',
        'base64',
        'size',
        'path',
        'folder_id',
        'user_id',
        'hash',
        'documentable_type',
        'documentable_id',
    ];
    /**
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['title']
            ]
        ];
    }
    /**
     *  @return MorphTo
     */
    public function documentable()
    {
        return $this->morphTo();
    }
    /**
     * @return BelongsTo
     */
    public function doctype()
    {
        return $this->belongsTo(DocumentType::class, 'document_type_id', 'id');
    }
    /**
     * Scope a query to only include template document.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeTemplate($query)
    {
        $doc_type_template = DocumentType::where('name', 'template')->first();
        if ($doc_type_template) {
            return $query->where('document_type_id' , $doc_type_template->id);
        }
        return $query;
    }
}
