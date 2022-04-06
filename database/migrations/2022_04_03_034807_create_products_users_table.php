<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_users', function (Blueprint $table) {
            $table->increments('id');
        $table->integer('user_id')->unsigned();
        $table->foreign('user_id')
            ->references('id')
            ->on('users')->onDelete('cascade');
        $table->integer('product_id')->unsigned();
        $table->foreign('product_id')
            ->references('id')
            ->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_users');
    }
}
