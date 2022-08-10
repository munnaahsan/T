<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_expenses', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->float('amount')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('employee_id')->nullable();
            $table->string('note')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('outlet_id')->nullable();
            $table->string('del_status')->nullable();
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
        Schema::dropIfExists('tbl_expenses');
    }
}
