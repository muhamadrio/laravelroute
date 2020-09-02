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

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/belajar',function(){
    echo '<h1> Hello World</h1>';
    echo '<p> sedang belajar laravel V7';
});

Route::get('/mahasiswa/fasilitas/anto',function(){
    echo '<h2 style="text-align: center"><u>Welcome World</u></h2>';
});

Route::get('/mahasiswa/{nama}', function ($a) {
    return "tampilkan data mahasiswa bernama $a ";
});

Route::get('/stok_barang/{jenis?}/{merek?}',
    function ( $a = 'smartphone',$b = 'samsung') {
    return "cek sisa stok untuk  $a $b ";
});
