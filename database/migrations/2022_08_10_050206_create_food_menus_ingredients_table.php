<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodMenusIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_menus_ingredients', function (Blueprint $table) {
            $table->id();
            $table->integer('ingredient_id')->nullable();
            $table->float('consumption')->nullable();
            $table->integer('food_menu_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('company_id')->nullable();
            $table->string('del_status')->nullable(); // `del_status` varchar(10) DEFAULT 'Live'
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
        Schema::dropIfExists('food_menus_ingredients');
    }
}
