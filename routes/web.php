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
Route::group(['middleware'=>['auth','verified']],function(){
    Route::get('user_addresses','UserAddressController@index')->name('user_addresses.index');

    Route::post('user_addresses', 'UserAddressController@store')->name('user_addresses.store');

    Route::get('user_addresses/create', 'UserAddressController@create')->name('user_addresses.create');
    
});

Route::get('/', 'PagesController@root')->name('root')->middleware('verified');

Auth::routes(['verify'=>true]);


