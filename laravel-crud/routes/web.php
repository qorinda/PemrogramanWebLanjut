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
//     return view('welcome');
// });

Route::get('/mahasiswa', 'mahasiswaController@index');

Route::get('/', 'mahasiswaController@index');

Route::get('/mahasiswa/tambah', 'mahasiswaController@tambah');

Route::post('/mahasiswa/simpan', 'mahasiswaController@simpan');

Route::get('/mahasiswa/detail/{id}', 'mahasiswaController@detail');

Route::get('/mahasiswa/edit/{id}', 'mahasiswaController@edit');

Route::post('/mahasiswa/update', 'mahasiswaController@update');

Route::get('/mahasiswa/hapus/{id}', 'mahasiswaController@hapus');