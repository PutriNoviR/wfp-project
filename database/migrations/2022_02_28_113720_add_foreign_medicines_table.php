<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medicines', function (Blueprint $table) {
            $table->unsignedBigInteger('category');
            $table->foreign('category')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medicines', function (Blueprint $table) {
            $table->dropForeign(['category']);
            $table->dropColumn('category');
        });
    }
}
