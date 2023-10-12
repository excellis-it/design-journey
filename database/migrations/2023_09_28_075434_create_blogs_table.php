<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_cat_id')->references('id')->on('blog_categories')->onDelete('cascade')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('main_image')->nullable();
            $table->longText('description')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->longText('conclusion')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('blogs');
    }
}
