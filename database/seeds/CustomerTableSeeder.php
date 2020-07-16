<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->delete();
        Customer::create(array(
            'int_user_id' => '1',
            'int_old_id' => '0',
            'str_first_name' => 'Petr',
            'str_last_name' => 'Klamavý',
            'str_company' => 'Reklamka, a.s.',
            'str_phone' => '545123456',
            'str_email' => '',
            'str_address' => 'mor. nam. 8
            63800 Brno',
            'str_ic' => '12345678',
            'str_dic' => 'CZ12345678',
            'int_client_printing_discount' => '0',
            'bool_active' => '1',
            'bool_erased' => '1',
            'bool_exported' => '1'
        ));
    }
}
