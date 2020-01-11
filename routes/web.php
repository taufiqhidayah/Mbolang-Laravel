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

Route::get('/daftar-produk', function () {
    return view('daftar-produk');
});
// Route::get('/insert', function () {
//         return view('insert');
//     });
Auth::routes();
Route::get('/cari','BarangController@cari');
Route::get('/edit/hapus/{id}','HomeController@hapus');
Route::get('/insert','HomeController@insert')->name('home');

Route::get('/kirimemail','KirimEmailController@index');
Route::post('/edit/hapus','HomeController@hapus');
Route::post('/edit/update','HomeController@update');
Route::get('/edit','HomeController@edit')->name('home');
Route::get('/detail-edit/{id}','HomeController@detailedit');
Route::get('/daftar-produk','BarangController@produk');
Route::post('insert/store', 'HomeController@store');
Route::get('/detail-produk/{id}','BarangController@detail');

Route::get('/', 'BarangController@index');
Route::get('auth/activate', 'Auth\ActivationController@activate')->name('auth.activate');
Route::get('auth/activate/resend', 'Auth\ActivationResendController@showResendForm')->name('auth.activate.resend');
Route::post('auth/activate/resend', 'Auth\ActivationResendController@resend');
Route::get('/tambah','HomeController@tambah');
Route::get('/pemesanan', 'HomeController@index')->name('home');

