<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * @property integer $id
 * @property int $tender_id
 * @property int $additional_address_id
 * @property string $created_at
 * @property string $updated_at
 */
class TenderAdditionalAddresse extends Model
{
    use HasFactory, Notifiable;

    /**
     * @var array
     */
    protected $fillable = ['tender_id', 'additional_address_id'];

}
