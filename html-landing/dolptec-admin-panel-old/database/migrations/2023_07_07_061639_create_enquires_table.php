<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquires', function (Blueprint $table) {
            $table->id();
            $table->string('name');           
            $table->string('phone');
            $table->string('email');
            //$table->string('designation');
            //$table->string('countryCode');
            // $table->string('companyName');
           // $table->string('website');
           // $table->string('companyType');
            $table->string('city');
            $table->string('aboutProject');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enquires');
    }
};
