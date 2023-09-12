<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('about_image')->nullable();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('icon1')->nullable();
            $table->string('title1')->nullable();
            $table->longText('details1')->nullable();
            $table->string('icon2')->nullable();
            $table->string('title2')->nullable();
            $table->longText('details2')->nullable();
            $table->string('icon3')->nullable();
            $table->string('title3')->nullable();
            $table->longText('details3')->nullable();
            $table->string('icon4')->nullable();
            $table->string('title4')->nullable();
            $table->longText('details4')->nullable();
            $table->string('icon5')->nullable();
            $table->string('title5')->nullable();
            $table->longText('details5')->nullable();
            $table->string('icon6')->nullable();
            $table->string('title6')->nullable();
            $table->longText('details6')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
