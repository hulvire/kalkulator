<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOPIServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('o_p_i_services', function (Blueprint $table) {
            $table->id();
            $table->integer('int_old_id');
            $table->integer('int_order_id');
            $table->integer('int_order_print_item_id');
            $table->integer('int_service_id');
            $table->integer('int_service_category_id');
            $table->integer('int_service_count');
            $table->integer('int_service_price');
            $table->boolean('bool_front');
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
        Schema::dropIfExists('o_p_i_services');
    }
}
