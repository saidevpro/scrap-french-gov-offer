<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * @property integer $id
 * @property int $cpv_id
 * @property int $tender_id
 * @property string $created_at
 * @property string $updated_at
 */
class TenderCpv extends Model
{
    use HasFactory, Notifiable;
    
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tender_cpv';

    /**
     * @var array
     */
    protected $fillable = ['cpv_id', 'tender_id'];

}
