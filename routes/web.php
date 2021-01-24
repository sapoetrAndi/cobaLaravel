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


//
Route::get('/', function () {

    //mengembalikan view dari halaman index
    return view('index');
});

Route::get('/about', function () {

    $nama = "andi saputra";

    //mengembalikan view dari halaman about
    //kita juga bisa mengirimkan data ke view menggunakan parameter
    return view('about', ['nama' => $nama]);
});

Route::get('/mahasiswa', function () {

    //mengembalikan view dari halaman mahasiswa
    return view('mahasiswa');
});
