<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solutions', function (Blueprint $table) {
            $table->id();
            $table->string('short_freelancer')->nullable();
            $table->string('short_inhouse_designer')->nullable();
            $table->string('short_design_journey')->nullable();
            $table->string('long_freelancer')->nullable();
            $table->string('long_inhouse_designer')->nullable();
            $table->string('long_design_journey')->nullable();
            $table->string('flat_rate_freelancer')->nullable();
            $table->string('flat_rate_inhouse_designer')->nullable();
            $table->string('flat_rate_design_journey')->nullable();
            $table->string('hiring_freelancer')->nullable();
            $table->string('hiring_inhouse_designer')->nullable();
            $table->string('hiring_design_journey')->nullable();
            $table->string('verstatile_freelancer')->nullable();
            $table->string('verstatile_inhouse_designer')->nullable();
            $table->string('verstatile_design_journey')->nullable();
            $table->string('turnaround_freelancer')->nullable();
            $table->string('turnaround_inhouse_designer')->nullable();
            $table->string('turnaround_design_journey')->nullable();
            $table->string('flexible_freelancer')->nullable();
            $table->string('flexible_inhouse_designer')->nullable();
            $table->string('flexible_design_journey')->nullable();
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
        Schema::dropIfExists('solutions');
    }
}
