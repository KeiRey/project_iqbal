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


// tiket
Route::get('/tiket', 'tiketController@index');
Route::get('/tiket/create', 'tiketController@create');
Route::post('/tiket/store', 'tiketController@store');
Route::get('/tiket/edit/{id}', 'tiketController@edit');
Route::put('/tiket/update/{id}', 'tiketController@update');
Route::get('tiket/destroy/{id}','tiketController@destroy');


// admin
Route::get('/admin', 'adminController@index');
Route::get('/admin/create', 'adminController@create');
Route::post('/admin/store', 'adminController@store');
Route::get('/admin/edit/{id}', 'adminController@edit');
Route::put('/admin/update/{id}', 'adminController@update');
Route::get('admin/destroy/{id}','adminController@destroy');


// user
Route::get('/user', 'userController@index');
Route::get('/user/create', 'userController@create');
Route::post('/user/store', 'userController@store');
Route::get('/user/edit/{id}', 'userController@edit');
Route::put('/user/update/{id}', 'userController@update');


// artikel
Route::get('/artikel', 'artikelController@index');
Route::get('/artikel/create', 'artikelController@create');
Route::post('/artikel/store', 'artikelController@store');
Route::get('/artikel/edit/{id}', 'artikelController@edit');
Route::put('/artikel/update/{id}', 'artikelController@update');
Route::get('artikel/destroy/{id}','artikelController@destroy');


// kategori
Route::get('/kategori', 'kategoriController@index');
Route::get('/kategori/create', 'kategoriController@create');
Route::post('/kategori/store', 'kategoriController@store');
Route::get('/kategori/edit/{id}', 'kategoriController@edit');
Route::put('/kategori/update/{id}', 'kategoriController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
