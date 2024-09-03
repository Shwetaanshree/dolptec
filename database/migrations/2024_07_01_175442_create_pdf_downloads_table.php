<?php

// database/migrations/xxxx_xx_xx_create_pdf_downloads_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePdfDownloadsTable extends Migration
{
    public function up()
    {
        Schema::create('pdf_downloads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('pdf_file');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pdf_downloads');
    }
}
