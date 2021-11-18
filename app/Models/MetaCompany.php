<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaCompany extends Model
{
    use HasFactory;


    protected $table = 'meta_company';

    protected $guarded = ['id'];
}
