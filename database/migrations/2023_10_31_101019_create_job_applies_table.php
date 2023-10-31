<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('career_id')->references('id')->on('careers')->onDelete('cascade')->nullable();
            $table->string('resume_upload')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->longText('introduction')->nullable();
            $table->longText('experience')->nullable();
            $table->string('country')->nullable();
            $table->string('us_time_available')->nullable();
            $table->string('salary')->nullable();
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
        Schema::dropIfExists('job_applies');
    }
}
