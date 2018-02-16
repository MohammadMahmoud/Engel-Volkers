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


Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::get('/manage', 'HomeController@index')->name('manage');

Route::get('/logout', function () {
    Auth::logout();
    return view('welcome');
})->name('logout');

Route::get('/client/create' , 'ClientsController@create')->name('create.client');
Route::post('/client/store' , 'ClientsController@store')->name('store.client');
Route::get('/client/edit/{id}' , 'ClientsController@edit')->name('edit.client');
Route::post('/client/update' , 'ClientsController@update')->name('update.client');
Route::get('/client/delete/{id}' , 'ClientsController@destroy')->name('delete.client');

Auth::routes();

