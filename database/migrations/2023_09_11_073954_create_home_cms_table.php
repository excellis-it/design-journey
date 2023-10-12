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
            $table->string('banner_image')->nullable();
            $table->string('section1_1st_title')->nullable();
            $table->longText('section1_1st_details')->nullable();
            $table->string('section1_2nd_title')->nullable();
            $table->longText('section1_2nd_details')->nullable();
            $table->string('section1_3rd_title')->nullable();
            $table->longText('section1_3rd_details')->nullable();
            $table->string('section2_1st_image')->nullable();
            $table->string('section2_1st_title')->nullable();
            $table->longText('section2_1st_details')->nullable();
            $table->string('section2_2nd_image')->nullable();
            $table->string('section2_2nd_title')->nullable();
            $table->longText('section2_2nd_details')->nullable();
            $table->string('section2_3rd_image')->nullable();
            $table->string('section2_3rd_title')->nullable();
            $table->longText('section2_3rd_details')->nullable();
            $table->string('section3_image')->nullable();
            $table->string('section3_title')->nullable();
            $table->longText('section3_detail')->nullable();
            $table->string('section3_title1')->nullable();
            $table->longText('section3_detail1')->nullable();
            $table->string('section3_title2')->nullable();
            $table->longText('section3_detail2')->nullable();
            $table->string('section3_title3')->nullable();
            $table->longText('section3_detail3')->nullable();
            $table->string('section3_title4')->nullable();
            $table->longText('section3_detail4')->nullable();
            $table->string('section3_title5')->nullable();
            $table->longText('section3_detail5')->nullable();
            $table->string('section4_title')->nullable();
            $table->longText('section4_detail')->nullable();
            $table->string('section4_video_link')->nullable();
            $table->string('section4_image1')->nullable();
            $table->string('section4_image2')->nullable();
            $table->string('section4_image3')->nullable();
            $table->string('section4_image4')->nullable();
            $table->string('section5_title1')->nullable();
            $table->longText('section5_detail1')->nullable();
            $table->string('section5_title2')->nullable();
            $table->longText('section5_detail2')->nullable();
            $table->string('section5_title3')->nullable();
            $table->longText('section5_detail3')->nullable();
            $table->string('section5_title4')->nullable();
            $table->longText('section5_detail4')->nullable();
            $table->string('frequently_qs1')->nullable();
            $table->longText('frequently_ans1')->nullable();
            $table->string('frequently_qs2')->nullable();
            $table->longText('frequently_ans2')->nullable();
            $table->string('frequently_qs3')->nullable();
            $table->longText('frequently_ans3')->nullable();
            $table->string('frequently_qs4')->nullable();
            $table->longText('frequently_ans4')->nullable();
            $table->string('service_business_title')->nullable();
            $table->string('service_business_image')->nullable();
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
