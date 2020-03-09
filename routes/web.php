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

// route tampil data pegawai
Route::get('/pegawai', 'PegawaiController@index');
// route tambah data
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
// route simpan data
Route::post('/pegawai/store', 'PegawaiController@store');
// route edit data
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
// route simpan data edit
Route::put('/pegawai/update/{id}', 'PegawaiController@update');
// route hapus data
Route::get('/pegawai/hapus/{id}', 'PegawaiController@delete');
