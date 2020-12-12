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


Route::get('/dashboard','PengajuanController@index')->name('user.dashboard');
Route::get('/data-pengajuan','PengajuanController@show')->name('user.dataPengajuan');
Route::get('/tambah-pengajuan','PengajuanController@create')->name('user.tambahPengajuan');
Route::post('/pengajuan','PengajuanController@store')->name('guru.store');

Route::get('/', 'HomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
