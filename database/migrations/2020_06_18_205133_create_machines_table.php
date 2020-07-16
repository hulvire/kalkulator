<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machines', function (Blueprint $table) {
            $table->id();
            $table->string('str_machine_name');
            $table->integer('int_mounting');
            $table->integer('int_copying');
            $table->integer('int_matrix');
            $table->integer('int_preparation');
            $table->integer('int_print');
            $table->integer('int_machine_sum');
            $table->integer('int_machine_discount');
            $table->boolean('bool_active');
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
        Schema::dropIfExists('machines');
    }
}
