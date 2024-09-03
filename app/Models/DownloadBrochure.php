<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DownloadBrochure extends Model
{
    use HasFactory;

    protected $table = 'download_brochures';
    protected $fillable = [
        'name',
        'email',
        'phone',
    ];
}

