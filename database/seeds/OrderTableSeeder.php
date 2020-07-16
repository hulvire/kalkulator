<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->delete();
        Order::create(array(
            'int_user_id' => '1',
            'int_old_id' => '0',
            'int_client_id' => '1',
            'str_contact' => '',
            'str_order_desc' => 'testovaci',
            'date_order_date' => '2005-06-28 00:00:00',
            'int_amount01' => '1000',
            'int_amount02' => '2300',
            'int_amount03' => '3000',
            'int_amount04' => '4000',
            'int_amount05' => '5000',
            'int_amount06' => '6000',
            'int_amount07' => '7000',
            'int_amount08' => '8000',
            'int_amount09' => '9000',
            'int_amount0a' => '10000',
            'int_price_items01' => '8159510',
            'int_price_items02' => '11551769',
            'int_price_items03' => '13378369',
            'int_price_items04' => '15987798',
            'int_price_items05' => '18597228',
            'int_price_items06' => '0',
            'int_price_items07' => '0',
            'int_price_items08' => '0',
            'int_price_items09' => '0',
            'int_price_items0a' => '0',
            'int_price_services01' => '0',
            'int_price_services02' => '0',
            'int_price_services03' => '0',
            'int_price_services04' => '0',
            'int_price_services05' => '0',
            'int_price_services06' => '0',
            'int_price_services07' => '0',
            'int_price_services08' => '0',
            'int_price_services09' => '0',
            'int_price_services0a' => '0',
            'int_price_total01' => '8159510',
            'int_price_total02' => '11551769',
            'int_price_total03' => '13378369',
            'int_price_total04' => '15987798',
            'int_price_total05' => '18597228',
            'int_price_total06' => '0',
            'int_price_total07' => '0',
            'int_price_total08' => '0',
            'int_price_total09' => '0',
            'int_price_total0a' => '0',
            'int_helper' => '28',
            'int_selected_amount' => '0',
            'bool_exported' => '1',
        ));
    }
}
