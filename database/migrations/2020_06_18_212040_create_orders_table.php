<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('int_user_id');
            $table->integer('int_old_id');
            $table->integer('int_client_id');
            $table->string('str_contact');
            $table->string('str_order_desc');
            $table->date('date_order_date');
            $table->integer('int_amount01');
            $table->integer('int_amount02');
            $table->integer('int_amount03');
            $table->integer('int_amount04');
            $table->integer('int_amount05');
            $table->integer('int_amount06');
            $table->integer('int_amount07');
            $table->integer('int_amount08');
            $table->integer('int_amount09');
            $table->integer('int_amount0a');
            $table->integer('int_price_items01');
            $table->integer('int_price_items02');
            $table->integer('int_price_items03');
            $table->integer('int_price_items04');
            $table->integer('int_price_items05');
            $table->integer('int_price_items06');
            $table->integer('int_price_items07');
            $table->integer('int_price_items08');
            $table->integer('int_price_items09');
            $table->integer('int_price_items0a');
            $table->integer('int_price_services01');
            $table->integer('int_price_services02');
            $table->integer('int_price_services03');
            $table->integer('int_price_services04');
            $table->integer('int_price_services05');
            $table->integer('int_price_services06');
            $table->integer('int_price_services07');
            $table->integer('int_price_services08');
            $table->integer('int_price_services09');
            $table->integer('int_price_services0a');
            $table->integer('int_price_total01');
            $table->integer('int_price_total02');
            $table->integer('int_price_total03');
            $table->integer('int_price_total04');
            $table->integer('int_price_total05');
            $table->integer('int_price_total06');
            $table->integer('int_price_total07');
            $table->integer('int_price_total08');
            $table->integer('int_price_total09');
            $table->integer('int_price_total0a');
            $table->integer('int_helper');
            $table->integer('int_selected_amount');
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
        Schema::dropIfExists('orders');
    }
}
