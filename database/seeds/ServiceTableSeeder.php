<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('service')->delete();
        Service::create(array(
            'str_service_name'          => 'lak ofsetový',
            'str_service_desc'          => '',
            'int_service_category_id'   => '1',
            'int_service_type'          => '1',
            'int_service_param'         => '0',
            'int_service_price_type'    => '0',
            'int_service_sort_order'    => '1',
            'bool_enabled'              => '1',
        ));
    }
}
