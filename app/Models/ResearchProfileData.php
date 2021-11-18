<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchProfileData extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = [
        'label',
        'value',
        'research_profile_id'
    ];
}
