<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMainTitle2ColorsTable extends Migration
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
            $table->string('main_title2_color')->after('main_title2')->nullable();
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
            $table->dropColumn('main_title2_color');
        });
    }
}
