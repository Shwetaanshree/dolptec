<?php
// app/Models/PdfDownload.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PdfDownload extends Model
{
    use HasFactory;

    protected $table = 'pdf_downloads';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'pdf_file',
    ];
}
