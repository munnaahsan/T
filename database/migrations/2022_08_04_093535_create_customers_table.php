<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('address', 300)->nullable();
            $table->string('password', 100)->nullable();
            $table->string('gst_number', 50)->nullable();
            $table->string('pre_or_post_payment', 20)->nullable();
            $table->smallInteger('area_id')->nullable(); //length 11
            $table->smallInteger('user_id')->nullable(); //length  11
            $table->tinyInteger('company_id')->nullable(); //length  11
            $table->string('del_status', 10)->nullable();
            $table->date('date_of_birth')->nullable(); //length  11
            $table->date('date_of_anniversary')->nullable(); //length  11
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
        Schema::dropIfExists('customers');
    }
}
