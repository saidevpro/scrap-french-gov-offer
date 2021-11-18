<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $connection = 'neomarches_documents';
    /**
     * @var array
     */
    protected $fillable = ['name', 'slug'];

}
