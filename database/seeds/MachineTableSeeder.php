<?php

use Illuminate\Database\Seeder;
use App\Machine;

class MachineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*
    public function run()
    {
        DB::table('machines')->delete();
        Machine::create(array(
            'str_machine_name' => '7931366',
            'int_mounting' => '12,00',
            'int_copying' => '7,00',
            'int_matrix' => '7,50',
            'int_preparation' => '20,00',
            'int_print' => '11,00',
            'int_machine_sum' => '46,50',
            'int_machine_discount' => '0,00',
            'bool_active' => 'true',
        ));
    }
    */
    public function run()
    {
        DB::table('machines')->delete();
        DB::table('machines')->insert(array(
            0 =>
            array(
                'str_machine_name' => '466A',
                'int_mounting' => '2016',
                'int_copying' => '1026',
                'int_matrix' => '810',
                'int_preparation' => '4320',
                'int_print' => '2214',
                'int_machine_sum' => '8316',
                'int_machine_discount' => '3000',
                'bool_active' => '1',
            ),
            1 =>
            array(
                'str_machine_name' => 'A715',
                'int_mounting' => '1200',
                'int_copying' => '700',
                'int_matrix' => '750',
                'int_preparation' => '2000',
                'int_print' => '1100',
                'int_machine_sum' => '4650',
                'int_machine_discount' => '0',
                'bool_active' => '1',
            ),
        ));
    }
}
