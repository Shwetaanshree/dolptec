<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquire extends Model
{
    use HasFactory;

    protected $table = 'enquires';
    protected $fillable = [
        'name',
        'email',
        'phone',
        //'designation',
        //'countryCode', 
        // 'companyName',
        //'website',
        //'companyType',
        'city',
        'aboutProject',
        'status',
    ];
}
