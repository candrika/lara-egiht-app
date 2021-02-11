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

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo',function(){
	return 'Halo, Selamat datang';
});

Route::get('coba/tambah/{nama}','CobaController@tambah');
Route::get('coba/tampil','CobaController@tampil');
Route::get('coba/hapus','CobaController@hapus');
Route::get('coba/hashing','CobaController@hashing');
Route::get('coba/check_pass/{pass}','CobaController@check_pass');
//route query builder

Route::get('pegawai','PegawaiController@index');

Route::get('pegawai/tambah','PegawaiController@tambah');

Route::post('pegawai/store','PegawaiController@store');

Route::get('pegawai/edit/{id}','PegawaiController@edit');

Route::post('pegawai/update/','PegawaiController@update');

Route::get('pegawai/hapus/{id}','PegawaiController@hapus');

//route Eloquent

Route::get('pegawai/get_elo','PegawaiController@get_elo');

Route::get('pegawai/tambah_elo','PegawaiController@tambah_elo');

Route::get('pegawai/edit_elo/{id}','PegawaiController@edit_elo');

Route::post('pegawai/save','PegawaiController@save');

Route::put('pegawai/update_elo/{id}','PegawaiController@update_elo');

Route::get('pegawai/hapus_elo/{id}','PegawaiController@update_elo');

//soft deleted
Route::get('pegawai/trash','PegawaiController@trash');

Route::get('pegawai/kembalikan','PegawaiController@kembalikan');

Route::get('pegawai/hapus_permanen','PegawaiController@hapus_permanen');

Route::get('pegawai/kembalikan_semua','PegawaiController@kembalikan_semua');

Route::get('pegawai/hapus_permanen_semua','PegawaiController@hapus_permanen_semua');