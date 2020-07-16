<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service', function (Blueprint $table) {
            $table->id();
            $table->string('str_service_name');
            $table->string('str_service_desc');
            $table->integer('int_service_category_id');
            $table->integer('int_service_type');
            $table->integer('int_service_param');
            $table->integer('int_service_price_type');
            $table->integer('int_service_sort_order');
            $table->boolean('bool_enabled');
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
        Schema::dropIfExists('service');
    }
}
