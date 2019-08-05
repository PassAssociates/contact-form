<?php

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

Route::group(['namespace'=>'RajaSaadhvi\Contact\Http\Controllers'],function (){
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send')->name('contact');
});

