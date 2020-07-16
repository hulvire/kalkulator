<?php

use Illuminate\Database\Seeder;
use App\Format;

class FormatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*
    public function run()
    {
        DB::table('formats')->delete();
        Format::create(array(
            'str_format_name' => 'A4',
            'bool_rotate' => '0',
        ));
    }
    */
    public function run()
    {
        DB::table('formats')->delete();
        DB::table('formats')->insert(array(
            0 => 
            array (
                'str_format_name' => '2',
                'bool_rotate' => '0',
            ),
            1 =>
            array (
                'str_format_name' => '3',
                'bool_rotate' => '0',
            ),
            2 =>
            array (
                'str_format_name' => '3 + obratka',
                'bool_rotate' => '1',
            ),
            3 =>
            array (
                'str_format_name' => '10',
                'bool_rotate' => '0',
            ),
            4 =>
            array (
                'str_format_name' => '10 + obratka',
                'bool_rotate' => '1',
            ),
        ));
    }
}
