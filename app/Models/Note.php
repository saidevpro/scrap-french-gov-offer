<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    /**
     * @var array 
     */
    protected $fillable = ['content', 'user_id', 'tender_id'];
}
