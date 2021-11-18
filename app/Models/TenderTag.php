<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * @property integer $id
 * @property int $tag_id
 * @property int $tender_id
 * @property string $created_at
 * @property string $updated_at
 */
class TenderTag extends Model
{
    use HasFactory, Notifiable;
    
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tender_tag';

    /**
     * @var array
     */
    protected $fillable = ['tag_id', 'tender_id'];

}
