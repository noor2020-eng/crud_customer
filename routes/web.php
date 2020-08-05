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

Route::get('/',function(){
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/content',function(){
    return view('teams.content');
});
//
//Route::get('/tables',function(){
//    return view('customers.tables');
//});
Route::get('/customers', 'customersController@index')->name('index');

Route::group(['middleware'=>'Admin'], function(){
    Route::get('/customers/create', 'customersController@create')->name('create');
    Route::post('/customers', 'customersController@store')->name('store');
    Route::get('/customers/{id}', 'customersController@edit')->name('edit');
    Route::put('/customers/{id}/update', 'customersController@update')->name('update');
    Route::delete('/customers/{id}', 'customersController@delete')->name('delete');
    Route::get('/tables', 'customersController@getData');

});
