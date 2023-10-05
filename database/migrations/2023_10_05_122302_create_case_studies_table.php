<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('main_image')->nullable();
            $table->string('video_link')->nullable();
            $table->longText('description')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('company_small_details')->nullable();
            $table->string('company_type')->nullable();
            $table->string('company_size')->nullable();
            $table->string('company_location')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
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
        Schema::dropIfExists('case_studies');
    }
}
