<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionCmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solution_cms', function (Blueprint $table) {
            $table->id();
            $table->string('section1_title')->nullable();
            $table->longText('section1_content')->nullable();
            $table->string('section1_image')->nullable();
            $table->string('section2_title')->nullable();
            $table->longText('section2_content')->nullable();
            $table->string('section2_image')->nullable();
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
        Schema::dropIfExists('solution_cms');
    }
}
