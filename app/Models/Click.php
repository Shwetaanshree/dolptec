<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Click extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming conventions
    protected $table = 'clicks';

    // Define fillable properties
    protected $fillable = [
        'type', // e.g., 'phone' or 'email'
    ];

    // Disable mass assignment protection
    // protected $guarded = [];
}
