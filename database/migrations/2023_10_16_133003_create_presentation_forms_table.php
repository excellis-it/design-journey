<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresentationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentation_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->nullable();
            $table->foreignId('type_id')->references('id')->on('types')->onDelete('cascade')->nullable();
            $table->foreignId('sub_type_id')->references('id')->on('sub_types')->onDelete('cascade')->nullable();
            $table->string('request_name')->nullable();
            $table->string('brand_name')->nullable();
            $table->string('design_type')->nullable();
            $table->string('pages_number')->nullable();
            $table->longText('size_format')->nullable();
            $table->longText('copy_presentation')->nullable();
            $table->string('demo_design_file')->nullable();
            $table->string('custom_illustration')->nullable();
            $table->longText('additional_information')->nullable();
            $table->enum('status', ['Pending', 'Pause','Delivered','Accept'])->default('Pending'); 
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
        Schema::dropIfExists('presentation_forms');
    }
}
