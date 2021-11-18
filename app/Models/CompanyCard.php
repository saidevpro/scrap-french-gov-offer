<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyCard extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = "company_card";
    /**
     * @var array
     */
    public $guarded = ['id'];
}
