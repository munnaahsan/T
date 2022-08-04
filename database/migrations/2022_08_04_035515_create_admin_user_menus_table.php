<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminUserMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_user_menus', function (Blueprint $table) {
            $table->id();
            $table->string('label')->nullable();
            $table->string('function_name')->nullable();
            $table->string('menu_name')->nullable();
            $table->string('controller_name')->nullable();
            $table->string('icon')->nullable();
            $table->integer('order_by')->nullable();
            $table->integer('is_ignore')->nullable();
            $table->integer('is_ignore_menu')->nullable();
            $table->integer('parent_id')->nullable();
            $table->integer('del_status')->nullable();
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
        Schema::dropIfExists('admin_user_menus');
    }
}
