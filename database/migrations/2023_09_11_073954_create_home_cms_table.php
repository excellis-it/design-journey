<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeCmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_cms', function (Blueprint $table) {
            $table->id();
            $table->string('banner_title')->nullable();
            $table->longText('banner_description')->nullable();
            $table->string('banner_back_image')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('section1_main_title')->nullable();
            $table->string('section1_1st_title')->nullable();
            $table->longText('section1_1st_details')->nullable();
            $table->string('section1_2nd_title')->nullable();
            $table->longText('section1_2nd_details')->nullable();
            $table->string('section1_3rd_title')->nullable();
            $table->longText('section1_3rd_details')->nullable();
            $table->string('section2_image')->nullable();
            $table->string('section2_main_title')->nullable();
            $table->longText('section2_main_description')->nullable();
            $table->string('section2_1st_title')->nullable();
            $table->longText('section2_1st_details')->nullable();
            $table->string('section2_2nd_title')->nullable();
            $table->longText('section2_2nd_details')->nullable();
            $table->string('section2_3rd_title')->nullable();
            $table->longText('section2_3rd_details')->nullable();
            $table->string('section3_main_title')->nullable();
            $table->longText('section3_main_description')->nullable();
            $table->string('section3_image')->nullable();
            $table->string('section3_1st_title')->nullable();
            $table->longText('section3_1st_description')->nullable();
            $table->string('section3_2nd_title')->nullable();
            $table->longText('section3_2nd_description')->nullable();
            $table->string('section3_3rd_title')->nullable();
            $table->longText('section3_3rd_description')->nullable();
            $table->string('section3_4th_title')->nullable();
            $table->longText('section3_4th_description')->nullable();
            $table->string('section3_5th_title')->nullable();
            $table->longText('section3_5th_description')->nullable();
            $table->string('section4_video_link')->nullable();
            $table->string('section4_image1')->nullable();
            $table->string('section4_image2')->nullable();
            $table->string('section4_image3')->nullable();
            $table->string('section4_image4')->nullable();
            $table->string('section4_main_title')->nullable();
            $table->longText('section4_main_description')->nullable();
            $table->string('section5_title')->nullable();
            $table->string('section5_1st_content')->nullable();
            $table->longText('section5_1st_content_details')->nullable();
            $table->string('section5_2nd_content')->nullable();
            $table->longText('section5_2nd_content_details')->nullable();
            $table->string('section5_3rd_content')->nullable();
            $table->longText('section5_3rd_content_details')->nullable();
            $table->string('section5_4th_content')->nullable();
            $table->longText('section5_4th_content_details')->nullable();
            $table->string('faq_section_title')->nullable();
            $table->string('faq_1st_question')->nullable();
            $table->longText('faq_1st_answer')->nullable();
            $table->string('faq_2nd_question')->nullable();
            $table->longText('faq_2nd_answer')->nullable();
            $table->string('faq_3rd_question')->nullable();
            $table->longText('faq_3rd_answer')->nullable();
            $table->string('faq_4th_question')->nullable();
            $table->longText('faq_4th_answer')->nullable();
            $table->string('section6_title')->nullable();
            $table->string('section6_image')->nullable();
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
        Schema::dropIfExists('home_cms');
    }
}
