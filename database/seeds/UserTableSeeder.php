<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Martin Fajnor',
        'username' => 'martin',
        'email'    => 'martin@reco.sk',
        'password' => Hash::make('Reco1234'),
    ));
}

}