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
            $table->integer('int_user_id');
            $table->integer('int_old_id');
            $table->string('str_first_name');
            $table->string('str_last_name');
            $table->string('str_company');
            $table->string('str_phone');
            $table->string('str_email');
            $table->string('str_address');
            $table->string('str_ic');
            $table->string('str_dic');
            $table->integer('int_client_printing_discount');
            $table->boolean('bool_active');
            $table->boolean('bool_erased');
            $table->boolean('bool_exported');
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
