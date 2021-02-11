<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Redis;

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

// Route::get('/', function () {
// 	// $p=Redis::incr('p');
//     return view('welcome');
// });

Route::get('/','App\Http\Controllers\HomeController@index');
Route::get('/saldo','App\Http\Controllers\HomeController@SaldoTerkini');


//route list kategori pengeluaran
Route::get('/pengeluaran','App\Http\Controllers\PengeluaranController@listPengeluaran');
Route::get('/form_list_kategori','App\Http\Controllers\PengeluaranController@form_tambah');
Route::get('/edit_pengeluaran/{id}','App\Http\Controllers\PengeluaranController@editPengeluran');
Route::post('/tambah_kategori','App\Http\Controllers\PengeluaranController@tambahKategori');
Route::put('/update_pengeluaran/{id}','App\Http\Controllers\PengeluaranController@updatePengeluran');
Route::get('/hapus_pengeluaran/{id}','App\Http\Controllers\PengeluaranController@hapusKategori');

//route list kategori pemasukan
Route::get('/pemasukan','App\Http\Controllers\PemasukanController@listPemasukan');
Route::get('/form_list_kategori','App\Http\Controllers\PemasukanController@form_tambah');
Route::get('/edit_pemasukan/{id}','App\Http\Controllers\PemasukanController@editPemasukan');
Route::post('/tambah_kategori','App\Http\Controllers\PemasukanController@tambahKategori');
Route::put('/update_pemasukan/{id}','App\Http\Controllers\PemasukanController@updatePemasukan');
Route::get('/hapus_pemasukan/{id}','App\Http\Controllers\PemasukanController@hapusKategori');

//route transaksi
Route::get('/transaksi','App\Http\Controllers\TransaksiController@index');
Route::get('/form_transaksi','App\Http\Controllers\TransaksiController@form_tambah');
Route::get('/edit_transaksi/{id}','App\Http\Controllers\TransaksiController@editTrx');
Route::post('/tambah/transaksi','App\Http\Controllers\TransaksiController@tambahTrx');
Route::put('/update/transaksi/{id}','App\Http\Controllers\TransaksiController@updateTrx');
Route::get('/hapus/transaksi/{id}','App\Http\Controllers\TransaksiController@hapusTransaks');
