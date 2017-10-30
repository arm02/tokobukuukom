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


Auth::routes();

Route::get('logout',function ()
{
	Auth::logout();
	return redirect(url('login'));
});

Route::get('penjualan','PenjualanController@index');
Route::get('penjualan/search','PenjualanController@search');
Route::get('penjualan/add/{id}','PenjualanController@add');
Route::post('penjualan/save','PenjualanController@save');
Route::get('penjualan/struk/{id}','PenjualanController@struk');



Route::group(['prefix' => '/'] , function(){
	Route::group(['middleware' => 'admin'], function(){

		Route::get('' , 'HomeController@index');
		Route::get('/home', 'HomeController@index');

	});

});

Route::group(['prefix' => 'laporan'] , function(){
	Route::group(['middleware' => 'admin'], function(){

		Route::get('' , 'HomeController@laporan');
		Route::get('penjualan/pdf','PenjualanController@pdf');

	});

});


	Route::group(['prefix' => 'buku'] , function(){
	Route::group(['middleware' => 'admin'], function(){

		Route::get('' , 'BukuController@index');
		Route::get('add','BukuController@add');
		Route::post('save','BukuController@save');
		Route::get('edit/{id}','BukuController@edit');
		Route::post('update','BukuController@update');
		Route::get('delete/{id}','BukuController@delete');
		Route::get('pdf','BukuController@pdf');


	});

});

	Route::group(['prefix' => 'distributor'] , function(){
	Route::group(['middleware' => 'admin'], function(){

		Route::get('' , 'DistributorController@index');
		Route::get('add','DistributorController@add');
		Route::post('save','DistributorController@save');
		Route::get('edit/{id}','DistributorController@edit');
		Route::post('update','DistributorController@update');
		Route::get('delete/{id}','DistributorController@delete');
		Route::get('pdf','DistributorController@pdf');


	});
	});


	Route::group(['prefix' => 'pasok'] , function(){
	Route::group(['middleware' => 'admin'], function(){

		Route::get('' , 'PasokController@index');
		Route::get('add/{id}','PasokController@add');
		Route::post('save','PasokController@save');
		Route::get('edit/{id}','PasokController@edit');
		Route::post('update','PasokController@update');
		Route::get('delete/{id}','PasokController@delete');
		Route::get('pdf','PasokController@pdf');

	});
});

		Route::group(['prefix' => 'user'] , function(){
	Route::group(['middleware' => 'admin'], function(){

		Route::get('' , 'UserController@index');
		Route::get('add','UserController@add');
		Route::post('save','UserController@save');
		Route::get('edit/{id}','UserController@edit');
		Route::post('update','UserController@update');
		Route::get('delete/{id}','UserController@delete');
		Route::get('pdf','UserController@pdf');

	});
});


		Route::group(['prefix' => 'informasi'] , function(){
	Route::group(['middleware' => 'admin'], function(){

		Route::get('' , 'InformasiController@index');
		Route::get('add','InformasiController@add');
		Route::post('save','InformasiController@save');
		Route::get('edit/{id}','InformasiController@edit');
		Route::post('update','InformasiController@update');
		Route::get('delete/{id}','InformasiController@delete');

	});
});

