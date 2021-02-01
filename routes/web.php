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


// untuk menampilkan view sederhana tanpa proses bisnis yang kompleks
/* Route::get('/', function () {

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
}); */

//route ini akan mengarah ke controller PagesController method Home
Route::get('/', 'PagesController@home');
//route ini akan mengarah ke controller PagesController method about
Route::get('/about', 'PagesController@about');


Route::get('/mahasiswa', 'MahasiswaController@index');
