<?php

use Illuminate\Database\Seeder;
use App\ServiceCategory;

class ServiceCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_categories')->delete();
        ServiceCategory::create(array(
            'str_service_type'     => 'typ Služby',
        ));
    }
}
