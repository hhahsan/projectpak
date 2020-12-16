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

// Route::get('/admin', function () {
//   return view('admin.dashboard');
// });
// Route::get('/periode', function () {
//   return view('admin.periode');
// });
// Route::get('/data', function () {
//   return view('admin.dataMasuk');
// });
// Route::get('/pengguna', function () {
//   return view('admin.dataPengguna');
// });
// Route::get('/validasi', function () {
//   return view('pegawai.validasi');
// });


Route::get('/', 'HomeController@index')->name('index');

Auth::routes();



Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/data-masuk', 'AdminController@dataMasuk')->name('admin.dataMasuk');
Route::get('/admin/data-masuk/detail/{id}','AdminController@show')->name('admin.detailData');
Route::get('/admin/periode', 'AdminController@create')->name('admin.periode');
Route::get('/admin/data-masuk/validasi/{id}','AdminController@edit')->name('admin.validasi');
Route::get('/admin/delete/{id}','AdminController@dataDestroy')->name('admin.dataDestroy');
Route::post('/admin/periode', 'AdminController@store')->name('admin.store');
Route::put('/admin/data-masuk/validasi/{id}', 'AdminController@update')->name('admin.update');
Route::get('/admin/data-user','AdminController@dataUser')->name('admin.dataUser');
Route::get('/admin/data-user/tambah-user','AdminController@createUser')->name('admin.createUser');
Route::post('/admin/tambah-user', 'AdminController@storeUser')->name('admin.storeUser');
Route::post('/admin/delete/{id}', 'AdminController@destroy')->name('admin.destroy');
Route::get('/admin/data-user/edit-user/{id}','AdminController@editUser')->name('admin.editUser');
Route::put('/admin/data-user/update-user/{id}', 'AdminController@updateUser')->name('admin.updateUser');

Route::get('/pegawai', 'PegawaiController@index')->name('pegawai');
Route::get('/pegawai/data-masuk', 'PegawaiController@dataMasuk')->name('pegawai.dataMasuk');
Route::get('/pegawai/data-masuk/detail/{id}','PegawaiController@show')->name('pegawai.detailData');
Route::get('/pegawai/periode', 'PegawaiController@create')->name('pegawai.periode');
Route::get('/pegawai/data-masuk/validasi/{id}','PegawaiController@edit')->name('pegawai.validasi');
Route::post('/pegawai/periode', 'PegawaiController@store')->name('pegawai.store');
Route::put('/pegawai/data-masuk/validasi/{id}', 'PegawaiController@update')->name('pegawai.update');


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
