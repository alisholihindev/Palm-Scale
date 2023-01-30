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

// Route::get('/', function () {
//     return view('admin.layouts.app');
// });

Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware' => ['auth']], function ()
{
	Route::get('/dashboard','DashboardController@index')->name('dashboard');
	Route::resource('user','UserController');
	Route::resource('profil-perusahaan','ProfilPerusahaanController');
	Route::resource('tbs-masuk','TbsMasukController');
	Route::get('tbs-masuk/cetak/{id}','TbsMasukController@cetak')->name('tbsmasuk.cetak');
	Route::get('tbs-keluar/cetak/{id}','TbsKeluarController@cetak')->name('tbskeluar.cetak');
	Route::get('laporan','LaporanController@index')->name('laporan.index');
	Route::post('laporan/cetak','LaporanController@cetak')->name('laporan.cetak');
	Route::resource('tbs-keluar','TbsKeluarController');
	Route::resource('nota-penimbangan-tbs','NotaPenimbanganTbsController');
	Route::resource('perusahaan-mitra','PerusahaanMitraController');
	Route::resource('sopir','SopirController');
	Route::resource('user-log','UserLogController');
});

// Authentication Routes...
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('', 'Auth\LoginController@redirectTo');
