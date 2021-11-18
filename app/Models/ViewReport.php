<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewReport extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $guarded = ['id'];
    /**
     * @var array
     */
    public $timestamps = false;
}
