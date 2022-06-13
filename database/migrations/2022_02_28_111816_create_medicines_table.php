<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('generic_name');
            $table->string('form');
            $table->string('restriction_and_formula');
            $table->string('description');
            $table->string('image');
            $table->double('price', 12, 2);
            $table->boolean('faskes_tk1');
            $table->boolean('faskes_tk2');
            $table->boolean('faskes_tk3');
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
        });
    }    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}
