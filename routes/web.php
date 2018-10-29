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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Groupe Commandes
Route::prefix('/commandes')->group(function () {
    Route::get('nouvelle', 'CommandController@show')->name('create');
    Route::get('edition/{id}', 'CommandController@show')->name('edit');
    Route::get('liste', 'CommandController@list');
    Route::post('creation', 'CommandController@create');
    Route::put('edition/$id', 'CommandController@edit');
    Route::delete('suppression/$id', 'CommandController@delete');
});
