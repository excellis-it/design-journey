<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBannerTitleToHomeCms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('home_cms', function (Blueprint $table) {
            //
            $table->string('main_title1')->after('banner_image')->nullable();
            $table->string('main_title2')->after('main_title1')->nullable();
            $table->string('main_title3')->after('main_title2')->nullable();
            $table->string('banner_sub_title')->after('main_title3')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('home_cms', function (Blueprint $table) {
            //
            $table->dropColumn('main_title1');
            $table->dropColumn('main_title2');
            $table->dropColumn('main_title3');
            $table->dropColumn('banner_sub_title');
        });
    }
}
