<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIllustrationCategoryImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('illustration_category_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('illustration_category_id')->references('id')->on('illustration_categories')->onDelete('cascade')->nullable();
            $table->string('style_type')->nullable();
            $table->string('images')->nullable();
            $table->string('imgage_name')->nullable();
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
        Schema::dropIfExists('illustration_category_images');
    }
}
