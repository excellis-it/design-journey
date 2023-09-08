<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('from_first_name')->nullable();
            $table->string('from_last_name')->nullable();
            $table->string('from_email')->nullable();
            $table->string('from_address')->nullable();
            $table->string('from_state')->nullable();
            $table->string('from_zipcode')->nullable();
            
            $table->string('from_city')->nullable();
            $table->string('type')->nullable();
            $table->string('from_company')->nullable();
            
            $table->string('from_phone')->nullable();
            $table->string('from_gst')->nullable();
            $table->string('bil_to_name')->nullable();
            $table->string('bil_to_email')->nullable();
            $table->string('bil_to_state')->nullable();
            $table->string('bil_to_city')->nullable();
            $table->string('bil_to_address')->nullable();
            $table->string('bil_to_zipcode')->nullable();
            $table->string('bil_to_phone')->nullable();
            $table->string('bil_to_mobile')->nullable();
            $table->string('project_name')->nullable();
            $table->text('project_address')->nullable();
            $table->string('tax')->nullable();
            $table->string('bil_to_faxNo')->nullable();
            $table->string('invoice_no')->nullable();
            $table->string('terms')->nullable();
            $table->string('notes')->nullable();
            $table->string('sub_total')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('discount_type')->nullable();
            $table->string('tax_amount')->nullable();
            $table->string('total')->nullable();
            $table->string('balance_due')->nullable();
            $table->string('signature')->nullable();
            $table->string('invoice_date')->nullable();
            $table->string('company')->nullable();
            $table->string('image')->nullable();
            $table->string('send_id')->nullable();
            $table->string('send_in')->nullable();
            $table->string('due')->nullable();
            $table->string('due_date')->nullable();
            $table->string('send_in_status')->nullable();
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
        Schema::dropIfExists('invoices');
    }
}
