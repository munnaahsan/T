<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_menus', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('description')->nullable();
            $table->float('sale_price')->nullable();
            $table->text('tax_information')->nullable();
            $table->string('tax_string')->nullable();
            $table->string('photo')->nullable();
            $table->string('veg_item', 50); //`veg_item` varchar(50) DEFAULT 'Veg No',
            $table->string('beverage_item', 50); //`beverage_item` varchar(50) DEFAULT 'Beverage No'
            $table->string('bar_item', 50); //`bar_item` varchar(50) DEFAULT 'Bar No',
            $table->string('del_status', 10);// `del_status` varchar(10) DEFAULT 'Live'
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
        Schema::dropIfExists('food_menus');
    }
}
