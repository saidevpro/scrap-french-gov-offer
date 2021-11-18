<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $guarded = ['id']; 
    /**
     * @return
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
