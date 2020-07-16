<?php

use Illuminate\Database\Seeder;
use App\OPIService;

class OPIServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('o_p_i_services')->delete();
        OPIService::create(array(
            'int_old_id' => '0',
            'int_order_id' => '0',
            'int_order_print_item_id' => '0',
            'int_service_id' => '0',
            'int_service_category_id' => '0',
            'int_service_count' => '0',
            'int_service_price' => '0',
            'bool_front' => '0',
            'bool_exported' => '0',
        ));
    }
}
