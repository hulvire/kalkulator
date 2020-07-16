<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sluzby', 'ServiceController@index')->name('sluzby');

Route::get('/kalkulacie', 'KalkulacieController@index')->name('kalkulacie');
Route::get('/katalog', 'KatalogController@index')->name('katalog');
Route::get('/letak', 'LetakController@index')->name('letak');

Route::get('/zakazky', 'ZakazkyController@index')->name('zakazky');

Route::get('/zoznam', 'ZoznamController@index')->name('zoznam');


Route::get('logout', array('uses' => 'HomeController@doLogout'));


Route::get('/import', 'ImportController@index')->name('import');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});