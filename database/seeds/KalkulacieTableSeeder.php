<?php

use Illuminate\Database\Seeder;
use App\Kalkulacie;

class KalkulacieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kalkulacie')->delete();
        Kalkulacie::create(array(
            /*
            'int_user_id' => '1',
            'int_old_id' => '0',
            'str_first_name' => 'xxx',
            'str_last_name' => 'xxx',
            'bool_active' => '1',
            'bool_erased' => '1',
            'bool_exported' => '1'
            */
        ));
    }
}
