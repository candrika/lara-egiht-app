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

//user guest
Route::get('/','App\Http\Controllers\LoginController@index')->name('login');
Route::post('/login/auth','App\Http\Controllers\LoginController@loginAuth');
Route::get('/logout','App\Http\Controllers\LoginController@logout');
Route::get('/create/user/','App\Http\Controllers\LoginController@createUser')->name('regis');
Route::post('user/register','App\Http\Controllers\LoginController@userRegister')->name('user.regis');

//user 
Route::group(['middleware'=>'auth'],function(){
    Route::get('/dashboard','App\Http\Controllers\dashboardController@index')->name('dashboard');
});