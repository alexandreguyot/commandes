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
    Route::get('creation', ['as'=>'get.commandes.creation','uses' => 'CommandController@create_show']);
    Route::get('edition/{id}', ['as'=>'get.commandes.edition', 'uses' => 'CommandController@edit_show']);
    Route::get('liste', ['as'=>'get.commandes.liste', 'uses' => 'CommandController@list']);
    Route::post('creation', ['as'=>'post.commandes.creation', 'uses' => 'CommandController@create']);
    Route::put('edition/$id', ['as'=>'put.commandes.edition', 'uses' => 'CommandController@edit']);
    Route::delete('suppression/$id', ['as'=>'delete.commandes.suppression', 'uses' => 'CommandController@delete']);
});
