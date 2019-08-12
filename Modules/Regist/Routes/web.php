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

Route::prefix('regist')->group(function() {
    Route::get('/step1', 'RegistController@index')->name('register');
    Route::post('sendotp','RegistController@otp')->name('otp');
    Route::get('step2','RegistController@step2')->name('step2');
    Route::get('step3','RegistController@step3')->name('final');
    Route::post('token','RegistController@cek_token')->name('token');
    Route::post('final', 'RegistController@final')->name('post_final');

});
