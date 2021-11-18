<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FolderItem extends Model
{
    use HasFactory;
    /**
     * @return BelongsTo
     */
    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }
    /**
     * @return MorphTo
     */
    public function foldable()
    {
        return $this->morphTo();
    }
}
