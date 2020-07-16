<?php

use Illuminate\Database\Seeder;
use App\ServicePrice;

class ServicePriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_prices')->delete();
        ServicePrice::create(array(
            'int_service_id'         => '2',
            'int_service_price_type' => '5',
            'int_format_id'          => '1',
            'int_min_amount'         => '50',
            'int_max_amount'         => '70',
            'int_price_per_item'     => '250',
            'int_price_per_set'      => '500',
        ));
    }
}
