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

Route::get('/', 'bukuController@index')->name('lihatdata');
Route::post('/daftar', 'bukuController@store')->name('lihatdata');
Route::get('/edit/{id}','bukuController@edit');
Route::post('/update/','bukuController@update');
Route::get('/delete/{id}','bukuController@delete' );

Route::get('/daftar', function () {
    return view('daftar');
});