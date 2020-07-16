<?php

use Illuminate\Database\Seeder;
use App\Paper;

class PaperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*
    public function run()
    {
        DB::table('papers')->delete();
        Paper::create(array(
            'str_paper_name' => '',
            'byte_paper_price_type' => '',
            'int_paper_format_id' => '',
            'int_paper_price' => '',
            'bool_active' => '',
        ));
    }
    */
    public function run()
    {
        DB::table('papers')->delete();
        DB::table('papers')->insert(array(
            0 =>
            array(
                'str_paper_name' => 'Skládačková lepenka',
                'byte_paper_price_type' => '0',
                'int_paper_format_id' => '0',
                'int_paper_price' => '3500',
                'bool_active' => '1',
            ),
            1 =>
            array(
                'str_paper_name' => 'Offset',
                'byte_paper_price_type' => '0',
                'int_paper_format_id' => '0',
                'int_paper_price' => '3500',
                'bool_active' => '1',
            ),
            2 =>
            array(
                'str_paper_name' => 'Samo-propis',
                'byte_paper_price_type' => '1',
                'int_paper_format_id' => '11',
                'int_paper_price' => '280',
                'bool_active' => '1',
            ),
            3 =>
            array(
                'str_paper_name' => 'Papírová samolepka',
                'byte_paper_price_type' => '1',
                'int_paper_format_id' => '11',
                'int_paper_price' => '4000',
                'bool_active' => '1',
            ),
            4 =>
            array(
                'str_paper_name' => 'Křída - LESK',
                'byte_paper_price_type' => '0',
                'int_paper_format_id' => '0',
                'int_paper_price' => '4000',
                'bool_active' => '1',
            ),
            5 =>
            array(
                'str_paper_name' => 'Křída - MAT',
                'byte_paper_price_type' => '0',
                'int_paper_format_id' => '0',
                'int_paper_price' => '4000',
                'bool_active' => '1',
            ),
            6 =>
            array(
                'str_paper_name' => 'Skládačková lepenka',
                'byte_paper_price_type' => '1',
                'int_paper_format_id' => '11',
                'int_paper_price' => '3000',
                'bool_active' => '0',
            ),
            7 =>
            array(
                'str_paper_name' => 'grafický papír',
                'byte_paper_price_type' => '1',
                'int_paper_format_id' => '11',
                'int_paper_price' => '4000',
                'bool_active' => '1',
            ),
            8 =>
            array(
                'str_paper_name' => 'Offset',
                'byte_paper_price_type' => '0',
                'int_paper_format_id' => '0',
                'int_paper_price' => '3500',
                'bool_active' => '0',
            ),
        ));
    }
}
