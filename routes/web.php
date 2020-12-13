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

Route::get('/admin', function () {
  return view('admin.dashboard');
});
Route::get('/periode', function () {
  return view('admin.periode');
});
Route::get('/data', function () {
  return view('admin.dataMasuk');
});


Route::get('/profil', 'ProfilController@index')->name('profil');
Route::get('/profil/isi-profil', 'ProfilController@create')->name('profil.isi');
Route::post('/profil/isi-profil-guru', 'ProfilController@store')->name('profil.store');
Route::get('/profil/edit-profile/{id}', 'ProfilController@edit')->name('profil.edit');
Route::put('/profil/update/{id}', 'ProfilController@update')->name('profil.update');

Route::get('/dashboard','PengajuanController@index')->name('user.dashboard');
Route::get('/data-pengajuan','PengajuanController@dataPengajuan')->name('user.dataPengajuan');
Route::get('/detail-pengajuan/{id}','PengajuanController@show')->name('user.detail');
Route::get('/tambah-pengajuan','PengajuanController@create')->name('user.tambahPengajuan');
Route::post('/pengajuan','PengajuanController@store')->name('guru.store');

Route::get('/', 'HomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
