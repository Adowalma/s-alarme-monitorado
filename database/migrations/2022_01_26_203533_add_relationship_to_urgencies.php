<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipToUrgencies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('urgencies', function (Blueprint $table) {
            //
            if (!Schema::hasColumn('urgencies', 'user_id')) {
                $table->integer('user_id')->unsigned()->nullable();
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                }
            if (!Schema::hasColumn('urgencies', 'posto_id')) {
                $table->integer('posto_id')->unsigned()->nullable();
                $table->foreign('posto_id')->references('id')->on('postos')->onDelete('cascade');
                }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('urgencies', function (Blueprint $table) {
            //
        });
    }
}
