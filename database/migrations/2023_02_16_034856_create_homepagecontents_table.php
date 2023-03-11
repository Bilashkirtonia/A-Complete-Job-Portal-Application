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
        Schema::create('homepagecontents', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->string('text')->nullable();
            $table->string('job_title');
            $table->string('job_category');
            $table->string('job_location');
            $table->string('job_search');
            $table->string('image');
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
        Schema::dropIfExists('homepagecontents');
    }
};
