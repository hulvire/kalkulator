<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPrintItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_print_items', function (Blueprint $table) {
            $table->id();
            $table->integer('int_order_id');
            $table->integer('int_old_id');
            $table->integer('int_machine_id');
            $table->string('str_item_desc');
            $table->integer('int_printing_discount');
            $table->boolean('bool_enable_pd');
            $table->integer('int_item_amount01');
            $table->integer('int_item_amount02');
            $table->integer('int_item_amount03');
            $table->integer('int_item_amount04');
            $table->integer('int_item_amount05');
            $table->integer('int_item_amount06');
            $table->integer('int_item_amount07');
            $table->integer('int_item_amount08');
            $table->integer('int_item_amount09');
            $table->integer('int_item_amount0a');
            $table->integer('int_format_id');
            $table->integer('int_machine_paper_id');
            $table->integer('int_item_paper_format_id');
            $table->integer('int_item_width');
            $table->integer('int_item_height');
            $table->integer('int_item_page_count');
            $table->integer('int_paper_id');
            $table->integer('int_paper_weight');
            $table->integer('int_paper_price');
            $table->integer('int_colors_front');
            $table->integer('int_colors_back');
            $table->integer('int_arc_types');
            $table->boolean('bool_paper_price_only');
            $table->integer('int_item_price01');
            $table->integer('int_item_price02');
            $table->integer('int_item_price03');
            $table->integer('int_item_price04');
            $table->integer('int_item_price05');
            $table->integer('int_item_price06');
            $table->integer('int_item_price07');
            $table->integer('int_item_price08');
            $table->integer('int_item_price09');
            $table->integer('int_item_price0a');
            $table->integer('int_item_print_price01');
            $table->integer('int_item_print_price02');
            $table->integer('int_item_print_price03');
            $table->integer('int_item_print_price04');
            $table->integer('int_item_print_price05');
            $table->integer('int_item_print_price06');
            $table->integer('int_item_print_price07');
            $table->integer('int_item_print_price08');
            $table->integer('int_item_print_price09');
            $table->integer('int_item_print_price0a');
            $table->integer('int_item_service_price01');
            $table->integer('int_item_service_price02');
            $table->integer('int_item_service_price03');
            $table->integer('int_item_service_price04');
            $table->integer('int_item_service_price05');
            $table->integer('int_item_service_price06');
            $table->integer('int_item_service_price07');
            $table->integer('int_item_service_price08');
            $table->integer('int_item_service_price09');
            $table->integer('int_item_service_price0a');
            $table->integer('int_helper');
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
        Schema::dropIfExists('order_print_items');
    }
}
