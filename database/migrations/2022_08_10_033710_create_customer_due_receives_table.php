<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerDueReceivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_due_receives', function (Blueprint $table) {
            $table->id();
            $table->string('reference_no', 50)->nullable();
            $table->integer('payment_id' )->nullable();
            $table->date('only_date' )->nullable();
            $table->dateTime('date' )->nullable();
            $table->integer('customer_id' )->nullable();
            $table->float('amount' )->nullable();
            $table->string('note' )->nullable();
            $table->integer('user_id' )->nullable();
            $table->integer('outlet_id' )->nullable();
            $table->integer('company_id' )->nullable();
            $table->string('del_status', 50 )->nullable();
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
        Schema::dropIfExists('customer_due_receives');
    }
}
