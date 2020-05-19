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

// Route::get('/', function () {
//     return view('coba');
// });

//Admin
Route::get('/','adminController@index');

Route::get('/mobil','adminController@getMobil');
Route::get('/tambah/mobil','adminController@tambahMobil');
Route::get('/simpan/mobil','adminController@insertMobil');
Route::get('/detailmobil/{id}','adminController@detailMobil');
Route::get('/edit/mobil/{id}','adminController@editMobil');
Route::get('/update/mobil','adminController@updateMobil');
Route::get('/delete/mobil/{id}','adminController@deleteMobil');

Route::get('/type','adminController@getType');
Route::get('/tambah/type','adminController@tambahType');
Route::get('/simpan/type','adminController@simpanType');
Route::get('/type/detailtype/{id}','adminController@detailType');
Route::get('/edit/type/{id}','adminController@editType');
Route::get('/update/type','adminController@updateType');
Route::get('/delete/type/{id}','adminController@deleteType');

Route::get('/customer','adminController@getCustomer');
Route::get('/tambah/customer','adminController@tambahCustomer');
Route::get('/simpan/customer','adminController@simpanCustomer');
Route::get('/edit/customer/{id}','adminController@editCustomer');
Route::get('/update/customer','adminController@updateCustomer');
Route::get('/delete/type/{id}','adminController@deleteType');

Route::get('/transaksi','adminController@getTransaksi');

//Customer
Route::get('/dashboard','MobilController@index');
Route::get('/mobilcus','MobilController@getMobil');
Route::get('/detailmobilcus/{id}','MobilController@detailMobil');

