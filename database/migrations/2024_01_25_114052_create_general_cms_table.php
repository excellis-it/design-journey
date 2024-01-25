<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralCmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_cms', function (Blueprint $table) {
            $table->id();
            $table->string('registration_title')->nullable();
            $table->string('registration_image')->nullable();
            $table->string('login_title')->nullable();
            $table->string('login_image')->nullable();
            $table->string('website_logo')->nullable();
            $table->string('copyright_title')->nullable();
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
        Schema::dropIfExists('general_cms');
    }
}
