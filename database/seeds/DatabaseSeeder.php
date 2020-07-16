<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call(UserTableSeeder::class);
        //$this->call(ServiceTableSeeder::class);
        $this->call(ServiceCategoryTableSeeder::class);
        $this->call(ServicePriceTableSeeder::class);
        $this->call(PaperFormatTableSeeder::class);
        $this->call(OrderPrintItemTableSeeder::class);
        $this->call(MachineTableSeeder::class);
        $this->call(FormatTableSeeder::class);
        $this->call(PaperTableSeeder::class);
        $this->call(OPIServiceTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(CustomerTableSeeder::class);

    }

}
