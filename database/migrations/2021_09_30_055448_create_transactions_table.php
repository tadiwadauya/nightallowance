<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('driver');
            $table->string('month');
            $table->string('amt_adv');
            $table->string('percentage');
            $table->string('amount');
            $table->string('days_truck');
            $table->string('amt_per_day');
            $table->string('amt_utilized');
            $table->string('bal_to_be_recoverd');
            $table->string('days_rebooking')->nullable();
            $table->string('rebooking_amt')->nullable();
            $table->string('days_rebooking1')->nullable();
            $table->string('rebooking_amt2')->nullable();
            $table->string('closing_bal');
            $table->string('final_recovery')->nullable();
            $table->string('total_amt_recoverd');
            $table->string('status')->default('active');
            $table->string('done_by');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
