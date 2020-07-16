<?php

use Illuminate\Database\Seeder;
use App\OrderPrintItem;

class OrderPrintItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_print_items')->delete();
        OrderPrintItem::create(array(
            'int_order_id' => '1',
            'int_old_id' => '0',
            'int_machine_id' => '1',
            'str_item_desc' => '',
            'int_printing_discount' => '0',
            'bool_enable_pd' => '0',
            'int_item_amount01' => '100',
            'int_item_amount02' => '200',
            'int_item_amount03' => '300',
            'int_item_amount04' => '400',
            'int_item_amount05' => '500',
            'int_item_amount06' => '0',
            'int_item_amount07' => '0',
            'int_item_amount08' => '0',
            'int_item_amount09' => '0',
            'int_item_amount0a' => '0',
            'int_format_id' => '2',
            'int_machine_paper_id' => '1',
            'int_item_paper_format_id' => '1',
            'int_item_width' => '100',
            'int_item_height' => '50',
            'int_item_page_count' => '1',
            'int_paper_id' => '1',
            'int_paper_weight' => '0',
            'int_paper_price' => '0',
            'int_colors_front' => '0',
            'int_colors_back' => '0',
            'int_arc_types' => '0',
            'bool_paper_price_only' => '0',
            'int_item_price01' => '1',
            'int_item_price02' => '2',
            'int_item_price03' => '3',
            'int_item_price04' => '4',
            'int_item_price05' => '5',
            'int_item_price06' => '0',
            'int_item_price07' => '0',
            'int_item_price08' => '0',
            'int_item_price09' => '0',
            'int_item_price0a' => '0',
            'int_item_print_price01' => '1',
            'int_item_print_price02' => '2',
            'int_item_print_price03' => '3',
            'int_item_print_price04' => '4',
            'int_item_print_price05' => '5',
            'int_item_print_price06' => '0',
            'int_item_print_price07' => '0',
            'int_item_print_price08' => '0',
            'int_item_print_price09' => '0',
            'int_item_print_price0a' => '0',
            'int_item_service_price01' => '0',
            'int_item_service_price02' => '0',
            'int_item_service_price03' => '0',
            'int_item_service_price04' => '0',
            'int_item_service_price05' => '0',
            'int_item_service_price06' => '0',
            'int_item_service_price07' => '0',
            'int_item_service_price08' => '0',
            'int_item_service_price09' => '0',
            'int_item_service_price0a' => '0',
            'int_helper' => '0',
            'bool_exported'=> '0',
        ));
    }
}
