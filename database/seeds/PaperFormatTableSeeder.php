<?php

use Illuminate\Database\Seeder;
use App\PaperFormat;

class PaperFormatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*
    public function run()
    {
        DB::table('paper_formats')->delete();
        PaperFormat::create(array(
            'str_pf_name'         => 'meno PF papier format',
            'str_pf_desc'         => 'desc PF papier format',
            'int_pf_width'        => '210',
            'int_pf_height'       => '148',
            'int_sort_order'      => '2',
            'bool_pf_enabled'     => '1',
        ));
    }
    */
    public function run()
    {
        DB::table('paper_formats')->delete();
        DB::table('paper_formats')->insert(array(
            0 =>
            array (
                'str_pf_name'         => 'A0',
                'str_pf_desc'         => '',
                'int_pf_width'        => '841',
                'int_pf_height'       => '1189',
                'int_sort_order'      => '1',
                'bool_pf_enabled'     => '0',
            ),
            1 =>
            array (
                'str_pf_name'         => 'A1',
                'str_pf_desc'         => '',
                'int_pf_width'        => '594',
                'int_pf_height'       => '841',
                'int_sort_order'      => '2',
                'bool_pf_enabled'     => '0',
            ),
            2 =>
            array (
                'str_pf_name'         => 'A2',
                'str_pf_desc'         => '',
                'int_pf_width'        => '420',
                'int_pf_height'       => '594',
                'int_sort_order'      => '3',
                'bool_pf_enabled'     => '1',
            ),
            3 =>
            array (
                'str_pf_name'         => 'A3',
                'str_pf_desc'         => '',
                'int_pf_width'        => '297',
                'int_pf_height'       => '420',
                'int_sort_order'      => '4',
                'bool_pf_enabled'     => '1',
            ),
            4 =>
            array (
                'str_pf_name'         => 'A4',
                'str_pf_desc'         => '',
                'int_pf_width'        => '210',
                'int_pf_height'       => '297',
                'int_sort_order'      => '5',
                'bool_pf_enabled'     => '1',
            ),
            5 =>
            array (
                'str_pf_name'         => 'A5',
                'str_pf_desc'         => '',
                'int_pf_width'        => '148',
                'int_pf_height'       => '210',
                'int_sort_order'      => '6',
                'bool_pf_enabled'     => '1',
            ),
            6 =>
            array (
                'str_pf_name'         => 'A6',
                'str_pf_desc'         => '',
                'int_pf_width'        => '105',
                'int_pf_height'       => '148',
                'int_sort_order'      => '15',
                'bool_pf_enabled'     => '1',
            ),
            7 =>
            array (
                'str_pf_name'         => 'A7',
                'str_pf_desc'         => '',
                'int_pf_width'        => '74',
                'int_pf_height'       => '105',
                'int_sort_order'      => '16',
                'bool_pf_enabled'     => '1',
            ),
            8 =>
            array (
                'str_pf_name'         => 'A8',
                'str_pf_desc'         => '',
                'int_pf_width'        => '52',
                'int_pf_height'       => '74',
                'int_sort_order'      => '17',
                'bool_pf_enabled'     => '1',
            ),
            9 =>
            array (
                'str_pf_name'         => 'B0',
                'str_pf_desc'         => '',
                'int_pf_width'        => '1000',
                'int_pf_height'       => '1414',
                'int_sort_order'      => '8',
                'bool_pf_enabled'     => '0',
            ),
            10 =>
            array (
                'str_pf_name'         => 'B1',
                'str_pf_desc'         => '',
                'int_pf_width'        => '707',
                'int_pf_height'       => '1000',
                'int_sort_order'      => '9',
                'bool_pf_enabled'     => '0',
            ),
            11 =>
            array (
                'str_pf_name'         => 'B2',
                'str_pf_desc'         => '',
                'int_pf_width'        => '500',
                'int_pf_height'       => '707',
                'int_sort_order'      => '10',
                'bool_pf_enabled'     => '1',
            ),
            12 =>
            array (
                'str_pf_name'         => 'B3',
                'str_pf_desc'         => '',
                'int_pf_width'        => '353',
                'int_pf_height'       => '500',
                'int_sort_order'      => '11',
                'bool_pf_enabled'     => '1',
            ),
            13 =>
            array (
                'str_pf_name'         => 'B4',
                'str_pf_desc'         => '',
                'int_pf_width'        => '250',
                'int_pf_height'       => '353',
                'int_sort_order'      => '12',
                'bool_pf_enabled'     => '1',
            ),
            14 =>
            array (
                'str_pf_name'         => 'B5',
                'str_pf_desc'         => '',
                'int_pf_width'        => '176',
                'int_pf_height'       => '250',
                'int_sort_order'      => '13',
                'bool_pf_enabled'     => '1',
            ),
            15 =>
            array (
                'str_pf_name'         => 'B6',
                'str_pf_desc'         => '',
                'int_pf_width'        => '125',
                'int_pf_height'       => '176',
                'int_sort_order'      => '18',
                'bool_pf_enabled'     => '1',
            ),
            16 =>
            array (
                'str_pf_name'         => 'B7',
                'str_pf_desc'         => '',
                'int_pf_width'        => '88',
                'int_pf_height'       => '125',
                'int_sort_order'      => '19',
                'bool_pf_enabled'     => '1',
            ),
            17 =>
            array (
                'str_pf_name'         => 'B8',
                'str_pf_desc'         => '',
                'int_pf_width'        => '62',
                'int_pf_height'       => '88',
                'int_sort_order'      => '20',
                'bool_pf_enabled'     => '1',
            ),
            18 =>
            array (
                'str_pf_name'         => 'A10',
                'str_pf_desc'         => '3 A4',
                'int_pf_width'        => '297',
                'int_pf_height'       => '660',
                'int_sort_order'      => '7',
                'bool_pf_enabled'     => '1',
            ),
            19 =>
            array (
                'str_pf_name'         => '<vlastni>',
                'str_pf_desc'         => 'vlastni format papiru',
                'int_pf_width'        => '0',
                'int_pf_height'       => '0',
                'int_sort_order'      => '14',
                'bool_pf_enabled'     => '1',
            )
        ));
    }
}
