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

// Route::prefix('settings')->group(function() {
//     Route::get('/', 'SettingsController@index');
// });
Route::group(['middleware' => ['auth'],'prefix' => 'settings'], function () {
    Route::get('/', 'SettingsController@index');
    Route::get('product', 'ProductController@index')->name('product.index');
    Route::get('product/create', 'ProductController@create')->name('product.create');
    Route::post('product/store', 'ProductController@store')->name('product.store');
    Route::get('product/delete/{id}',"ProductController@destroy")->name('product.delete');
    Route::post('api/product','ProductController@product_list')->name('get.product');
});
